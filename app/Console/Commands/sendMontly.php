<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        $user = User::where('id','1')->get();
        foreach ($user as $a)
        {
            $Settings = DB::table('settings')->get();
            foreach($Settings as $Set){
                $Income = Cash::whereDate('created_at', Carbon::now()->format('M'))->where('campus',$Set->id)->get();
                $Expense = Expense::whereDate('created_at', Carbon::now()->format('M'))->where('campus',$Set->id)->get();
                $Student = Student::whereDate('created_at', Carbon::now()->format('M'))->where('campus',$Set->id)->get();
                $ExpenseTotal = Expense::whereDate('created_at', Carbon::now()->format('M'))->where('campus',$Set->id)->sum('amount');
                $IncomeTotal = Cash::whereDate('created_at', Carbon::now()->format('M'))->where('campus',$Set->id)->sum('amount');
                $Subject = "$Set->name Montly Reports";
                $Counts = count($Student);
                $Url = url('/email');
                // Send Emails
                $campus = $Set->id;
                $msg = "This is automatically generated Montly Update for $Set->name <br> Total Income is $IncomeTotal, Total Expenses $ExpenseTotal, Total Enrolment: $Counts. <br> Find a detailed report at $Url/email/$Set->id";
                $CampusName = $Set->name;
                $data = array(
                    'campus'=>$campus,
                    'msg'=>$msg,
                );
                Mail::send('dailyReports', $data, function($message) use ($a,$Subject,$CampusName)
                {
                    $message->from('atlascollege@gmail.com',$CampusName);
                    $message->to($a->email,'Super Admin')->subject($Subject);
                });
            }
        }
        $message = "Montly Update mails has been send successfully";
        Log::notice($message);
        $this->info($message);
    }
}
