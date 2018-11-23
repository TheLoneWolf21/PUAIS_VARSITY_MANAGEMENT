<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacher_controller extends Controller
{
    public function student_view()
    {
        return view('Teacher.teacherstudent.teacher_student_overallview');
    }
     public function pending_request()
    {
        return view('Teacher.teacherpending.teacher_advisor_pending');
    }
}
