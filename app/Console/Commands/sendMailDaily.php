<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Cash;
use App\Models\Expense;
use App\Models\Student;
use Mail;
use Log;
use DB;
use Carbon\Carbon;

class sendMailDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:mail_send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an daily email to all the users';

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
        $user = User::where('id','1')->get();
        foreach ($user as $a)
        {
            $Settings = DB::table('settings')->get();
            foreach($Settings as $Set){
                // Report Income
                $Income = Cash::whereDate('created_at', Carbon::today())->where('campus',$Set->id)->get();
                // Report Expenses
                $Expense = Expense::whereDate('created_at', Carbon::today())->where('campus',$Set->id)->get();
                // Report Enroll
                $Student = Student::whereDate('created_at', Carbon::today())->where('campus',$Set->id)->get();
                $ExpenseTotal = Expense::whereDate('created_at', Carbon::today())->where('campus',$Set->id)->sum('amount');
                $IncomeTotal = Cash::whereDate('created_at', Carbon::today())->where('campus',$Set->id)->sum('amount');
                $Subject = "$Set->name Daily Reports";
                $Counts = count($Student);
                $Url = url('/billings/students');
                // Send Emails
                $campus = $Set->id;
                $msg = "This is automatically generated daily Update for $Set->name <br> Total Income is $IncomeTotal, Total Expenses $ExpenseTotal, Total Enrolment: $Counts. <br> Find a detailed report at $Url";
                $CampusName = $Set->name;
                $data = array(
                    'campus'=>$campus,
                    'msg'=>$msg,
                );
                Mail::send('dailyReports', $data, function($message) use ($a,$Subject,$CampusName)
                {
                    $message->from('albertmuhatia@gmail.com',$CampusName);
                    $message->to($a->email,'Super Admin')->subject($Subject);
                });
            }
        }
        $message = "Daily Update mails has been send successfully";
        Log::notice($message);
        $this->info($message);
    }
}

