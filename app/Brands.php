<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = "brands";
    protected $primaryKey = "id";
    public $timestamps = true;
}
