<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    
    public function setSenderDataAttribute()
    {
        $this->attributes['sender_data'] = Auth::user()->id;
    }
}