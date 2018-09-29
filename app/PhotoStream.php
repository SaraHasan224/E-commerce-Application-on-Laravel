<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoStream extends Model
{
    protected $table = 'photostream'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;
}
