<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CashesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cashes')->delete();
        
        \DB::table('cashes')->insert(array (
            0 => 
            array (
                'amount' => '90000',
                'balance' => '90000',
                'code' => 'M-PESA',
                'created_at' => '2022-05-19 09:24:25',
                'date' => '2022-05-19 12:24:25',
                'id' => 1,
                'reason' => 'School Fees Paid By Edward Odinga, Paying For Nuclear Sciences',
                'source' => 'M-PESA',
                'updated_at' => '2022-05-19 09:24:25',
                'user' => '1',
            ),
            1 => 
            array (
                'amount' => '3400',
                'balance' => '93400',
                'code' => 'M-PESA',
                'created_at' => '2022-05-19 09:25:18',
                'date' => '2022-05-19 12:25:18',
                'id' => 2,
                'reason' => 'School Fees Paid By Edward Odinga, Paying For Nuclear Sciences',
                'source' => 'M-PESA',
                'updated_at' => '2022-05-19 09:25:18',
                'user' => '1',
            ),
            2 => 
            array (
                'amount' => '4000',
                'balance' => '97400',
                'code' => 'M-PESA',
                'created_at' => '2022-05-19 09:25:43',
                'date' => '2022-05-19 12:25:43',
                'id' => 3,
                'reason' => 'School Fees Paid By Edward Odinga, Paying For Nuclear Sciences',
                'source' => 'M-PESA',
                'updated_at' => '2022-05-19 09:25:43',
                'user' => '1',
            ),
            3 => 
            array (
                'amount' => '-1000',
                'balance' => '96400',
                'code' => 'N/A',
                'created_at' => '2022-05-19 09:27:58',
                'date' => '2022-05-19 12:27:58',
                'id' => 4,
                'reason' => 'Petty Cash',
                'source' => 'Admin Initiated',
                'updated_at' => '2022-05-19 09:27:58',
                'user' => '1',
            ),
            4 => 
            array (
                'amount' => '-96500',
                'balance' => '-100',
                'code' => 'N/A',
                'created_at' => '2022-05-19 09:31:15',
                'date' => '2022-05-19 12:31:15',
                'id' => 5,
                'reason' => 'To the bank',
                'source' => 'Admin Initiated',
                'updated_at' => '2022-05-19 09:31:15',
                'user' => '1',
            ),
        ));
        
        
    }
}