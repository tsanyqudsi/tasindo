<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use League\Csv\Statement;

use App\Order;
use App\Courier;
use App\User;
use App\Status;
use File;
use PDF;
use DB;

class OrderController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function import_csv(Request $request)
    {
        $csv = Reader::createFromPath($request->file('csv-file'),'r');
        $records = $csv->getContent();
        $records = str_replace("\r\n",',', $records);
        $records = rtrim($string, ',');
        $records = explode(',',$records);
        $records = compact('records');
        dd($records);
        foreach ($records as $record) {
            Order::where('order_badge','=', $record[0])
            ->update(
                [
                    'third_party_receipt_number' => $record[1],
                    'status' => '2' 
                ]
            );
        }
        return redirect()->route('voyager.orders.index')->with($this->alertSuccess(__('Successfully Uploaded CSV')));
    }

    public function print_note($id)
    {
        $order = Order::find($id);
        $sender_data = User::find($order->sender_data)->name;
        $courier = Courier::find($order->courier)->courier;
        $note = PDF::loadView('pdf.note',compact('order','sender_data','courier'))
                ->setPaper('a4','portrait');
        $filename = $order->order_badge;
        return $note->download($filename.'.pdf');
    }

    public function bulk_print_note(Request $request)
    {
        $html ='';
        $id= explode(',', $request->id);
        $orders = Order::find($id);

        foreach($orders as $order){
            $sender_data = User::find($order->sender_data)->name;
            $courier = Courier::find($order->courier)->courier;
            $view = view('pdf.note')->with(compact('order','sender_data','courier'));
            $html .= $view->render();
        }
        $pdf = PDF::loadHTML($html);            
        $note = $pdf->setPaper('a4', 'portrait');
        return $note->download('delivery_note'.date('d-m-Y').'.pdf');
    }

    public function editable(Request $request)
    {
        $db_field = DB::table('data_rows')->where('display_name',$request->name)->value('field');

        $receipt = Order::find($request->id);
        $receipt->{$db_field} = $request->value;
        //Change Status Pengiriman
        if(isset($receipt->admin_receipt_number)){
            $receipt->status = 2;
        }else{
            $receipt->status = 1;
        };

        $receipt->save();
        return $receipt->{$db_field};
    }

    public function refresh_status($id)
    {
        $status = Order::find($id)->status;
	$status  = Status::find($status)->status;
        return $status;
    }
}
