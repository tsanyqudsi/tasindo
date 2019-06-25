<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use League\Csv\Statement;

use App\Order;
use App\Courier;
use App\User;
use File;
use PDF;

class OrderController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function import_csv(Request $request)
    {
        $csv = Reader::createFromPath($request->file('csv-file'),'r');
        $records = $csv->getContent();
        $records = compact('records');
        foreach ($records as $record) {
            Order::where('order_badge','=', $record[0])
            ->update(
                [
                    'admin_receipt_number' => $record[1],
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
                ->setPaper('a4','landscape');
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
        $note = $pdf->setPaper('a4', 'landscape');
        return $note->download('delivery_note'.date('d-m-Y').'.pdf');
    }
}