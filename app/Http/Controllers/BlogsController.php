<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $post = Blogs::get();
        $post = json_decode(json_encode($post));
        return view('BackEnd.blogs.blogs')->with(compact('post'));
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
            $post -> description = $data['description'];
            $post -> url = $data['url'];
            $post -> image = $data['file'];
            $post -> remember_token = str_random(50);
            $post -> save();
            return redirect('/admin/blogs')->with('success','Blog post successfully added');
        }
        return view('BackEnd.blogs.add');
    }
    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            Blogs::where(['id'=>$id])->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'url' => $data['url'],
                'status' => $data['status'],
            ]);
            return redirect('/admin/blogs')->with('success','Blog post successfully updated');
        }
        $post = Blogs::where(['id'=>$id])->first();
        return view('BackEnd.blogs.edit')->with(compact('post'));
    }

}
