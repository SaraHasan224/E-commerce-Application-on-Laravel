<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Support;
use App\ReachUsAt;
class SupportController extends Controller
{  
    public function index(Request $request)
    {
        $data = Support::orderBy('id')->get();
        $location = ReachUsAt::orderBy('id')->get();
        return view('BackEnd.contact.view')->with(compact('data','location'));
    }

    public function support(Request $request)
    {
        $location = ReachUsAt::orderBy('id')->get();
        return view('BackEnd.contact.reach.view')->with(compact('location'));
    }

    public function delete(Request $request,$id=null)
    {
        if(!empty($id))
        {
            ReachUsAt::where(['id'=>$id])->delete();
            return redirect()->back()->with('error','Your location is deleted successfully!!');
        }
    }

    public function add(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->all();
            $post = new ReachUsAt;     
            $post -> location = $data['location'];
            $post -> email = $data['email'];
            $post -> contactNumber = $data['number'];
            $post->remember_token = str_random(50);
            $post->save();         
            return redirect('/admin/reach-us-at')->with('success','Your location is successfully added');
        }
        return view('BackEnd.contact.reach.add');
    }

    public function edit(Request $request,$id=null)
    {
        if($request -> isMethod('post'))
        {
            $data = $request -> all();
            ReachUsAt::where(['id'=>$id])->update([
            'location' => $data['location'],
            'email' => $data['email'],
            'contactNumber' => $data['number'],
            'status' => $data['status'],
            ]);
            return redirect('/admin/reach-us-at')->with('success','Your location is successfully updated');
           
        }
        $post = ReachUsAt::where(['id'=>$id])->first();
        return view('BackEnd.contact.reach.edit')->with(compact('post'));
    }
}
