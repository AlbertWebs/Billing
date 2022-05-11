<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\Billing;
use App\Models\Setting;
use Session;
use PDF;

use DB;
use Redirect;

class BillingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

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

         $Student = new Student;
         $Student->name = $name;
         $Student->email = $email;
         $Student->mobile = $mobile;
         $Student->gender = $gender;

         $User = Student::where('email',$email)->get();
         if($Student->save()){
            Session::put('user', $email);
         }
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
            'status' => $request->status
         );

         DB::table('students')->where('id',$id)->update($updateDetails);
         return Redirect::back();
    }


    public function save_course_post(Request $request ,$id){

        $title = $request->title;
        $tutor = $request->tutor;
        $price = $request->price;


        $updateDetails =  array(
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

        $Course = new Course;
        $Course->title = $request->title;
        // $Course->tutor = $request->tutor;
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

   public function create_bill_fetch($email){
    return view('billing.create-bill', compact('email'));
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
    $amount = $request->amount;
    $description = $request->description;
    $note = $request->note;
    $title = $request->title;
    $course_id = $request->course;
    $reference = $request->reference;

    $Course = Course::find($course_id);
    $Course_price = $Course->price;
    $Amount_paid = $amount;
    if($Amount_paid == $Course_price){
       $Balance = 0;
       $paid = "Paid";
    }else{
        $Balance = $Course_price-$Amount_paid;
        $paid = "Partially Paid";
    }
    $Billing = new Billing;
    $Billing->student = $user;
    $Billing->note = $note;
    $Billing->reference = $reference;
    $Billing->balance = $Balance;
    $Billing->course_id = $course_id;
    $Billing->amount = $amount;
    $Billing->description = $description;
    $Billing->title = $title;
    $Billing->paid = $paid;



    if($Billing->save()){
        //Get Latest
        $Billing = DB::table('billings')->orderBy('created_at', 'desc')->first();
        foreach($Billing as $bill){
            Session::put('billing', $Billing->id);
        }

    }
}

public function getInfo($id)
{
  $fill = DB::table('courses')->where('id', $id)->pluck('price');

  return Response::json(['success'=>true, 'info'=>$fill]);
}

public function createPDF() {
    $Billing = Billing::all();
    $pdf = PDF::loadView('myPDF', compact('Billing'));
    return $pdf->stream('invoice.pdf');
}

public function download($id) {
    $Billing = Billing::find($id);

    return view('billing.download', compact('Billing'));

}
public function edit_bill($id) {
    $Billing = Billing::find($id);
    return view('billing.edit_bill', compact('Billing'));

}

public function reports() {
    // $Billing = Billing::find($id);
    return view('billing.reports');

}


public function checkEmail(Request $request){
    $email = $request->input('email');
    $isExists = Student::where('email',$email)->first();
    if($isExists){
        return response()->json(array("exists" => true));
    }else{
        return response()->json(array("exists" => false));
    }
}

public function destroy(){
    Session::forget('billing');
    Session::forget('user');
    return Redirect::back();
}

public function system_settings() {
    $Settings = Setting::all();
    return view('billing.system-settings', compact('Settings'));
}

public function save_settings(Request $request){

    $path = 'uploads/logo';
    if(isset($request->logo)){
        $file = $request->file('logo');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $avatarlogo = $filename;
    }else{
        $avatarlogo = $request->retained;
    }
    $name = $request->name;
    $email = $request->email;
    $mobile = $request->mobile;
    $location = $request->location;

    $updateDetails = array(
       'name' => $name,
       'email' => $email,
       'mobile' => $mobile,
       'location' => $location,
       'logo' => $avatarlogo,
    );

    DB::table('settings')->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}


public function switch_status($id,$status){
    $updateDetails = array(
        'status' => $status,
    );
    DB::table('students')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Status Updated!");
    return Redirect::back();
}



}
