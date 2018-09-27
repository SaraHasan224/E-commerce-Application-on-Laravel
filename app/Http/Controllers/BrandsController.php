<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Brands;
use Intervention\Image\ImageManager;
use Image;
use Sessions;
use Auth;
use DB;
class BrandsController extends Controller
{
    
    public function index(Request $request)
    {
        $brands = Brands::orderBy('id')->get();
        $brands = json_decode(json_encode($brands));
        return view('BackEnd.brands.view')->with(compact('brands'));
    }
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            Brands::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Blog post deleted successfully!!');
        }
    }
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/brands/'.$filename;
                    Image::make($image_tmp)->save($image_path);      
                } 
            } 
            $brands = new Brands;
            $brands -> name = $data['name'];
            $brands -> description = $data['description'];
            $brands -> url = $data['url'];        
            $brands -> image = $filename;
            $brands -> remember_token = str_random(50);
            $brands->save();         
            return redirect('/admin/brands')->with('success','Blog post successfully added');
        }
        return view('BackEnd.brands.add');
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
                    $image_path = 'images/backend_images/brands/'.$filename;
                    Image::make($image_tmp)->save($image_path);        
                }
                
            Brands::where(['id'=>$id])->update([
                'name' => $data['name'],
                'description' => $data['description'],
                'url' => $data['url'],
                'status' => $data['status'],
                'image' => $filename
            ]);
            }
            return redirect('/admin/brands')->with('success','Blog brands successfully updated');
           
        }
        $post = Brands::where(['id'=>$id])->first();
        return view('BackEnd.brands.edit')->with(compact('post'));
    }

    
    public function deleteProductImage($id = null)
    {
        //Get Image name
        $productImage = Brands::where(['id'=>$id])->first();
        //Get Product Image Paths
        $image_path = 'images/backend_images/brands/';
        if(file_exists($image_path.$productImage->image))
        {
            unlink(public_path($image_path.$productImage->image));
        }
        //Delete Image from Products Table
        Brands::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('success','Product Image has been deleted successfully!!');
    }
}
