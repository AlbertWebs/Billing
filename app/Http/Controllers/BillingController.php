<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index(){
         return view('billing.index');
    }

    public function students(){
        return view('billing.students');
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



         die();

    }
}
