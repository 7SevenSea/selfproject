<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['menu_id','customer_id', 'table', 'number'];

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

}
