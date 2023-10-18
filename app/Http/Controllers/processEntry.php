 <?php

    if($Previous == null){
        // New Student
        if($Amount_paid == $Course_price){
            $Balance = 0;
            $paid = "Paid";
            $status = "closed";
            $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
        }else if($Amount_paid < $Course_price){
            $Balance = $Course_price-$Amount_paid;
            $paid = "Paid";
            $status = "open";
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
        }else{
            $Balance = 0;
            $paid = "Paid";
            $status = "closed";
            $Excess = $Amount_paid-$Course_price;
            $amount = $Course_price;
            $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
            if($Excess == $Course_price){
                $Balance = 0;
                $paid = "Paid";
                $status = "closed";
                $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
                $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
            }else{
                $Balance = $Course_price-$Excess;
                $paid = "Paid";
                $status = "open";
                $amount = $Excess;
                $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
            }
        }

    }else{
        $Balance = $Previous->balance;
        if($Amount_paid == $Balance){
            $Balance = 0;
            $paid = "Paid";
            $status = "closed";
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
            $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
        }else if($Amount_paid>$Balance){
            $Balance = 0;
            $paid = "Paid";
            $status = "closed";
            $Excess = $Amount_paid-$Previous->balance; //to be carried forward
            $amount = $Previous->balance;
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
            $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
            if($Excess == $Course_price){
                $Balance = 0;
                $paid = "Paid";
                $status = "closed";
                $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
                $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
            }else{
                $Balance = $Course_price-$Excess;
                $amount = $Excess;
                $paid = "Paid";
                $status = "open";
                $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
                $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
            }
        }else{
            $Balance = $Previous->balance-$Amount_paid;
            $paid = "Paid";
            $status = "open";
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
        }
    }


    if($Previous == null){
        // New Student
        if($Amount_paid == $Course_price){
            $Balance = 0;
            $paid = "Paid";
            $status = "closed";
            $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
        }else if($Amount_paid < $Course_price){
            $Balance = $Course_price-$Amount_paid;
            $paid = "Paid";
            $status = "open";
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
        }else{
            $Balance = 0;
            $paid = "Paid";
            $status = "closed";
            $Excess = $Amount_paid-$Course_price;
            $amount = $Course_price;
            $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
        }
    }else{
        $Balance = $Previous->balance;
        if($Amount_paid == $Balance){
            $Balance = 0;
            $paid = "Paid";
            $status = "closed";
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
            $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
        }else if($Amount_paid>$Balance){
            $Balance = 0;
            $paid = "Paid";
            $status = "closed";
            $Excess = $Amount_paid-$Previous->balance; //to be carried forward
            $amount = $Previous->balance;
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
            $updateStatus = array('status'=>$status);  DB::table('billings')->where('student',$user)->where('course_id',$course_id)->where('campus' ,Auth::User()->campus)->where('status','open')->update($updateStatus);
        }else{
            $Balance = $Previous->balance-$Amount_paid;
            $paid = "Paid";
            $status = "open";
            $this->newBilling($user,$status,$request->billType,$discount,$EnterTransaction,$note,$request->agreed_amount,$reference,$request->balance_temp,$Balance,$course_id,$amount,$description,$Course->title,$paid);
        }
    }
