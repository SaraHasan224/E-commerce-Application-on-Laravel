<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Videos;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $posts = Videos::orderBy('id')->get();
        return view('BackEnd.videos.view')->with(compact('posts'));
    }
    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            Videos::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Video deleted successfully!!');
        }
    }
    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new Videos;     
            $post -> title = $data['title'];
            $post -> description = $data['description'];
            $post -> link = $data['link'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/video')->with('success','Video successfully added');
        }
        return view('BackEnd.videos.add');
    }
    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            Videos::where(['id'=>$id])->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'link' => $data['link'],
            'status' => $data['status'],
            ]);
            return redirect('/admin/video')->with('success','Video successfully updated');
           
        }
        $post = Videos::where(['id'=>$id])->first();
        return view('BackEnd.videos.edit')->with(compact('post'));
    }
}
