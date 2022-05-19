<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BillingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('billings')->delete();
        
        \DB::table('billings')->insert(array (
            0 => 
            array (
                'amount' => 90000,
                'balance' => 5400,
                'course_id' => 1,
                'created_at' => '2022-05-19 09:24:26',
                'description' => 'Nuclear Science - Edward Odinga Admision',
                'due' => '2022-05-19 12:24:26',
                'group_id' => 'AEC-03',
                'group_role' => 'child',
                'id' => 1,
                'note' => 'Thank you for choosing Atlas Educational Center',
                'original_payment' => 'AEC-01',
                'paid' => 'Partially Paid',
                'reference' => 'AEC-01',
                'student' => '1',
                'title' => 'Nuclear Sciences',
                'updated_at' => '2022-05-19 09:24:26',
            ),
            1 => 
            array (
                'amount' => 3400,
                'balance' => 2000,
                'course_id' => 1,
                'created_at' => '2022-05-19 09:25:18',
                'description' => 'Nuclear Science - Edward Odinga Admision',
                'due' => '2022-05-19 12:25:18',
                'group_id' => 'AEC-03',
                'group_role' => 'child',
                'id' => 2,
                'note' => 'Thank you for choosing Atlas Educational Center',
                'original_payment' => 'AEC-01',
                'paid' => 'Partially Paid',
                'reference' => 'AEC-02',
                'student' => '1',
                'title' => 'Nuclear Sciences',
                'updated_at' => '2022-05-19 09:25:18',
            ),
            2 => 
            array (
                'amount' => 4000,
                'balance' => -2000,
                'course_id' => 1,
                'created_at' => '2022-05-19 09:25:43',
                'description' => 'Nuclear Science - Edward Odinga Admision',
                'due' => '2022-05-19 12:25:43',
                'group_id' => NULL,
                'group_role' => 'parent',
                'id' => 3,
                'note' => 'Thank you for choosing Atlas Educational Center',
                'original_payment' => 'AEC-01',
                'paid' => 'Paid',
                'reference' => 'AEC-03',
                'student' => '1',
                'title' => 'Nuclear Sciences',
                'updated_at' => '2022-05-19 09:25:43',
            ),
        ));
        
        
    }
}