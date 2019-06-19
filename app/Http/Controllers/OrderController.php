<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
use League\Csv\Statement;
use TCG\Voyager\Events\BreadAdded;
use App\Order;
use File;

class OrderController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function import_csv(Request $request){
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
}