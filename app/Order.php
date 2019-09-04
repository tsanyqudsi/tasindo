<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

use Auth;


class Order extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function scopeCurrentUser($query)
    {
        if(Auth::user()->hasRole('user')){
            return $query->where('sender_data', Auth::user()->id);
        }
    }

    public function setOrderBadgeAddAttribute()
    {
        // select last data on the record
        $data_badge = DB::table('orders')->whereYear('created_at','=',date('Y'))->latest()->first();
        
        // Validate the result, making sure if there's a record then choose the ID of the Record, if it doesn't then equal to 0.
        if(is_null($data_badge))
        {
            $data_badge = 0;
        } else
        {
            $data_badge = $data_badge->id;
        }
        // This is supposed to be the format for Order Badge.
        $data_order_badge = date('y').sprintf('%02d',date('m')).sprintf('%05d',$data_badge+1);
        
        $this->attributes['order_badge'] = $data_order_badge;
    }

    public function setSenderDataAttribute()
    {
        $this->attributes['sender_data'] = Auth::user()->id;
    }

    public function setStatusAttribute(){
        if(isset($this->attributes['admin_receipt_number'])){
            $this->attributes['status'] = 2;
        } else

        $this->attributes['status'] = 1;
    }
}