<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class AdminController extends Controller
{
    public function login(Request $request)
    {
        if($request -> isMethod('post'))
        {
            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1']))
            {
                //echo "Success"; die;
            /*
            This is session authentication technique
                Session::put('adminSession',$data['email']);
            */
                return redirect('/admin/dashboard');
            }
            else
            {
                $error = "Invalid Username/Password";
                return redirect('/admin')->with('error',$error);
            }
        }
        return view('Backend.login.admin_login');
    }

    public function dashboard()
    {
        $title = 'Dashboard';
        $error = 'Unauthorized Access is not alowed. Log in first';
        
        /*
            This is session authentication technique
        if(Session::has('adminSession'))
        {
            return view('Backend.login.dashboard');
        }
        else
        {
            return redirect('/admin')->with('error',$error); 
        }
        */
        /*  This is middleware user authentication technique

        */
        return view('Backend.login.dashboard');
    }

    public function logout()
    {
       session::flush();
       $success = "Successfully logged out";
       return redirect('/admin')->with('success',$success); 
    }
}
