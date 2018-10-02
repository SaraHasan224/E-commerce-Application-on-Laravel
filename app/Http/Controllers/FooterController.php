<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Footer;
use App\SocialMediaAccounts;
use App\PhotoStream;
use Intervention\Image\ImageManager;
use Image;
use Sessions;
use Auth;
use DB;
class FooterController extends Controller
{  
    public function index(Request $request)
    {
        $getPageLinks = Footer::orderBy('id')->get();
        $getAccounts = SocialMediaAccounts::orderBy('id')->get();
        $getPhotoStream = PhotoStream::orderBy('id')->get();
        return view('BackEnd.footer.view')->with(compact('getPageLinks','getAccounts','getPhotoStream'));
    }
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            Footer::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Footer Link deleted successfully!!');
        }
    }
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new Footer;     
            $post -> page_title = $data['name'];
            $post -> url = $data['link'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/footer')->with('success','Footer successfully added');
        }
        return view('BackEnd.footer.links.add');
    }
    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            Footer::where(['id'=>$id])->update([
            'page_title' => $data['title'],
            'url' => $data['url'],
            'status' => $data['status'],
            ]);
            return redirect('/admin/footer')->with('success','Footer links successfully updated');
           
        }
        $getLinks = Footer::where(['id'=>$id])->first();
        return view('BackEnd.footer.edit')->with(compact('getLinks'));
    }
    //Social Media
    public function deletemedia(Request $request,$id=null)
    {
        if(!empty($id))
        {
            SocialMediaAccounts::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Social Media Account Credentials deleted successfully!!');
        }
    }
    public function addmedia(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new SocialMediaAccounts;     
            $post -> name = $data['name'];
            $post -> icon = $data['icon'];
            $post -> link = $data['link'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/footer')->with('success','Social Media account successfully added to website');
        }
        return view('BackEnd.footer.media.add');
    }
    public function editmedia(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            SocialMediaAccounts::where(['id'=>$id])->update([
            'name' => $data['name'],
            'icon' => $data['icon'],
            'link' => $data['link'],
            'status' => $data['status'],
            ]);
            return redirect('/admin/footer')->with('success','Social Media account successfully updated');
           
        }
        $getMedia = SocialMediaAccounts::where(['id'=>$id])->first();
        return view('BackEnd.footer.edit')->with(compact('getMedia'));
    }
    //Photostream
    public function deletephotostream(Request $request,$id=null)
    {
        if(!empty($id))
        {
            PhotoStream::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Photo Stream deleted successfully!!');
        }
    }
    public function addphotostream(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new PhotoStream;
            if($request->hasFile('image'))
            {
                $image_tmp = Input::file('image');
                if($image_tmp->isValid())
                {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).".".$extension;
                    $image_path = 'images/backend_images/footer/'.$filename;
                    Image::make($image_tmp)->save($image_path);    
                    $post -> image = $filename; 
                } 
            }       
            $post -> link_to = $data['url'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/footer')->with('success','Photo Stream successfully added');
        }
        return view('BackEnd.footer.photostream.add');
    }
    public function editphotostream(Request $request,$id=null)
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
                    $image_path = 'images/backend_images/footer/'.$filename;
                    Image::make($image_tmp)->save($image_path);        
                }
            }
            PhotoStream::where(['id'=>$id])->update([                
            'link_to' => $data['link'],
            'status' => $data['status'],
            'image' => $filename
            ]);
            return redirect('/admin/footer')->with('success','Photo Stream successfully updated');
           
        }
        $getPhotoStream = PhotoStream::where(['id'=>$id])->first();
        return view('BackEnd.footer.edit')->with(compact('getPhotoStream'));
       
    }
    
    public function deletephotostreamImages($id = null)
    {
        //Get Image name
        $productImage = PhotoStream::where(['id'=>$id])->first();
        //Get Product Image Paths
        $image_path = 'images/backend_images/footer/';
        if(file_exists($image_path.$productImage->image))
        {
            unlink(public_path($image_path.$productImage->image));
        }
        //Delete Image from Products Table
        PhotoStream::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('success','Photo Stream image has been deleted successfully!!');
    }
}