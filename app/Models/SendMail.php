<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class SendMail extends Model
{
    use HasFactory;
    public static function Send($content,$email,$name){
        //The Generic mailler Goes here
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'content'=>$content,
        );
        $subject = "Payment Received";
        $appName = "School Billing System";
        $appEmail = "smis.system.mailer@gmail.com";

        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;
        $toVariableName = $name;

        Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->subject($subject);
        });
    }
}
