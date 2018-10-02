<?php

namespace App\Http\ViewComposers;

use App\Footer;
use App\SocialMediaAccounts;
use App\PhotoStream;
use App\ReachUsAt;
use App\Blogs;
use Illuminate\Contracts\View\View;
use Sessions;

class BrandsAreaComposer
{
    public function compose(View $view)
    {        
       
        $getLocation = ReachUsAt::orderBy('id')->where('status','<>',0)->get();

        $view->with(['getBlogs'=>$getBlogs]);
    }
}