<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReachUsAt extends Model
{    
    protected $table = "contact";
    protected $primaryKey = "id";
    public $timestamps = true;
}
