<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsAttribute extends Model
{
    protected $table = "product_attributes";
    protected $primaryKey = "id";
    public $timestamps = true;
}
