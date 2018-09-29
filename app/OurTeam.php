<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{    
    protected $table = 'our-team'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;
}
