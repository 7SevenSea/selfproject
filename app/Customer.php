<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['number','table'];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function getTotalPriceAttribute()
    {
        $total_price = 0;

        foreach ($this->orders as $order) {
            $total_price += $order->menu->price;
        }

        return $total_price;
    }

}
