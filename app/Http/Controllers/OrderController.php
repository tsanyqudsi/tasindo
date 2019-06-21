<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use League\Csv\Statement;

use App\Order;
use File;
use PDF;

class OrderController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function import_csv(Request $request)
    {
        $csv = Reader::createFromPath($request->file('csv-file'),'r');
        $records = $csv->getContent();
        $records = array_map('str_getcsv',explode("\n", $records));
        foreach ($records as $record) {
            if(isset($record[0])){
                Order::where('order_badge','=', $record[0])
                ->update(
                    [
                        'admin_receipt_number' => $record[1],
                        'status' => '2' 
                    ]
                );
            }
        }
        return redirect()->route('voyager.orders.index')->with($this->alertSuccess(__('Successfully Uploaded CSV')));
    }

    public function print_note($id)
    {
        $order = Order::find($id);
        $note = PDF::loadView('pdf.note')
            ->setPaper('a4', 'portrait');
        $order_badge = $order->order_badge;

        return $note->download($order_badge.'.pdf');
    }
}