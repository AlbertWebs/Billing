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

class sendMontly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'montly:mail_send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an maothly email to all the Super Admin';

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
        $Settings = DB::table('settings')->get();
        foreach($Settings as $Set){

            $msg = "This is automatically generated Montly Update for $Set->name <br> Total Income is $IncomeTotal, Total Expenses $ExpenseTotal, Total Enrolment: $Counts. <br> Find a detailed report at $Url/email/$Set->id";
            $CampusName = $Set->name;
            $data = array(
                'campus'=>$campus,
                'msg'=>$msg,
            );
            Mail::send('dailyReports', $data, function($message) use ($a,$Subject,$CampusName)
            {
                $message->from('ookiyaale2022@gmail.com',$CampusName);
                $message->to($a->email,'Super Admin')->subject($Subject);
            });
        }

        $message = "Montly Update mails has been send successfully";
        Log::notice($message);
        $this->info($message);
    }
}
