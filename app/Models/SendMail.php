<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use DB;

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

        $Settings = DB::table('settings')->where('id','1')->get();
        foreach ($Settings as $set){
            $subject = "Payment Received";
            $appName = $set->name;
            $appEmail = "smis.system.mailer@gmail.com";
        }


        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;
        $toVariableName = $name;

        Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('globaltechke2021@gmail.com')->bcc('albertmuhatia@gmail.com')->subject($subject);
        });
    }
}
