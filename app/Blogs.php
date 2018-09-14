<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = "blogs";
    protected $primaryKey = "id";
    public $timestamps = true;

}
