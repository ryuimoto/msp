<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'product_name', 
        'purchase_price',
        'expected_sale_price',
        'point',
        'sale_status',
        'memo',
    ];


    public function saleStatus()
    {
        return $this->belongsTo('App\SaleStatus','sale_status'); 
    }
}
 