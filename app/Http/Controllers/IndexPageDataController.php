<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\IndexPageData;
use App\OwnersView;
use Intervention\Image\ImageManager;
use Image;
use Sessions;
use Auth;
use DB;

class IndexPageDataController extends Controller
{ 
    //View
    public function index(Request $request)
    {
        $data = IndexPageData::orderBy('id')->get();
        $posts = OwnersView::orderBy('id')->get();
        $posts = json_decode(json_encode($posts));
        $data = json_decode(json_encode($data));
        return view('BackEnd.index.view')->with(compact('data','posts'));
    }

    //Delete
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            IndexPageData::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Index Page Data deleted successfully!!');
        }
    }
    public function deleteview(Request $request,$id=null)
    {
        if(!empty($id))
        {
            OwnersView::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Customer Saying deleted successfully!!');
        }
    }

    //Add
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new IndexPageData;      
            $post -> heading = $data['heading'];
            $post -> text = $data['text'];
            $post -> icon = $data['icon'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/index')->with('success','Index Page Content successfully added');
        }
        return view('BackEnd.index.add');
    }
    public function addview(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new OwnersView;
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/index/views/'.$filename;
                    Image::make($image_tmp)->save($image_path);    
                    $post -> image = $filename; 
                } 
            }       
            $post -> name = $data['name'];
            $post -> position = $data['position'];
            $post -> view = $data['views'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/index')->with('success','Customer saying successfully added');
        }
    }

    //Edit
    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            IndexPageData::where(['id'=>$id])->update([
                'heading' => $data['heading'],
                'text' => $data['text'],
                'status' => $data['status'],
                'icon' => $data['icon']
                ]);
            return redirect('/admin/index')->with('success','IndexPageData successfully updated');
        }
        $post = IndexPageData::where(['id'=>$id])->first();
        return view('BackEnd.index.edit')->with(compact('post'));
    }

    public function editview(Request $request,$id=null)
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
                    $image_path = 'images/backend_images/index/views/'.$filename;
                    Image::make($image_tmp)->save($image_path);        
                }   
            }
            
            OwnersView::where(['id'=>$id])->update([
                'name' => $data['name'],
                'position' => $data['position'],
                'view' => $data['views'],
                'status' => $data['status'],
                'image' => $filename
                ]);
            return redirect('/admin/index')->with('success','Customer saying successfully updated');
        }
        $views = OwnersView::where(['id'=>$id])->first();
        return view('BackEnd.index.edit')->with(compact('views'));
    }

    //Delete Images
    public function deleteViewImage($id = null)
    {
        //Get Image name
        $productImage = OwnersView::where(['id'=>$id])->first();
        //Get Product Image Paths
        $image_path = 'images/backend_images/index/views/';
        if(file_exists($image_path.$productImage->image))
        {
            unlink(public_path($image_path.$productImage->image));
        }
        //Delete Image from Products Table
        OwnersView::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('success','Image has been deleted successfully!!');
    }
}
