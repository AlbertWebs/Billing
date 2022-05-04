<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Tutor;
use DB;
use Redirect;

class BillingController extends Controller
{
    public function index(){
         return view('billing.index');
    }

    public function students(){
        $Student = Student::all();
        return view('billing.students', compact('Student'));
    }

    public function enroll(){
       return view('billing.enrol');
    }

    public function enroll_student(Request $request){

         $name = $request->SName;
         $email = $request->SEmail;
         $mobile = $request->SMobile;
         $gender = $request->gender;
         $address = $request->SAddress;
         $extra = $request->extra;
         $course = $request->course;
         $shift = $request->shift;

         $Student = new Student;
         $Student->name = $name;
         $Student->email = $email;
         $Student->mobile = $mobile;
         $Student->address = $address;
         $Student->gender = $gender;
         $Student->course = $course;
         $Student->shift = $shift;
         $Student->extra = $extra;
         $Student->save();


    }

    public function student($id){
       $Student = Student::find($id);
       return view('billing.save-student', compact('Student'));
    }

    public function save_images($id){
        $Student = Student::find($id);
        return view('billing.save-student-image', compact('Student'));
    }

    public function save_image(Request $request, $id){
        $path = 'uploads/avatars';
        if(isset($request->avatar)){
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $avatar = $filename;
        }else{
            $avatar = "avatar.png";
        }

        $UpdateDetails = array(
            'avatar' => $avatar
        );
        DB::table('students')->where('id',$id)->update($updateDetails);
        return Redirect::back();
    }

    public function save_student(Request $request ,$id){

         $name = $request->SName;
         $email = $request->SEmail;
         $mobile = $request->SMobile;
         $gender = $request->gender;
         $address = $request->SAddress;
         $extra = $request->extra;
         $course = $request->course;
         $shift = $request->shift;

         $updateDetails =  array(
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'gender' => $gender,
            'address' => $address,
            'extra' => $extra,
            'course' => $course,
            'shift' => $shift
         );

         DB::table('students')->where('id',$id)->update($updateDetails);
         return Redirect::back();
    }


    public function save_course_post(Request $request ,$id){

        $title = $request->title;
        $tutor = $request->tutor;


        $updateDetails =  array(
           'tutor' => $tutor,
           'title' => $title,
        );

        DB::table('courses')->where('id',$id)->update($updateDetails);
        return Redirect::back();
   }

    public function courses(){
        $Courses = Course::all();
        return view('billing.courses', compact('Courses'));
    }

    public function add_course(){
        $Tutor = Tutor::all();
        return view('billing.add-course', compact('Tutor'));
    }

    public function course($id){
        $Tutor = Tutor::all();
        $Courses = Course::find($id);
        return view('billing.course', compact('Courses','Tutor'));
    }

    public function tutors(){
        $Tutor = Tutor::all();
        return view('billing.tutors', compact('Tutor'));
    }

    public function tutor($id){
        $Tutor = Tutor::find($id);
        return view('billing.tutors', compact('Tutor'));
    }


    public function add_course_post(Request $request){
        $title = $request->title;
        $tutor = $request->tutor;

        $Course = new Course;
        $Course->title = $request->title;
        $Course->tutor = $request->tutor;
        $Course->save();
        return Redirect::back();
    }

    public function course_delete($id){
        DB::table('courses')->where('id',$id)->delete();
        return Redirect::back();
    }

}
