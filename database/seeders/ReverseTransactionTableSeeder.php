<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReverseTransactionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reverse_transaction')->delete();
        
        
        
    }
}