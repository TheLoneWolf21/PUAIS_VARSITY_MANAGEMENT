<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use DB;
use Image;
use Session;
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
        return back()->with('insert_success','Insert Successful');
        }
    public function delete_admin_course_data()
    {
        $subject_id = Input::get('id');
        DB::table('subjects')
                ->where('subject_id',$subject_id)
                ->delete();
                return back()->with('delete_success','delete Successful');
    }
    public function update_admin_course_data()
    {
        $subject_id = Input::get('id');
        $subject_name = Input::get('subject_name');
        $subject_code = Input::get('subject_code');
        $data=array(
            'subject_name' => $subject_name,
            'subject_code' => $subject_code
        );
        DB::table('subjects')
                ->where('subject_id',$subject_id)
                ->update($data);
                return back()->with('update_success','update Successful'); 
        
    }
    public function temp_insert()
    {
        /* 
            Ei method shompurno session k define kore.Jkhane Admin new ekti session create korbe active korbe and section  select kore dibe.
        */
        /*  
                                            PROCESS 
            1. prothome admin er kach tke session input niye eita database er session table e year and month 
               column e insert korbo.ekhane month 0 = january and 1 = june session
            2. then sessions table er shb session active tab k  0 kore dibo.
            3. then j session ta active she session k 1 kore dibo.
            4. admin tke active section nite hbe.
            5. controllers table er admin er input section gulu k active kore dite hbe.
        
        */
        
/* PROCESS 1:   admin er kach tke year and month input hishebe neoa holo */
        $year = Input::get('year');
        $month = Input::get('month');
        $month = $month -1; //month er value 1 and 2 ashe tai 1 minus kore 0 and 1 kore nilam
       
/* PROCESS 2:   sessions table e admin er input insert kora holo */
       DB::table('sessions')->insert(  
        [
            'year'  => $year,
            'month' => $month,
            'active'=> 0
        ]); 
        
/* PROCESS 3:   sessions table er shb data k 0 kora holo */
        
        $data = DB::table('sessions')->pluck('session_id');
        $inactive_array = array(
            'active' => 0
        );
        foreach($data as $d)
        {
            DB::table('sessions')
                ->where('session_id',$d)
                ->update($inactive_array);
        }
        
/* PROCESS 4:   Admin er input k active kora holo by putting active=1 */
        $active_array =array(
            'active' => 1
        );
        DB::table('sessions')
            ->where('year',$year)
            ->where('month',$month)
            ->update($active_array);
        
/* PROCESS 5:   controllers table tke section teacher_id advisor_id shbai k admin er id te transfer kora.active k o 0                 korte hbe admin er id=100. 
*/    
        $controllers_data = DB::table('controllers')
                            ->pluck('controller_id');
        $update_data =array(
            'active' => 0,
            'advisor_id' => 100,
            'teacher_id' => 100
        );
        foreach($controllers_data as $cd)
        {
            DB::table('controllers')
                    ->where('controller_id','=',$cd)
                    ->update($update_data); 
        }
        
        
        
/* PROCESS 6:   selected section onyjayi advisor er id niye nite hbe.then DB te prottekta section onujayi 
                active column k 1 korte hbe and advisor_id set korte hbe.then ager page e return korbe with
                success msg.
*/   
        
        $selected_section = Input::get('section');
        
        $advisor_id=array();
        
        for($i=0; $i<sizeof($selected_section);$i++)
        {
            $advisor_id[$i] = Input::get($selected_section[$i]);
            $data_array =array(
                'active' => 1,
                'advisor_id' => $advisor_id[$i]
            );
            DB::table('controllers')
            ->where('section','=',$selected_section[$i])
            ->update($data_array);  
        }
       
            return back()->with('successfulsectioninsertion','Section added successfully');
        
        
      /*  Ei portion ta just subject add korar jonw
       
        $value_holder =0;
        
        $data = Input::get('section');
        for($i=1;$i<=6;$i++)
        {
            $subject[$i-1] = DB::table('subjects')
                        ->where('semester',$i)
                        ->pluck('subject_id');
           foreach($subject[$i-1] as $s)     
           {
               $counter = $i *5;
               for($j = $counter-5;$j<$counter;$j++)
               {
                   DB::table('controllers')->insert(
                   [
                      'section'     => $data[$j],
                      'subject_id'  => $s,
                      'active'      => 0,
                      'advisor_id'  => 100,
                      'teacher_id'  => 100
                   ]);
               }
           }
            
        } */
    }
    public function storeimage(Request $request)
    {
         if ($request->hasFile('profile_image')) {
 
        foreach($request->file('profile_image') as $file){
 
            //get filename with extension
            $filenamewithextension = $file->getClientOriginalName();
 
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
 
            //get file extension
            $extension = $file->getClientOriginalExtension();
 
            //filename to store
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
 
            Storage::put('public/profile_images/'. $filenametostore, fopen($file, 'r+'));
            Storage::put('public/profile_images/thumbnail/'. $filenametostore, fopen($file, 'r+'));
 
            //Resize image here
            $thumbnailpath = public_path('storage/profile_images/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
        }
 
        return redirect('image')->with('status', "Image uploaded successfully.");
    } 
    }
    public function imageupload()
    {
        return view('imageuploadtesting');
    }
}
