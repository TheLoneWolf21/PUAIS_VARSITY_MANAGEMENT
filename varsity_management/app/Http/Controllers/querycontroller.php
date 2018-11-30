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
        $year = Input::get('year');
        $month = Input::get('month');
        $month = $month -1;
        
    /* prothome data insert korbo then shb data k inactive korbo.Then desired session k active korbo */
        //Insert korlam
       DB::table('sessions')->insert(  
        [
            'year'  => $year,
            'month' => $month,
            'active'=> 0
        ]); 
        
        //shbai k inactive korbo
        
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
        
        //desired session active korbo
        $active_array =array(
            'active' => 1
        );
        DB::table('sessions')
            ->where('year',$year)
            ->where('month',$month)
            ->update($active_array);
        
      /*  
       
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
