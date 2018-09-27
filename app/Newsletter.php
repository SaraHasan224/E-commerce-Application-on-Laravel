<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    
    protected $table = 'newsletter-signup'; 
    protected $primaryKey = 'category_id'; 
    public $timestamps = true;
}
