<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\School;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\Expense;
use App\Models\Billing;
use App\Models\Setting;
use App\Models\User;
use App\Models\Activity;

use App\Models\Cash;
use App\Models\MpesaTransaction;
use App\Models\STKMpesaTransaction;
use Carbon\Carbon;
use App\Models\Notify;
use Session;
use Auth;
use PDF;
use Hash;

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
        $Group = "home";
        $Title = "All Students";
        $Active = "home";
         return view('billing.index', compact('Group','Title','Active'));
    }
    public function email($campus){
        $Income = Cash::whereDate('created_at', Carbon::today())->where('campus',$campus)->get();
        $Expense = Expense::whereDate('created_at', Carbon::today())->where('campus',$campus)->get();
        $ExpenseTotal = Expense::whereDate('created_at', Carbon::today())->where('campus',$campus)->sum('amount');
        $IncomeTotal = Cash::whereDate('created_at', Carbon::today())->where('campus',$campus)->sum('amount');
        $Student = Student::whereDate('created_at', Carbon::today())->where('campus',$campus)->get();

         return view('dailyReports', compact('Income','Expense','Student','ExpenseTotal','IncomeTotal'));
    }


    public function students(){
        Session::forget('billing');
        Session::forget('user');
        Session::forget('partials');
        $Group = "students";
        $Title = "All Students";
        $Active = "students";
        // $Student = Student::all();
        $Student = DB::table('students')->where('campus' ,Auth::User()->campus)->get();
        return view('billing.students', compact('Student','Group','Title','Active'));
    }

    public function enroll(){
        $Group = "students";
        $Title = "All Users";
        $Active = "enroll";
        return view('billing.enrol',compact('Group','Title','Active'));
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
         $Student->avatar = "avatar.jpg";
         $Student->campus = Auth::User()->campus;

         $UserSession = Auth::User()->name;
         activity()->log(''.$name.' has been Enrolled By '.$UserSession.'');

         $User = Student::where('email',$email)->get();
         if($Student->save()){
            Session::put('user', $email);
         }
    }

    public function student($id){
       $Group = "students";
       $Title = "All Users";
       $Active = "students";
       $Student = Student::where('campus' ,Auth::User()->campus)->where('id',$id)->get();
       return view('billing.save-student', compact('Student','Group','Active','Title'));
    }

    public function switch_campus($id){
        if(Auth::User()->role == "Super Admin"){
             $updateDetails = array (
                'campus' => $id,
             );
             DB::table('users')->where('id',Auth::User()->id)->update($updateDetails);
        }
        return Redirect::back();
     }

     public function add_campus(){
        $Group = "campuses";
        $Title = "Add Campus";
        $Active = "campuses";
        return view('billing.add-campus', compact('Group','Active','Title'));
     }

    public function save_images($id){
        $Student = DB::table('students')->where('id',$id)->where('campus',Auth::User()->campus)->get();
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
            $avatar = "avatar.jpg";
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
        $school = $request->school;


        $updateDetails =  array(
           'title' => $title,
           'price' => $price,
           'school' => $school,
           'campus' =>Auth::User()->campus,
        );

        DB::table('courses')->where('id',$id)->update($updateDetails);
        return Redirect::back();
   }

    public function courses(){
        $Group = "courses";
        $Title = "All Users";
        $Active = "courses";
        $Courses = Course::where('campus',Auth::User()->campus)->get();
        return view('billing.courses', compact('Courses','Group','Title','Active'));
    }

    public function add_course(){
        $Group = "courses";
        $Title = "All Users";
        $Active = "add course";
        $Tutor = Tutor::all();
        $School = School::all();
        return view('billing.add-course', compact('Tutor','School', 'Group','Title','Active'));
    }


    public function add_school(){
        $Group = "courses";
        $Title = "All Users";
        $Active = "add school";
        return view('billing.add_school', compact('Group','Title','Active'));
    }


    public function add_tutors(){
        return view('billing.add-tutor');
    }

    public function course($id){
        $Group = "courses";
        $Title = "All Users";
        $Active = "add course";
        $Tutor = Tutor::all();
        $Courses = Course::where('campus' ,Auth::User()->campus)->where('id',$id)->get();
        $School = School::all();
        return view('billing.course', compact('Courses','Tutor','School','Group','Title','Active'));
    }

    public function tutors(){
        $Tutors = Tutor::all();
        return view('billing.tutors', compact('Tutors'));
    }

    public function tutor($id){
        $Tutor = Tutor::find($id);
        return view('billing.tutor', compact('Tutor'));
    }

    public function activity(){
        $Group = "activity";
        $Title = "activity";
        $Active = "activity";
        $Activity = DB::table('activity_log')->get();
        return view('billing.activity', compact('Activity','Group','Title','Active'));
    }


    public function delete_campus($id){
        $Campus = Setting::find($id);
        $UserSession = Auth::User()->name;
        activity()->log('Campus:'.$Campus->name.' has been Deleted By '.$UserSession.'');
        DB::table('settings')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function delete_expenses($id){
        $Expense = Expense::find($id);
        $UserSession = Auth::User()->name;
        activity()->log('Expense:'.$Expense->reason.' has been Deleted By '.$UserSession.'');
        DB::table('expenses')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function save_campus(Request $request){
        $path = 'uploads/logo';
        if(isset($request->logo)){
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $avatarlogo = $filename;
        }else{
            $avatarlogo = "0";
        }
        $Setting = new Setting;
        $Setting->name = $request->name;
        $Setting->aka = $request->initial;
        $Setting->email = $request->email;
        $Setting->mobile = $request->mobile;
        $Setting->location = $request->location;
        $Setting->address = $request->address;
        $Setting->logo = $avatarlogo;
        $Setting->save();
        return Redirect::back();
    }

    public function add_course_post(Request $request){
        $title = $request->title;

        $Course = new Course;
        $Course->title = $request->title;
        $Course->school = $request->school;
        $Course->price = $request->price;
        $Course->campus = Auth::User()->campus;

        $Course->save();
        return Redirect::back();
    }

    public function add_school_post(Request $request){
        $title = $request->title;
        $School = new School;
        $School->title = $request->title;
        $School->campus = Auth::User()->campus;
        $School->save();
        Session::flash('message', "School Has Been Added");
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
        $Course = Course::find(id);
        $UserSession = Auth::User()->name;
        activity()->log('Course:'.$Course->title.' has been Deleted By '.$UserSession.'');

        DB::table('courses')->where('id',$id)->where('campus' ,Auth::User()->campus)->delete();
        return Redirect::back();
    }


    public function tutor_delete($id){
        DB::table('tutors')->where('id',$id)->where('campus' ,Auth::User()->campus)->delete();
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
    $Group = "billings";
    $Title = "All Users";
    $Active = "create-bill";
    return view('billing.create-bill',compact('Group','Title','Active'));
   }

   public function create_bill_fetch($email){
    $Group = "billings";
    $Title = "All Users";
    $Active = "my-payments";
    //Create Session
    Session::put('user', $email);
    return view('billing.create-bill', compact('email','Group','Title','Active'));
   }

   public function my_payments(){
        $Group = "billings";
        $Title = "All Users";
        $Active = "my-payments";
        $Billings = DB::table('billings')->where('group_id',null)->where('campus' ,Auth::User()->campus)->get();
        // dd($Billings);
        return view('billing.payments',compact('Billings','Group','Title','Active'));
   }

   public function my_payments_ref($ref){
    $Group = "billings";
    $Title = "All Students";
    $Active = "my-payments";
    $Billings = DB::table('billings')->where('group_id',$ref)->where('campus' ,Auth::User()->campus)->get();
    return view('billing.payments_ref',compact('Billings','Group','Title','Active'));
  }



   public function editable_invoice(){
    // DB::table('billings')->get();
    return view('billing.editable-invoice');
}

public function create_bill_post_c2b(Request $request){
    return $this->create_bill_post();
}

public function create_bill_posts(Request $request){

    $user = $request->user;
    $price = $request->amount;
    $amount = $request->amount;
    $description = $request->description;
    $note = $request->note;
    $title = $request->title;
    $course_id = $request->course;
    $reference = $request->reference;
    $group_id = $request->group_id;

    $Course = Course::find($course_id);
    $TheStudent = Student::find($user);
    $IncomeBalance = Cash::latest()->first();
    if($IncomeBalance == null){
       $TheBalance = $price;
    }else{
        $CurrentBalance = $IncomeBalance->balance;
        $TheBalance = $CurrentBalance+$price;
    }
    // Create Cases
    $Cash = new Cash;
    $Cash->amount = $amount;
    $Cash->campus = Auth::User()->campus;
    $Cash->reason = "School Fees Paid By $TheStudent->name, Paying For $Course->title";
    $Cash->user = Auth::user()->id;
    $Cash->source = "Fees Payment";
    $Cash->code = "";
    $Cash->balance = $TheBalance;
    $Cash->save();

    $Course_price = $Course->price;
    $Amount_paid = $amount;
    // Check if payment exists
    $Previous = DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->orderBy('id','DESC')->first();
    if($Previous == null){
        //
        if($Amount_paid == $Course_price){
            $Balance = 0;
            $group_role = "parent";
            $group_id = null;
            $original_payment = $reference;
            $paid = "Paid";
        }else{
            $Balance = $Course_price-$Amount_paid;
            $group_role = "child";
            $group_id = null;
            $paid = "Partially Paid";
            $original_payment = $reference;
        }
        //
    }else{
        $Bal = $Previous->balance;
        $NewBalance =$Bal-$Amount_paid;
        if($NewBalance<1){
            $Balance = $NewBalance;
            $paid = "Paid";
            $group_role = "parent";
            // $group_id = $reference;
            $group_id = null;
            $original_payment = $request->original_payment;
            // Update the children
            $UpdateDetails = array(
                'group_role' => 'child',
                'group_id' => $reference,
            );
            DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->update($UpdateDetails);
        }
        else
        {
            $Balance = $Bal-$Amount_paid;
            $paid = "Partially Paid";
            $group_role = "child";
            $group_id = null;
            $original_payment = $request->original_payment;
            $UpdateDetails = array(
                'group_role' => 'child',
                'group_id' => $original_payment,
            );
            DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->update($UpdateDetails);
        }
    }

    $Billing = new Billing;
    $Billing->student = $user;
    $Billing->original_payment = $original_payment;
    $Billing->group_id = $group_id;
    $Billing->group_role = $group_role;
    $Billing->note = $note;
    $Billing->reference = $reference;
    $Billing->balance = $Balance;
    $Billing->course_id = $course_id;
    $Billing->amount = $amount;
    $Billing->campus = Auth::User()->campus;
    $Billing->description = $description;
    $Billing->title = $Course->title;
    $Billing->paid = $paid;

    if($Billing->save()){

        //Get Latest
        $Billing = DB::table('billings')->orderBy('created_at', 'desc')->where('campus' ,Auth::User()->campus)->first();
        return $this->download($Billing->id);
    }

}

public function create_bill_post(Request $request){
    // Check C2b is set
    if($request->has('c2b')){
         $UpdateUser = array(
             'user_id' => $request->user,
         );
         DB::table('mobile_payments')->where('TransID',$request->transID)->update($UpdateUser);
      }

    // Assign Course to student
    $updateCourse = array(
        'course_id' =>$request->course,
    );
    DB::table('students')->where('id',$request->user)->update($updateCourse);
    //

    $user = $request->user;
    $price = $request->amount;
    $amount = $request->amount;
    $description = $request->description;
    $note = $request->note;
    $title = $request->title;
    $course_id = $request->course;
    $reference = $request->reference;
    $group_id = $request->group_id;

    $Course = Course::find($course_id);
    $TheStudent = Student::find($user);
    $IncomeBalance = Cash::latest()->first();
    if($IncomeBalance == null){
       $TheBalance = $price;
    }else{
        $CurrentBalance = $IncomeBalance->balance;
        $TheBalance = $CurrentBalance+$price;
    }

    // Create Cases
    $Cash = new Cash;
    $Cash->amount = $amount;
    $Cash->campus = Auth::User()->campus;
    $Cash->reason = "School Fees Paid By $TheStudent->name, Paying For $Course->title";
    $Cash->user = Auth::user()->id;
    $Cash->source = "Fees Payment";
    $Cash->code = "";
    $Cash->balance = $TheBalance;
    $Cash->save();

    $Course_price = $Course->price;
    $Amount_paid = $amount;
    // Check if payment exists
    $Previous = DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->orderBy('id','DESC')->first();
    $Origin = DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->orderBy('id','ASC')->first();
    if($Previous == null){
        //
        if($Amount_paid == $Course_price){
            $Balance = 0;
            $group_role = "parent";
            $group_id = null;
            $original_payment = $reference;
            $paid = "Paid";
        }else{
            $Balance = $Course_price-$Amount_paid;
            $group_role = "child";
            $group_id = null;
            $paid = "Partially Paid";
            $original_payment = $reference;
        }
        //
    }else{
        $Bal = $Previous->balance;
        $NewBalance =$Bal-$Amount_paid;
        if($NewBalance<1){
            $Balance = $NewBalance;
            $paid = "Paid";
            $group_role = "parent";
            // $group_id = $reference;
            $group_id = null;
            $original_payment = $Origin->original_payment;
            // Update the children
            $UpdateDetails = array(
                'group_role' => 'child',
                'group_id' => $reference,
            );
            DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->update($UpdateDetails);
        }
        else
        {
            $Balance = $Bal-$Amount_paid;
            $paid = "Partially Paid";
            $group_role = "child";
            $group_id = null;
            $original_payment = $Origin->original_payment;
            $UpdateDetails = array(
                'group_role' => 'child',
                'group_id' => $original_payment,
            );
            DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->update($UpdateDetails);
        }
    }

    Session::forget('billing');
    Session::save();
    Session::forget('user');
    Session::save();
    Session::forget('partials');
    Session::save();
    $this->destroyer();

    if($Balance > 1){
        $Notify = new Notify;
        $Notify->user_id = $user;
        $Notify->balance = $Balance;
        $Notify->save();
    }else{
        DB::table('notifies')->where('user_id',$user)->delete();
    }

    if($request->billType == 1){
       $EnterTransaction = $request->transID;
    }else{
        $EnterTransaction = "0";
    }

    if(isset($request->discount)){
        $discount = $request->discount;
        $Balance = $Balance-$discount;
    }else{
        $discount = "0";

    }


    $Billing = new Billing;
    $Billing->student = $user;
    $Billing->type = $request->billType;
    $Billing->discount = $discount;
    $Billing->original_payment = $original_payment;
    $Billing->group_id = $group_id;
    $Billing->group_role = $group_role;
    $Billing->m_pesa = $EnterTransaction;
    $Billing->note = $note;
    $Billing->reference = $reference;
    $Billing->balance = $Balance;
    $Billing->course_id = $course_id;
    $Billing->amount = $amount;
    $Billing->description = $description;
    $Billing->title = $Course->title;
    $Billing->campus = Auth::User()->campus;
    $Billing->paid = $paid;
    $Course  = Course::find($course_id);
    $Stude = Student::find($user);

        $UserSession = Auth::User()->name;
        activity()->log('Student:'.$Stude->name.' has paid '.$amount.' For '.$Course->title.'  Recorded By '.$UserSession.'');
    if($Billing->save()){
        $Billing = DB::table('billings')->orderBy('created_at', 'desc')->where('campus' ,Auth::User()->campus)->first();
        $Message = "Hello $TheStudent->name, Your Payment of $amount, For $Course->title has been recorded successfully";
        //
        $phoneNumbers = str_replace(' ', '', $TheStudent->mobile);
        $phoneNumber = str_replace('+', '', $phoneNumbers);
        //

        Session::put('billing', $Billing->id);
        // $this->sendSMS($Message,$phoneNumber);
        return $this->download($Billing->id);
    }
}

public function sendSMS($Message,$TheStudent){
    // echo $Message;

    $message = $Message;
    $phone =$TheStudent;
    $senderid = "DESIGNEKTA";
    //
    $url = 'https://bulk.cloudrebue.co.ke/api/v1/send-sms';
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJhdWQiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJpYXQiOjE2NTM5Nzc0NTEsImV4cCI6NDgwOTczNzQ1MSwiZGF0YSI6eyJlbWFpbCI6ImluZm9AZGVzaWduZWt0YS5jb20iLCJ1c2VyX2lkIjoiMTQiLCJ1c2VySWQiOiIxNCJ9fQ.N3y4QhqTApKi46YSiHmkaoEctO9z6Poc4k1g44ToyjA";

        $post_data=array(
        'sender'=>$senderid,
        'phone'=>$phone,
        'correlator'=>'Whatever',
        'link_id'=>null,
        'message'=>$message
        );

    $data_string = json_encode($post_data);
    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization:Bearer '.$token,
            'Content-Length: ' . strlen($data_string)
            )
        );

    $response = curl_exec($ch);
    curl_close($ch);
    // print_r($response);
}

public function create_bill_partial($id){
    $Group = "billings";
    $Title = "Make a Partial Payment";
    $Active = "m-pesa";
    $Billing = Billing::find($id);
    return view('billing.create-bill-partial',compact('Billing','Group','Title','Active'));
}


public function getInfo($id)
{
  $fill = DB::table('courses')->where('campus' ,Auth::User()->campus)->where('id', $id)->pluck('price');

  return Response::json(['success'=>true, 'info'=>$fill]);
}

public function createPDF() {
    $Billing = Billing::all();
    $pdf = PDF::loadView('myPDF', compact('Billing'));
    return $pdf->stream('invoice.pdf');
}

public function download($id) {
    $Group = "billings";
    $Title = "All Students";
    $Active = "m-pesa";
    $Billing = Billing::where('id',$id)->where('campus' ,Auth::User()->campus)->get();
    return view('billing.download', compact('Billing','Group','Title','Active'));

}
public function edit_bill($id) {
    $Billing = Billing::where('id',$id)->where('campus' ,Auth::User()->campus)->get();
    return view('billing.edit_bill', compact('Billing'));

}




public function checkEmail(Request $request){
    $email = $request->input('email');
    $isExists = Student::where('email',$email)->where('campus' ,Auth::User()->campus)->first();
    if($isExists){
        return response()->json(array("exists" => true));
    }else{
        return response()->json(array("exists" => false));
    }
}

public function destroyer()
{
    Session::forget('billing');
    Session::forget('user');
    Session::forget('partials');
}

public function destroy(){
    Session::forget('billing');
    Session::forget('user');
    Session::forget('partials');
    $Group = "home";
    $Title = "All Students";
    $Active = "home";
    return view('billing.index', compact('Group','Title','Active'));
    // return Redirect::back();
}

public function system_settings() {
    $Group = "courses";
    $Title = "System Settings";
    $Active = "schools";
    $Settings = Setting::where('id' ,Auth::User()->campus)->get();
    return view('billing.system-settings', compact('Settings','Group','Title','Active'));
}

public function system_settings_single($id) {
    $Group = "courses";
    $Title = "System Settings";
    $Active = "schools";
    $Settings = Setting::where('id' ,$id)->get();
    return view('billing.system_settings_single', compact('Settings','Group','Title','Active'));
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

    DB::table('settings')->where('id' ,Auth::User()->campus)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}
public function save_settings_single(Request $request, $id){
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
       'aka' => $request->initial,
       'location' => $location,
       'logo' => $avatarlogo,
    );

    DB::table('settings')->where('id' ,$id)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}




public function switch_status($id,$status){
    $updateDetails = array(
        'status' => $status,
    );
    DB::table('students')->where('id',$id)->where('campus' ,Auth::User()->campus)->update($updateDetails);
    Session::flash('message', "Status Updated!");
    return Redirect::back();
}


public function process_payment($Re){

}

public function profile($id){
   $User = Student::where('id',$id)->where('campus' ,Auth::User()->campus)->get();
   $Billing = Billing::where('student',$id)->where('campus' ,Auth::User()->campus)->get();
   return view('billing.profile', compact('Billing','User'));
}

public function schools(){
    $Group = "courses";
    $Title = "All Users";
    $Active = "schools";
    $School = School::where('campus' ,Auth::User()->campus)->get();
    return view('billing.schools', compact('School','Group','Title','Active'));
}

public function school($id){
    $Group = "courses";
    $Title = "All Users";
    $Active = "schools";
    $School = School::where('id',$id)->where('campus' ,Auth::User()->campus)->get();
    return view('billing.school', compact('School','Group','Title','Active'));
}

public function save_school_post(Request $request ,$id){

    $title = $request->title;
    $updateDetails =  array(
    'title' => $title,
    'campus' => Auth::User()->campus,
    );

    DB::table('schools')->where('id',$id)->where('campus' ,Auth::User()->campus)->update($updateDetails);
    Session::flash('message', "Updated!");
    return Redirect::back();
}

public function delete_student($id){
    DB::table('students')->where('id',$id)->where('campus' ,Auth::User()->campus)->delete();
    Session::flash('message', "Deleted!");
    return Redirect::back();
}

public function edit_pic($id){
    $Student = Student::where('id',$id)->where('campus' ,Auth::User()->campus)->get();
    $Group = "students";
    $Title = "All Users";
    $Active = "users";
    return view('billing.edit_pic', compact('Student','Group','Active','Title'));

}
public function save_pic(Request $request, $id){

    $path = 'uploads/students';
    if(isset($request->avatar)){
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $avatarlogo = $filename;
    }else{
        $avatarlogo = $request->retained;
    }


    $updateDetails = array(
       'avatar' => $avatarlogo,
    );

    DB::table('students')->where('id',$id)->where('campus' ,Auth::User()->campus)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}

public function my_statements($id){
    $Student = Student::find($id);
    $name = $Student->name;
    $Group = "income";
    $Title = "Statements For ".$name."";
    $Active = "m-pesa";
    $Student = Student::where('id',$id)->where('campus' ,Auth::User()->campus)->get();
    $Billings = Billing::where('student',$id)->where('campus' ,Auth::User()->campus)->get();
    $Total = Billing::where('student',$id)->where('campus' ,Auth::User()->campus)->sum('amount');
    return view('billing.statements', compact('Billings','Student','Group','Title','Active','Total'));

}

public function user($id){
    $User = User::where('id',$id)->where('campus' ,Auth::User()->campus)->get();
    $Group = "students";
    $Title = "User";
    $Active = "student";
    return view('billing.user', compact('User','Group','Title','Active'));

}
public function users(){
    $Group = "students";
    $Title = "All Users";
    $Active = "users";
    $User = User::where('campus' ,Auth::User()->campus)->get();
    return view('billing.users', compact('User','Group','Title','Active'));
}

public function add_user(){
    $Group = "students";
    $Title = "All Students";
    $Active = "add user";
    return view('billing.add_user', compact('Group','Title','Active'));
}

public function delete_user($id){
    $User = User::find($id);
    $UserSession = Auth::User()->name;
    activity()->log('Admin:'.$User->name.' has been Deleted By '.$UserSession.'');

    DB::table('users')->where('id',$id)->where('campus' ,Auth::User()->campus)->delete();
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}

public function add_user_post(Request $request){
    $path = 'uploads/users';
    $User = new User;
    $User->name = $request->name;
    $User->campus = $request->campus;
    $User->role = $request->role;
    $User->email = $request->email;
    $User->avatar = "0";
    $User->password = Hash::make($request->password);
    $User->is_admin = "1";
    $User->save();
    $UserSession = Auth::User()->name;
    activity()->log('Admin:'.$request->name.' has been added By '.$UserSession.'');
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();

}

public function save_user(Request $request, $id){

   $updateDetails = array(
      'name'=> $request->name,
      'email'=> $request->email,

      'is_admin'=> $request->is_admin,
   );
   $UserSession = Auth::User()->name;
   activity()->log('Admin:'.$request->name.' has been updated By '.$UserSession.'');

   DB::table('users')->where('id',$id)->update($updateDetails);
   Session::flash('message', "Changes have Been Saved");
   return Redirect::back();
}
public function edit_pic_user($id){
    $Group = "students";
    $Title = "All Users";
    $Active = "users";
    $User = User::where('id',$id)->get();
    return view('billing.edit_pic_user', compact('User','Group','Title','Active'));
}
public function save_pic_user(Request $request, $id){

    $path = 'uploads/users';
    if(isset($request->avatar)){
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);
        $avatarlogo = $filename;
    }else{
        $avatarlogo = $request->retained;
    }
    $updateDetails = array(
       'avatar' => $avatarlogo,
    );
    DB::table('users')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}
public function switch_user($id,$status){
    if($status == "Super Admin"){
        $newStatus = "Admin";
    }else{
        $newStatus = "Super Admin";
    }
    $updateDetails = array(
        'role' => $newStatus,
    );
    DB::table('users')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Status Updated!");
    return Redirect::back();
}


public function income_today(){
    $Group = "reports";
    $Active = "today";
    $Title = "Todays Income";
    $Billings = Billing::whereDate('created_at', Carbon::today())->where('campus' ,Auth::User()->campus)->get();
    $Total = Billing::whereDate('created_at', Carbon::today())->where('campus' ,Auth::User()->campus)->sum('amount');
    $Balance = Billing::whereDate('created_at', Carbon::today())->where('campus' ,Auth::User()->campus)->sum('balance');
    return view('billing.income_today', compact('Billings','Title','Total','Balance','Group','Active'));
}

public function income_week(){
    $Group = "reports";
    $Active = "today";
    $Title = "This Weeks Income";
    $date = Carbon::now()->subDays(7);
    $Billings = Billing::where('created_at', '>=', $date)->where('campus' ,Auth::User()->campus)->get();
    $Total = Billing::where('created_at', '>=', $date)->where('campus' ,Auth::User()->campus)->sum('amount');
    $Balance = Billing::where('created_at', '>=', $date)->where('campus' ,Auth::User()->campus)->sum('balance');
    return view('billing.income_today', compact('Billings','Title','Total','Balance','Group','Active'));
}

public function income_this_month(){
    $Group = "reports";
    $Active = "month";
    $Title = "This Months Income - Last 30 Days";
    $date = Carbon::now()->subDays(30);
    $Billings = Billing::where('created_at', '>=', $date)->where('campus' ,Auth::User()->campus)->get();
    $Total = Billing::where('created_at', '>=', $date)->where('campus' ,Auth::User()->campus)->sum('amount');
    $Balance = Billing::where('created_at', '>=', $date)->where('campus' ,Auth::User()->campus)->sum('balance');
    return view('billing.income_today', compact('Billings','Title','Total','Balance','Group','Active'));
}

public function income_search(){
    // Clear Session
    $Group = "reports";
    $Active = "search";
    Session::forget('search');
    $Billings = Billing::where('campus' ,Auth::User()->campus)->get();
    $Title = "Search Income Date";
    return view('billing.income_search', compact('Title','Billings','Group','Active'));
}

public function income_x_days(Request $request){
    $Group = "reports";
    $Active = "search";
    Session::forget('search');
    $date = $request->date;
    $Title = "Income on $request->date";
    $datef = date('Y-m-d', strtotime($date));
    $Billings = Billing::whereDate('created_at', $datef)->where('campus' ,Auth::User()->campus)->get();
    Session::put('search', $date);
    $Total = Billing::whereDate('created_at', $datef)->where('campus' ,Auth::User()->campus)->sum('amount');
    $Balance = Billing::whereDate('created_at', $datef)->where('campus' ,Auth::User()->campus)->sum('balance');
    return view('billing.income_search', compact('Billings','Title','Total','Balance','Group','Active'));
}

public function income_search_range(){
    $Group = "reports";
    $Active = "search";
    // Clear Session
    Session::forget('search');
    $Billings = Billing::where('campus' ,Auth::User()->campus)->get();
    $Title = "Search Income Date";
    return view('billing.income_search_range', compact('Title','Billings','Group','Active'));
}

public function income_x_days_range(Request $request){
    $Group = "reports";
    $Active = "search-r";
    Session::forget('search');
    $date = $request->date;
    $Range = $request->date;
    $dates = explode(' - ' ,$Range);
    $Start = $dates[0];
    $Stop = $dates[1];
    $StartF = date('Y-m-d', strtotime($Start));
    $StopF = date('Y-m-d', strtotime($Stop));
    $Title = "Income on $StartF - $StopF";
    $Billings = Billing::whereBetween('created_at', [$StartF,$StopF])->where('campus' ,Auth::User()->campus)->get();
    Session::put('search', $date);
    $Total = Billing::whereBetween('created_at', [$StartF,$StopF])->where('campus' ,Auth::User()->campus)->sum('amount');
    $Balance = Billing::whereBetween('created_at', [$StartF,$StopF])->where('campus' ,Auth::User()->campus)->sum('balance');
    return view('billing.income_search_range', compact('Billings','Title','Total','Balance','Group','Active'));
}

public function total_receivable(){
    $Group = "reports";
    $Active = "receivable";
    // Clear Session
    Session::forget('search');
    $Billings = DB::table('billings')->where('campus' ,Auth::User()->campus)->where('balance','>',0)->get();
    $Balance = DB::table('billings')->where('campus' ,Auth::User()->campus)->sum('balance');
    $Title = "Total Reciveble";
    return view('billing.total_receivable', compact('Title','Billings','Group','Active','Balance'));
}

public function total_overpayed(){
    $Group = "reports";
    $Active = "overpayed";
    // Clear Session
    Session::forget('search');
    $Billings = DB::table('billings')->where('campus' ,Auth::User()->campus)->where('balance','<',0)->get();
    $Balance = DB::table('billings')->where('campus' ,Auth::User()->campus)->sum('balance');
    $Title = "Total Overpayed";
    return view('billing.total_receivable', compact('Title','Billings','Group','Active','Balance'));
}

public function income(){
    $Group = "income";
    $Title = "All Income";
    $Active = "users";
    $Income = Cash::whereMonth('created_at', date('m'))->where('campus' ,Auth::User()->campus)->get();
    $IncomeTotal = Cash::whereMonth('created_at', date('m'))->where('campus' ,Auth::User()->campus)->sum('amount');
    return view('billing.income', compact('Income','Group','Title','Active','IncomeTotal'));
}

public function record_expenses(){
    $Cash = DB::table('cashes')->where('campus' ,Auth::User()->campus)->orderBy('id','DESC')->first();
    $Group = "income";
    $Title = "Record Expenses";
    $Active = "m-pesa";
    return view('billing.record-expenses',compact('Group','Title','Active','Cash'));
}

public function reports(){
    $Group = "reports";
    $Active = "today";
    $Title = "Expenses";
    $Billings = Billing::whereDate('created_at', Carbon::today())->where('campus' ,Auth::User()->campus)->get();
    $Total = Billing::whereDate('created_at', Carbon::today())->where('campus' ,Auth::User()->campus)->sum('amount');
    $Balance = Billing::whereDate('created_at', Carbon::today())->where('campus' ,Auth::User()->campus)->sum('balance');
    $Expense = Expense::whereDate('created_at', Carbon::today())->where('campus' ,Auth::User()->campus)->get();
    return view('billing.reports', compact('Expense','Title','Total','Group','Active'));
}

// public function reports() {
//     $Billing = Billing::find($id);
//     return view('billing.reports');

// }

public function correct_accounts(Request $request){
    $Cash = DB::table('cashes')->where('campus' ,Auth::User()->campus)->orderBy('id','DESC')->first();
    $Balance = $Cash->balance;


    $add_funds = $request->add_funds;
    $remove_funds = $request->remove_funds;
    $reason = $request->reason;

    if($add_funds > 0){
        $NewBalance = $Balance+$add_funds;
    }

    if($remove_funds > 0){
        $NewBalance = $Balance-$remove_funds;
    }


    // Calculate Balance
    $Expense = new Expense;
    $Expense->amount = $request->amount;
    $Expense->campus = Auth::User()->campus;
    $Expense->balance = $NewBalance;
    $Expense->user = Auth::user()->id;
    $Expense->reason = "Correction -$request->reason";
    if($Expense->save()){
        // Create a record in the cashes table
        $Cash = new Cash;
        $Cash->amount = "-$request->amount";
        $Cash->campus = Auth::User()->campus;
        $Cash->reason = "Correction -$request->reason";
        $Cash->user = Auth::user()->id;
        $Cash->source = "Admin Initiated";
        $Cash->code = "";
        $Cash->balance = $NewBalance;
        $Cash->save();
        //
        return $this->correct_books();
    }
}

public function record_expenses_post(Request $request){
    $Cash = DB::table('cashes')->where('campus' ,Auth::User()->campus)->orderBy('id','DESC')->first();
    $Balance = $Cash->balance;
    $NewBalance = $Balance-$request->amount;
    // Calculate Balance
    $Expense = new Expense;
    $Expense->amount = $request->amount;
    $Expense->campus = Auth::User()->campus;
    $Expense->balance = $NewBalance;
    $Expense->user = Auth::user()->id;
    $Expense->reason = $request->reason;
    if($Expense->save()){
        // Create a record in the cashes table
        $Cash = new Cash;
        $Cash->amount = "-$request->amount";
        $Cash->campus = Auth::User()->campus;
        $Cash->reason = $request->reason;
        $Cash->user = Auth::user()->id;
        $Cash->source = "Admin Initiated";
        $Cash->code = "";
        $Cash->balance = $NewBalance;
        $Cash->save();
        //
        return $this->expenses();
    }
}

public function expenses(){
    $Group = "income";
    $Title = "Record Expenses";
    $Active = "expenses";
    $Expense = Expense::where('campus' ,Auth::User()->campus)->get();
    $ExpenseTotal = Expense::whereMonth('created_at', date('m'))->where('campus' ,Auth::User()->campus)->sum('amount');
    return view('billing.expenses',compact('Expense','Group','Title','Active','ExpenseTotal'));
}

public function c2b(){
    $Group = "m-pesa";
    $Title = "C2B Payments";
    $Active = "c2b";
    $Expense = MpesaTransaction::all();
    return view('billing.c2b',compact('Expense','Group','Title','Active'));
}

public function correct_books(){
    $Group = "income";
    $Title = "C2B Payments";
    $Active = "expenses";
    $Cash = DB::table('cashes')->where('campus' ,Auth::User()->campus)->orderBy('id','DESC')->first();
    return view('billing.correct-books',compact('Group','Title','Active','Cash'));
}



public function stk(){
    $Group = "m-pesa";
    $Title = "STK Push Payments";
    $Active = "stk";
    $Expense = STKMpesaTransaction::all();
    return view('billing.stk',compact('Expense','Group','Title','Active'));
}

public function my_courses($id){
    // $Billings = DB::table('billings')->where('student',$id)->get();
    // $Billings = Billing::select('course_id')->where('student',$id)->distinct()->get();
    $Billings = Billing::distinct()->where('campus' ,Auth::User()->campus)->get(['course_id']);
    dd($Billings);
    foreach ($Billings as $key => $value) {
        echo $value->reference;
    }
    // dd($Billings);
}


public function record_c2b($email){
    $Group = "m-pesa";
    $Title = "All Users";
    $Active = "c2b";
    //Create Session
    Session::put('user', $email);
    return view('billing.record_c2b', compact('email','Group','Title','Active'));
}

public function checkID(Request $request){
    $transID = $request->input('transID');
    $isExists = MpesaTransaction::where('TransID',$transID)->where('status','0')->first();
    if($isExists){
        return response()->json(array("exists" => true, "amount"=>$isExists->TransAmount, "transID"=>$isExists->TransID));
    }else{
        return response()->json(array("exists" => false));
    }
}

public function checkIDRefresh(Request $request){
    $transID = $request->input('transID');
    $isExists = MpesaTransaction::where('status','0')->first();
    if($isExists){
        return response()->json(array("exists" => true, "amount"=>$isExists->TransAmount, "transID"=>$isExists->TransID));
    }else{
        return response()->json(array("exists" => false));
    }
}



public function c2b_status_update(Request $request){
        $updateDetails = array(
            'status' => 1,
        );
        DB::table('mobile_payments')->where('TransID',$request->transID)->update($updateDetails);
        return response()->json(array("exists" => true));
}

public function verify(){
    //Get Last Payment
    $Last = STKMpesaTransaction::where('status','1')->orderBy('lnmoID','DESC')->first();
    $UserID = $Last->user_id;
    $Amount = $Last->Amount;
    $Group = "billings";
    $Title = "Assign STK Payment";
    $Active = "create-bill";
    $EmailFetch = Student::find($UserID);
    $Email = $EmailFetch->email;
    Session::put('user', $Email);
    return view('billing.create-bill-stk',compact('Group','Title','Active','Amount','Email'));
}


}
