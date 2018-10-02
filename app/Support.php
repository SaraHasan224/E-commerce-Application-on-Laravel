<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{    
    protected $table = 'feedback'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;
}
