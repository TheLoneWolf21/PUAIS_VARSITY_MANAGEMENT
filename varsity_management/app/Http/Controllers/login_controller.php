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
    // Admin Student View Control
    public function adminstuview()
    {
        return view('Admin.Adminstudent.adminstu_all');
    }
        public function adminstu_retake()
    {
        return view('Admin.Adminstudent.adminstu_retake');
    }
        public function adminstu_recourse()
    {
        return view('Admin.Adminstudent.adminstu_recourse');
    }
        public function adminstu_regular()
    {
        return view('Admin.Adminstudent.adminstu_regular');
    }
    //Admin Student View Control End
    
    public function admincourseview()
    {
        return view('Admin.AdminCourse');
    }
    
    //Admin Teahcer view 
    public function adminteacherview()
    {
        return view('Admin.adminteacher.adminteacher_all');
    }
        public function adminteacher_dean()
    {
        return view('Admin.adminteacher.adminteacher_dean');
    }
        public function adminteacher_professors()
    {
        return view('Admin.adminteacher.adminteacher_professors');
    }
        public function adminteacher_lecturers()
    {
        return view('Admin.adminteacher.adminteacher_lecturers');
    }
    //Admin Teahcer view end
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
    
    //Admin Section
    public function adminsectionview()
    {
        return view('Admin.adminsection.adminsection_overview');
    }
    public function adminsection_edit()
    {
        return view('Admin.adminsection.adminsection_edit');
    }
    public function adminsection_advisor()
    {
        return view('Admin.adminsection.adminsection_advisor');
    }
    //Admin Section End
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
