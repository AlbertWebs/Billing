<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaction_status')->delete();
        
        
        
    }
}