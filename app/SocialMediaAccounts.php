<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMediaAccounts extends Model
{
    protected $table = 'social_media_accounts'; 
    protected $primaryKey = 'id'; 
    public $timestamps = true;
}
