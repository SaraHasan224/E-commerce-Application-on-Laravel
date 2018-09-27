<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $table = 'product_images'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;
}
