<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Newsletter;
use Intervention\Image\ImageManager;
use Image;
use Sessions;
use Auth;
use DB;

class NewsletterSignUpController extends Controller
{
    public function index(Request $request)
    {
        $posts = Newsletter::orderBy('id')->get();
        return view('BackEnd.newsletter.view')->with(compact('posts'));
    }
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            Newsletter::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Newsletter deleted successfully!!');
        }
    }
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new Newsletter;     
            $post -> title = $data['title'];
            $post -> description = $data['description'];
            $post -> text = $data['text'];
            $post -> link = $data['link'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/newsletter')->with('success','Newsletter successfully added');
        }
        return view('BackEnd.slider.add');
    }
    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            Newsletter::where(['id'=>$id])->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'text' => $data['text'],
            'link' => $data['link'],
            'status' => $data['status'],
            'image' => $filename
            ]);
            return redirect('/admin/newsletter')->with('success','Newsletter successfully updated');
           
        }
        $post = Newsletter::where(['id'=>$id])->first();
        return view('BackEnd.newsletter.edit')->with(compact('post'));
    }

}
