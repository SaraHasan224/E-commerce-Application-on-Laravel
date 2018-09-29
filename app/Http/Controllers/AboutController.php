<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\About;
use App\OurTeam;
use Intervention\Image\ImageManager;
use Image;
use Sessions;
use Auth;
use DB;

class AboutController extends Controller
{    
    //View
    public function index(Request $request)
    {
        $data  = About::orderBy('id')->get();
        $posts = OurTeam::orderBy('id')->get();
        $posts = json_decode(json_encode($posts));
        $data  = json_decode(json_encode($data));
        return view('BackEnd.about.view')->with(compact('data','posts'));
    }

    //Delete About Page detail 
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            About::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','About page data deleted successfully!!');
        }
    }
    //Delete Team
    public function deleteteam(Request $request,$id=null)
    {
        if(!empty($id))
        {
            OurTeam::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Our team member deleted successfully!!');
        }
    }

    //Add About Page detail
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new About;
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/about/'.$filename;
                    Image::make($image_tmp)->save($image_path);    
                    $post -> cover_image = $filename; 
                } 
            }       
            $post -> heading = $data['heading'];
            $post -> description1 = $data['description1'];
            $post -> description2 = $data['description2'];
            $post -> emphasized_text = $data['emphasized_text'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/about')->with('success','Customer saying successfully added');
        }
        return view('BackEnd.about.add');
    }
    
    //Add Our team
    public function addteam(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new OurTeam;
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/our-team/'.$filename;
                    Image::make($image_tmp)->save($image_path);    
                    $post -> image = $filename; 
                } 
            }       
            $post -> name = $data['name'];
            $post -> position = $data['position'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/about')->with('success','Customer saying successfully added');
        }
        return view('BackEnd.about.our-team');
    }

    //Edit About Page detail
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
                    $image_path = 'images/backend_images/about/'.$filename;
                    Image::make($image_tmp)->save($image_path);        
                }   
            }
            
                About::where(['id'=>$id])->update([
                    'heading' => $data['heading'],
                    'description1' => $data['description1'],
                    'description2' => $data['description2'],
                    'emphasized_text' => $data['emphasized_text'],
                    'status' => $data['status'],
                    'cover_image' => $filename
                    ]);
            return redirect('/admin/about')->with('success','IndexPageData successfully updated');
        }
        $views = About::where(['id'=>$id])->first();
        return view('BackEnd.about.edit')->with(compact('views'));
    }

    //Edit Our team
    public function editteam(Request $request,$id=null)
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
                    $image_path = 'images/backend_images/our-team/'.$filename;
                    Image::make($image_tmp)->save($image_path);        
                }   
            }
            
            OurTeam::where(['id'=>$id])->update([
                'name' => $data['name'],
                'position' => $data['position'],
                'status' => $data['status'],
                'image' => $filename
                ]);
            return redirect('/admin/about')->with('success','Customer saying successfully updated');
        }
        $views = OurTeam::where(['id'=>$id])->first();
        return view('BackEnd.about.edit')->with(compact('views'));
    }

    //Delete Images from About Page detail
    public function deleteAbouttImage($id = null)
    {
        //Get Image name
        $productImage = About::where(['id'=>$id])->first();
        //Get Product Image Paths
        $image_path = 'images/backend_images/about/';
        if(file_exists($image_path.$productImage->cover_image))
        {
            unlink(public_path($image_path.$productImage->cover_image));
        }
        //Delete Image from Products Table
        About::where(['id'=>$id])->update(['cover_image'=>'']);
        return redirect()->back()->with('success','Image has been deleted successfully!!');
    }

    //Delete Images from Our team
    public function deleteTeamImage($id = null)
    {
        //Get Image name
        $productImage = OurTeam::where(['id'=>$id])->first();
        //Get Product Image Paths
        $image_path = 'images/backend_images/our-team/';
        if(file_exists($image_path.$productImage->image))
        {
            unlink(public_path($image_path.$productImage->image));
        }
        //Delete Image from Products Table
        OurTeam::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('success','Image has been deleted successfully!!');
    }
}
