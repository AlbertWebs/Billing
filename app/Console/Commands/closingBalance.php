<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Cash;
use App\Models\Expense;
use App\Models\Balance;
use Auth;
use DB;

class closingBalance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monthly:recordBalance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Record Closing Balance Every Month';

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
            // Income
            $CashTotal = Cash::whereMonth('created_at', date('m'))->where('campus' ,$Set->id)->sum('amount');
            // Expense
            $ExpenseTotal = Expense::whereMonth('created_at', date('m'))->where('campus' ,$Set->id)->sum('amount');
            // Balance
            $LastBalance  = Cash::where('campus' ,$Set->id)->latest()->limit('1 ')->get();
            foreach ($LastBalance as $key => $value) {
                $Balance = new Balance;
                $Balance->income = $CashTotal;
                $Balance->expenses = $ExpenseTotal;
                $Balance->campus = $Set->id;
                $Balance->balance = $value->balance;
                $Balance->month = date('M');
                $Balance->save();
            }
        }
        $this->info('Income Balance & Expense Have been logged in Successfully');
    }
}
