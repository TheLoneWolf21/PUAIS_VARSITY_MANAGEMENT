<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student_controller extends Controller
{
    //
        public function subject_enrollment_data()
    {
        return view("Student.studentenrollment.stuenrollment_overview");
    }
       public function stu_pending_subject()
    {
        return view("Student.studentenrollment.stuenrollment_pending");
    }
       public function stu_approved_subject()
    {
        return view("Student.studentenrollment.stuenrollment_approved");
    }
      public function stu_declined_subject()
    {
        return view("Student.studentenrollment.stuenrollment_declined");
    }
    public function stu_semester_overview()
    {
        return view ("Student.studentresult.stu_semester_overview");
    }
    public function stu_result_view()
    {
        return view ("Student.studentresult.stu_result_view");
    }
}
