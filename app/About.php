<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{    
    protected $table = 'about'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;
}
