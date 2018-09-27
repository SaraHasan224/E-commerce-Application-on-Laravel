<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     
     protected $table = 'categories'; 
     protected $primaryKey = 'category_id'; 
     public $timestamps = true;

    //  public function subcategory(){
    //     return $this->hasMany('App\SubCategory','category_id');
    //  }
     

    //  public function product(){
    //     return $this->hasMany('App\Products','category_id');
    //  }
    
    public function categories(){
           return $this->hasMany('App\Category','category_id');
        }
}
