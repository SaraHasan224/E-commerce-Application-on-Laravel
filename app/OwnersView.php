<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnersView extends Model
{   
    protected $table = 'owner-views'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;
}
