<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsAttribute extends Model
{
    protected $table = "product_attributes";
    protected $primaryKey = "id";
    public $timestamps = true;

    
    public function attributes(){
        return $this->belongsTo('App\Products','product_id');
     }
}
