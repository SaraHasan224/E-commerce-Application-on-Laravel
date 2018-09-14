<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    protected $primaryKey = "product_id";
    public $timestamps = true;

    public function subcategory(){
        return $this->belongsTo('App\SubCategory','sub_category_id');
     }

     public function category(){
        return $this->belongsTo('App\Category','category_id');
     }
}
