<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function saleStatus()
    {
        return $this->belongsTo('App\SaleStatus','sale_status'); 
    }
}
 