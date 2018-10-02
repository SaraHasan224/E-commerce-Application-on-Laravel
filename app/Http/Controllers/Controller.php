<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 
    // public function __construct()
    // {
    //     $getBrands = Brands::orderBy('id')->where('status','<>',0)->get();
    //     return view()->with(compact('getBrands'));
    // }

    
}
