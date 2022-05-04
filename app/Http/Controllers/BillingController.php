<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\Billing;

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
        $price = $request->price;


        $updateDetails =  array(
           'tutor' => $tutor,
           'title' => $title,
           'price' => $price,
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
    public function add_tutors(){
        return view('billing.add-tutor');
    }

    public function course($id){
        $Tutor = Tutor::all();
        $Courses = Course::find($id);
        return view('billing.course', compact('Courses','Tutor'));
    }

    public function tutors(){
        $Tutors = Tutor::all();
        return view('billing.tutors', compact('Tutors'));
    }

    public function tutor($id){
        $Tutor = Tutor::find($id);
        return view('billing.tutor', compact('Tutor'));
    }



    public function add_course_post(Request $request){
        $title = $request->title;
        $tutor = $request->tutor;

        $Course = new Course;
        $Course->title = $request->title;
        $Course->tutor = $request->tutor;
        $Course->price = $request->price;

        $Course->save();
        return Redirect::back();
    }

    public function add_tutor_post(Request $request){
        $title = $request->name;
        $Tutor = new Tutor;
        $Tutor->name = $request->name;
        $Tutor->email = $request->email;
        $Tutor->mobile = $request->mobile;
        $Tutor->address = $request->address;
        $Tutor->gender = $request->gender;
        $Tutor->save();
        return Redirect::back();
    }


    public function course_delete($id){
        DB::table('courses')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function tutor_delete($id){
        DB::table('tutors')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function save_tutor_post(Request $request ,$id){
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $mobile = $request->mobile;
        $gender = $request->gender;

        $updateDetails =  array(
           'name' => $name,
           'email' => $email,
           'address' => $address,
           'mobile' => $mobile,
           'gender' => $gender,
        );

        DB::table('tutors')->where('id',$id)->update($updateDetails);
        return Redirect::back();
   }

   public function create_bill(){
    return view('billing.create-bill');
   }

   public function my_payments(){
        $Billings = DB::table('billings')->get();
        return view('billing.payments',compact('Billings'));
   }

   public function editable_invoice(){
    // DB::table('billings')->get();
    return view('billing.editable-invoice');
}

public function create_bill_post(Request $request){
    $user = $request->user;
    $price = $request->price;
    $qty = $request->qty;
    $tax = $request->tax;
    $description = $request->description;
    $note = $request->note;
    $title = $request->title;
    $total = $qty*$price;
    $rate = 1;

    $Billing = new Billing;
    $Billing->student = $user;
    $Billing->note = $note;
    $Billing->tax = $tax;
    $Billing->qty = $qty;
    $Billing->price = $price;
    
    
    $Billing->description = $description;
    $Billing->title = $title;
    $Billing->total = $total;
    $Billing->save();

}


public function getInfo($id)
{
  $fill = DB::table('courses')->where('id', $id)->pluck('price');

  return Response::json(['success'=>true, 'info'=>$fill]);
}


}
