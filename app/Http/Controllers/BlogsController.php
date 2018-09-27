<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Blogs;
use Intervention\Image\ImageManager;
use Image;
use Sessions;
use Auth;
use DB;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Blogs::orderBy('id')->get();
        $posts = json_decode(json_encode($posts));
        return view('BackEnd.blogs.blogs')->with(compact('posts'));
    }
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            Blogs::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Blog post deleted successfully!!');
        }
    }
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new Blogs;
            $post -> title = $data['title'];
            $post -> author = $data['author'];
            $post -> description = $data['description'];
            $post -> url = $data['url'];
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/blogs/'.$filename;
                    Image::make($image_tmp)->save($image_path);      
                } 
                $post->image = $filename;
            }
            $post -> image = $filename;           
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/blogs')->with('success','Blog post successfully added');
        }
        return view('BackEnd.blogs.add');
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
                    $image_path = 'images/backend_images/blogs/'.$filename;
                    Image::make($image_tmp)->save($image_path);        
                }
                
            Blogs::where(['id'=>$id])->update([
                'title' => $data['title'],
                'author' => $data['author'],
                'description' => $data['description'],
                'url' => $data['url'],
                'status' => $data['status'],
                'image' => $filename
            ]);
            }
            return redirect('/admin/blogs')->with('success','Blog post successfully updated');
           
        }
        $post = Blogs::where(['id'=>$id])->first();
        return view('BackEnd.blogs.edit')->with(compact('post'));
    }

    
    public function deleteProductImage($id = null)
    {
        //Get Image name
        $productImage = Blogs::where(['id'=>$id])->first();
        //Get Product Image Paths
        $image_path = 'images/backend_images/blogs/';
        if(file_exists($image_path.$productImage->image))
        {
            unlink(public_path($image_path.$productImage->image));
        }
        //Delete Image from Products Table
        Blogs::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('success','Product Image has been deleted successfully!!');
    }
}
