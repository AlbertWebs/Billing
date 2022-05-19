<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'created_at' => '2022-05-13 09:45:41',
                'id' => 1,
                'title' => 'School of Business Studies',
                'updated_at' => '2022-05-13 09:45:41',
            ),
            1 => 
            array (
                'created_at' => '2022-05-13 09:46:51',
                'id' => 2,
                'title' => 'School of ICT',
                'updated_at' => '2022-05-13 09:46:51',
            ),
            2 => 
            array (
                'created_at' => '2022-05-13 09:48:28',
                'id' => 3,
                'title' => 'School of English Language',
                'updated_at' => '2022-05-13 09:48:28',
            ),
            3 => 
            array (
                'created_at' => '2022-05-13 09:49:10',
                'id' => 4,
                'title' => 'School of Tailoring Skills',
                'updated_at' => '2022-05-13 09:49:10',
            ),
            4 => 
            array (
                'created_at' => '2022-05-13 09:49:29',
                'id' => 5,
                'title' => 'School of IGCSE',
                'updated_at' => '2022-05-13 09:49:29',
            ),
        ));
        
        
    }
}