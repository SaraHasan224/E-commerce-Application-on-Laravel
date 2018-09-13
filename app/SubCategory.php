<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories'; 
    protected $primaryKey = 'sub_category_id'; 
    public $timestamps = true;
}
