<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

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
        $semester_title = Input::get('semester');
        $section= DB::table('subjects')->distinct()->pluck('semester');
        $data=DB::table('subjects')
                        ->where('semester',Input::get('semester'))
                        ->pluck('subject_name');
  
        return view('Admin.admincourse.admincourse_all')->with('data',$data)->with('section',$section)->with('semester_title',$semester_title);
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
    //Admin Result
    public function adminresultview()
    {
        return view('Admin.adminresult.adminresult_all');
    }
    //Admin Result End
    //Admin session
       public function adminsessionview()
    {
        return view('Admin.adminsession.adminsession_overview');
    }
           public function adminsession_edit()
    {
        return view('Admin.adminsession.adminsession_edit');
    }
    //ADmin session end
    
    //Admin Library
    public function adminlibraryview()
    {
        return view('Admin.adminlibrary.adminlibrary_books');
    }
        public function adminlibrary_add_book()
    {
        return view('Admin.adminlibrary.adminlibrary_add_book');
    }
    //ADmin Library end
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
