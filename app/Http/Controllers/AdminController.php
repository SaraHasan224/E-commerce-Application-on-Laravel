<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use DB;
class AdminController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post'))
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

    public function settings()
    {
       return view('Backend.settings.settings'); 
    }

    public function checkCredentials(Request $request)
    {
        $data = $request->all();

            if(Auth::attempt(['password'=>$data['current_pwd']]) && $data['new_pwd'] == $data['confirm_pwd'])
            {
                if($data['new_pwd'] == '')
            //This is session authentication technique
                {
                    $error = "Please enter password first";
                    return redirect('/admin/settings')->with('error',$error);
                }
                else
                {
                    $password = Hash::make($data['new_pwd']);

                    User::where(['email'=>Auth::user()->email])->update(['password'=>$password]);
                    return redirect('admin/settings')->with('success','Password Updated succcessfully');
                    
                    
                }
            }
            else if (!($data['new_pwd'] == $data['confirm_pwd']))
            {
                $error = "Password mismatch";
                return redirect('/admin/settings')->with('error',$error);
            }
            else
            {
                $error = "You have typed incorrect password";
                return redirect('/admin/settings')->with('error',$error);
            }
    }
   
    public function logout()
    {
       session::flush();
       $success = "Successfully logged out";
       return redirect('/admin')->with('success',$success); 
    }
    
}
