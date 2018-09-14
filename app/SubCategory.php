<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories'; 
    protected $primaryKey = 'sub_category_id'; 
    public $timestamps = true;

    public function category(){
        return $this->belongsTo('App\Category','category_id');
     }
     public function product(){
        return $this->hasMany('App\Products','sub_category_id');
     }
}
