<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexPageData extends Model
{
    protected $table = 'indexpage'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;
}
