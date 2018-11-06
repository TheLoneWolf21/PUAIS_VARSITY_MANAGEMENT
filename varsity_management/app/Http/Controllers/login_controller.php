<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    //
    
    public function loginview()
    {
        return view('login');
    }
    public function adminview()
    {
        return view('Admin.AdminDash');
    }
    public function adminstuview()
    {
        return view('Admin.AdminStudent');
    }
    public function admincourseview()
    {
        return view('Admin.AdminCourse');
    }
    public function adminteacherview()
    {
        return view('Admin.AdminTeacher');
    }
    public function adminroutineview()
    {
        return view('Admin.AdminRoutine');
    }
    public function adminresultview()
    {
        return view('Admin.AdminResult');
    }
    public function adminlibraryview()
    {
        return view('Admin.AdminLibrary');
    }
    public function adminsectionview()
    {
        return view('Admin.AdminSection');
    }
    public function adminmailview()
    {
        return view('Admin.AdminMail');
    }
    public function adminnoticeview()
    {
        return view('Admin.AdminNotice');
    }
    public function adminsettingview()
    {
        return view('Admin.AdminSetting');
    }
}

