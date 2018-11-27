<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class usercontroller extends Controller
{
    // Database tke user er name and paassword check korte hbe and session e put korte hbe
    
    public function get_user()
    {
        $user_role_admin=0;
        $user_role_teacher=0;
        $user_role_advisor=0;
        $user_role_student=0;
        $user_name = Input::get('Username');
        $password = Input::get('Password');
        $user = DB::table('users')
            ->where('user_id',$user_name)
            ->where('password',$password)
            ->get();
        
        if(count($user) == 1)
        {
           // Session::put('user_name',$user_name);
           // Session::put('password',$password);
            foreach($user as $role)
            {
                if($role->active == 1 && $role->disabled == 0)
                {
                    Session::put('user_name',$user_name);
                    Session::put('password',$password);
                    
                    
                if($role->admin == 1)
                {
                    $user_role_admin = 1;
                    Session::put('admin',$user_role_admin);
                }
                if($role->teacher == 1)
                {
                    $user_role_teacher =1;
                    Session::put('teacher',$user_role_teacher);
                }
                if($role->advisor == 1)
                {
                    $user_role_advisor =1;
                    Session::put('advisor',$user_role_advisor);
                }
                if($role->student == 1)
                {
                    $user_role_student =1;
                    Session::put('student',$user_role_student);
                }
                }
                else
                    return "Sorry, this user is blocked";
            }
            
            return redirect('/dash');
        }
        else 
        {
            return redirect('/login');
    }
    }
    public function logout()
    {
        Session::flush();
        return view('login');
    }
}
