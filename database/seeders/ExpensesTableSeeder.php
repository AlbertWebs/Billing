<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExpensesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('expenses')->delete();
        
        \DB::table('expenses')->insert(array (
            0 => 
            array (
                'amount' => '1000',
                'balance' => '96400',
                'created_at' => '2022-05-19 09:27:58',
                'date' => '2022-05-19 12:27:58',
                'id' => 1,
                'reason' => 'Petty Cash',
                'updated_at' => '2022-05-19 09:27:58',
                'user' => '1',
            ),
            1 => 
            array (
                'amount' => '96500',
                'balance' => '-100',
                'created_at' => '2022-05-19 09:31:15',
                'date' => '2022-05-19 12:31:15',
                'id' => 2,
                'reason' => 'To the bank',
                'updated_at' => '2022-05-19 09:31:15',
                'user' => '1',
            ),
        ));
        
        
    }
}