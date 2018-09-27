<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Banner;
use Intervention\Image\ImageManager;
use Image;
use Sessions;
use Auth;
use DB;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $posts = Banner::orderBy('id')->get();
        $posts = json_decode(json_encode($posts));
        return view('BackEnd.banners.view')->with(compact('posts'));
    }
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            Banner::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Blog post deleted successfully!!');
        }
    }
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new Banner;
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/banners/'.$filename;
                    Image::make($image_tmp)->save($image_path);    
                    $post -> image = $filename; 
                } 
            }       
            $post -> url = $data['url'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/banners')->with('success','Blog post successfully added');
        }
        return view('BackEnd.banners.add');
    }
    public function edit(Request $request,$id=null)
    { 
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            $filename = $data['current_image'];
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/banners/'.$filename;
                    Image::make($image_tmp)->save($image_path);        
                }
            }
            Banner::where(['id'=>$id])->update([                
            'url' => $data['link'],
            'status' => $data['status'],
            'image' => $filename
            ]);
            return redirect('/admin/banners')->with('success','Blog post successfully updated');
           
        }
        $post = Banner::where(['id'=>$id])->first();
        return view('BackEnd.banners.edit')->with(compact('post'));
       
    }

    
    public function deleteProductImage($id = null)
    {
        //Get Image name
        $productImage = Banner::where(['id'=>$id])->first();
        //Get Product Image Paths
        $image_path = 'images/backend_images/banners/';
        if(file_exists($image_path.$productImage->image))
        {
            unlink(public_path($image_path.$productImage->image));
        }
        //Delete Image from Products Table
        Banner::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('success','Product Image has been deleted successfully!!');
    }
}

