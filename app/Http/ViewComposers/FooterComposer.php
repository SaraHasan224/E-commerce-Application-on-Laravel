<?php

namespace App\Http\ViewComposers;

use App\Footer;
use App\SocialMediaAccounts;
use App\PhotoStream;
use App\ReachUsAt;
use App\Blogs;
use Illuminate\Contracts\View\View;
use Sessions;

class FooterComposer
{
    public function compose(View $view)
    {        
        $getFooterLink = Footer::orderBy('id')->where('status','<>',0)->get();
        $getMedia = SocialMediaAccounts::orderBy('id')->where('status','<>',0)->get();
        $getPhotoStream = PhotoStream::orderBy('id')->where('status','<>',0)->get();
        $getBlogs = Blogs::orderBy('created_at')->where('status','<>',0)->take(2)->get();
        $getLocation = ReachUsAt::orderBy('id')->where('status','<>',0)->get();

        $view->with(['getBlogs'=>$getBlogs,'getFooterLink'=>$getFooterLink,'getMedia'=>$getMedia,'getPhotoStream'=>$getPhotoStream,'getLocation'=>$getLocation]);
    }
}