<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
class querycontroller extends Controller
{
    public function admin_sub_insert()
    {
        
        $semester = Input::get('semester');
        $subject_name = Input::get('subject_name');
        $subject_code = Input::get('subject_code');
      
            DB::table('subjects')->insert([
                'subject_name'=>$subject_name,
                'semester' => $semester,
                'subject_code' => $subject_code
            ]);
        return back();
        }
    }

