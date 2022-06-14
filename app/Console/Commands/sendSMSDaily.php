<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Setting;
use App\Models\Student;
use DB;
use Mail;
use Log;
class sendSMSDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:sms_send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an daily sms to all the users with balance';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $notifies = DB::table('notifies')->get();
            foreach($notifies as $notify){
                $User = Student::find($notify->user_id);
                $Setting = Setting::find($User->campus);
                $CampusName = $Setting->name;
                $start_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $notify->created_at);
                $end_date = \Carbon\Carbon::today();
                $diff = $start_date->diffInDays($end_date);
                if($diff == 23){
                    $Subject = "Polite Reminder";
                    $msg = "Dear $User->name, Your Fee Balance of $notify->balance is Due in 7 Days, Kindly Pay at Your Own Convinience";
                    $UserName = $User->name;
                    $UserEmail = $User->email;
                    $data = array(
                        'msg' => $msg,
                        'name' => $UserName,
                    );
                    Mail::send('dailyReminders', $data, function($message) use ($Subject,$CampusName,$UserName,$UserEmail)
                    {
                        $message->from('atlascollege@gmail.com',$CampusName);
                        $message->to($UserEmail,$UserName)->subject($Subject);
                    });
                    //*******Send SMS HERE*********/

                    //*********End SMS*************/
                    $message = "Reminder has been sent";
                    Log::notice($message);
                    $this->info($message);
                }
            }
    }
}
