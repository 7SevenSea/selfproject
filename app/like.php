<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function menus()
    {
        return $this->hasMany('App\Menu');
    }

}
