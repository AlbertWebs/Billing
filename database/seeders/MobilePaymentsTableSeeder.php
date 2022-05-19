<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MobilePaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mobile_payments')->delete();
        
        \DB::table('mobile_payments')->insert(array (
            0 => 
            array (
                'BillRefNumber' => '2',
                'BusinessShortCode' => '603421',
                'created_at' => '2021-05-03 18:20:50',
                'FirstName' => 'John',
                'InvoiceNumber' => '',
                'LastName' => 'Doe',
                'lastUpdate' => '2021-05-03 07:20:50',
                'MiddleName' => '',
                'MSISDN' => '254708374149',
                'OrgAccountBalance' => '49197.00',
                'status' => 0,
                'ThirdPartyTransID' => '',
                'TransactionType' => '',
                'TransAmount' => 10.0,
                'TransID' => 'U49DYMLXAG',
                'transLoID' => 1,
                'TransTime' => '20210503142050',
                'updated_at' => '2021-05-03 18:20:50',
                'user_id' => 2,
            ),
        ));
        
        
    }
}