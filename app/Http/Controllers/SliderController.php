<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Slider;
use Intervention\Image\ImageManager;
use Image;
use Sessions;
use Auth;
use DB;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $posts = Slider::orderBy('id')->get();
        $posts = json_decode(json_encode($posts));
        return view('BackEnd.slider.view')->with(compact('posts'));
    }
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            Slider::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Slider deleted successfully!!');
        }
    }
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new Slider;
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/slider/'.$filename;
                    Image::make($image_tmp)->save($image_path);    
                    $post -> image = $filename; 
                } 
            }       
            $post -> title = $data['title'];
            $post -> description = $data['description'];
            $post -> text = $data['text'];
            $post -> link = $data['link'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/slider')->with('success','Slider successfully added');
        }
        return view('BackEnd.slider.add');
    }
    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/slider/'.$filename;
                    Image::make($image_tmp)->save($image_path);        
                }
                
                Slider::where(['id'=>$id])->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'text' => $data['text'],
                'link' => $data['link'],
                'status' => $data['status'],
                'image' => $filename
            ]);
            }
            return redirect('/admin/slider')->with('success','Slider successfully updated');
           
        }
        $post = Slider::where(['id'=>$id])->first();
        return view('BackEnd.slider.edit')->with(compact('post'));
    }

    
    public function deleteProductImage($id = null)
    {
        //Get Image name
        $productImage = Slider::where(['id'=>$id])->first();
        //Get Product Image Paths
        $image_path = 'images/backend_images/banners/';
        if(file_exists($image_path.$productImage->image))
        {
            unlink(public_path($image_path.$productImage->image));
        }
        //Delete Image from Products Table
        Slider::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('success','Image has been deleted successfully!!');
    }
}

