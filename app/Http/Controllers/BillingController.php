<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\School;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\Billing;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
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
        $school = $request->school;


        $updateDetails =  array(
           'title' => $title,
           'price' => $price,
           'school' => $school,
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
        $School = School::all();
        return view('billing.add-course', compact('Tutor','School'));
    }


    public function add_school(){
        return view('billing.add_school');
    }


    public function add_tutors(){
        return view('billing.add-tutor');
    }

    public function course($id){
        $Tutor = Tutor::all();
        $Courses = Course::find($id);
        $School = School::all();
        return view('billing.course', compact('Courses','Tutor','School'));
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
        $Course->school = $request->school;
        $Course->price = $request->price;

        $Course->save();
        return Redirect::back();
    }

    public function add_school_post(Request $request){
        $title = $request->title;
        $School = new School;
        $School->title = $request->title;
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
        $Billings = DB::table('billings')->where('group_id',null)->get();
        return view('billing.payments',compact('Billings'));
   }

   public function my_payments_ref($ref){
    $Billings = DB::table('billings')->where('group_id',$ref)->get();
    return view('billing.payments_ref',compact('Billings'));
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
    $group_id = $request->group_id;

    $Course = Course::find($course_id);
    $Course_price = $Course->price;
    $Amount_paid = $amount;
    // Check if payment exists
    $Previous = DB::table('billings')->where('student',$user)->where('course_id',$course_id)->orderBy('id','DESC')->first();
    if($Previous == null){
        //
        if($Amount_paid == $Course_price){
            $Balance = 0;
            $group_role = "parent";
            $group_id = $reference;
            $paid = "Paid";
        }else{
            $Balance = $Course_price-$Amount_paid;
            $group_role = "child";
            $group_id = null;
            $paid = "Partially Paid";
        }
        //
    }else{
        $Bal = $Previous->balance;
        $NewBalance =$Bal-$Amount_paid;
        if($NewBalance<1){
            $Balance = $NewBalance;
            $paid = "Paid";
            $group_role = "parent";
            $group_id = $reference;
            // Update the children
            $UpdateDetails = array(
                'group_role' => 'child',
                'group_id' => $group_id,
            );
            DB::table('billings')->where('student',$user)->where('course_id',$course_id)->update($UpdateDetails);
            $group_id = null;
        }else{
            $Balance = $Bal-$Amount_paid;
            $paid = "Partially Paid";
            $group_role = "child";
            $group_id = null;
        }
    }

    $Billing = new Billing;
    $Billing->student = $user;
    $Billing->group_id = $group_id;
    $Billing->group_role = $group_role;
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
public function create_bill_partial($id){
    $Billing = Billing::find($id);
    Session::put('partials', $Billing->id);
    return view('billing.create-bill',compact('Billing'));
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
    Session::forget('partials');

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


public function process_payment($Re){

}

public function profile($id){
   $User = Student::find($id);
   $Billing = Billing::where('student',$id)->get();
   return view('billing.profile', compact('Billing','User'));
}

public function schools(){
    $School = School::all();
    return view('billing.schools', compact('School'));
}

public function school($id){
    $School = School::find($id);
    return view('billing.school', compact('School'));
}

public function save_school_post(Request $request ,$id){

    $title = $request->title;
    $updateDetails =  array(
    'title' => $title,
    );

    DB::table('schools')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Updated!");
    return Redirect::back();
}

public function delete_student($id){
    DB::table('students')->where('id',$id)->delete();
    Session::flash('message', "Deleted!");
    return Redirect::back();
}

public function edit_pic($id){
    $Student = Student::find($id);
    return view('billing.edit_pic', compact('Student'));
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

    DB::table('students')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}

public function my_statements($id){
    $Student = Student::find($id);
    $Billings = Billing::where('student',$id)->get();
    return view('billing.statements', compact('Billings','Student'));
}

public function user($id){
    $User = User::find($id);
    return view('billing.user', compact('User'));

}
public function users(){
    $User = User::all();
    return view('billing.users', compact('User'));
}

public function add_user(){
    return view('billing.add_user');
}

public function delete_user($id){
    DB::table('users')->where('id',$id)->delete();
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();
}

public function add_user_post(Request $request){
    $path = 'uploads/users';
    $User = new User;
    $User->name = $request->name;
    $User->email = $request->email;
    $User->password = $request->password;
    $User->is_admin = $request->is_admin;
    $User->save();
    Session::flash('message', "Changes have Been Saved");
    return Redirect::back();

}

public function save_user(Request $request, $id){

   $updateDetails = array(
      'name'=> $request->name,
      'email'=> $request->email,
      'password'=> $request->password,
      'is_admin'=> $request->is_admin,
   );
   DB::table('users')->where('id',$id)->update($updateDetails);
   Session::flash('message', "Changes have Been Saved");
   return Redirect::back();
}
public function edit_pic_user($id){
    $User = User::find($id);
    return view('billing.edit_pic_user', compact('User'));
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
    $updateDetails = array(
        'is_admin' => $status,
    );
    DB::table('users')->where('id',$id)->update($updateDetails);
    Session::flash('message', "Status Updated!");
    return Redirect::back();
}

public function income_today(){
    $Title = "Todays Income";
    $Billings = Billing::whereDate('created_at', Carbon::today())->get();
    return view('billing.income_today', compact('Billings','Title'));
}

public function income_week(){
    $Title = "This Weeks Income";
    $date = Carbon::now()->subDays(7);
    $Billings = Billing::where('created_at', '>=', $date)->get();
    return view('billing.income_today', compact('Billings','Title'));
}

public function income_search(){
    // Clear Session
    Session::forget('search');
    $Billings = Billing::all();
    $Title = "Search Income Date";
    return view('billing.income_search', compact('Title','Billings'));
}

public function income_x_days(Request $request){
    Session::forget('search');
    $date = $request->date;
    $Title = "Income on $request->date";
    $datef = date('Y-m-d', strtotime($date));
    $Billings = Billing::whereDate('created_at', $datef)->get();
    Session::put('search', $date);
    return view('billing.income_search', compact('Billings','Title'));
}

public function income_search_range(){
    // Clear Session
    Session::forget('search');
    $Billings = Billing::all();
    $Title = "Search Income Date";
    return view('billing.income_search_range', compact('Title','Billings'));
}

public function income_x_days_range(Request $request){
    Session::forget('search');
    $date = $request->date;
    $Range = $request->date;
    $dates = explode(' - ' ,$Range);
    $Start = $dates[0];
    $Stop = $dates[1];
    $StartF = date('Y-m-d', strtotime($Start));
    $StopF = date('Y-m-d', strtotime($Stop));
    $Title = "Income on $StartF - $StopF";
    $Billings = Billing::whereBetween('created_at', [$StartF,$StopF])->get();
    Session::put('search', $date);
    return view('billing.income_search_range', compact('Billings','Title'));
}


}
