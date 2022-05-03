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
}
