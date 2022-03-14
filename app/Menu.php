<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    protected $fillable = ['order', 'category_id', 'name', 'price', 'pickup', 'stock'];
}
