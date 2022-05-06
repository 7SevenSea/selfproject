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

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
    }

    protected $fillable = ['order', 'category_id', 'name', 'price', 'pickup', 'stock'];
}
