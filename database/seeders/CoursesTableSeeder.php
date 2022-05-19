<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'created_at' => '2022-05-04 11:04:06',
                'id' => 1,
                'price' => 95400,
                'school' => 2,
                'title' => 'Nuclear Sciences',
                'updated_at' => '2022-05-04 11:04:06',
            ),
            1 => 
            array (
                'created_at' => '2022-05-04 11:05:12',
                'id' => 2,
                'price' => 60800,
                'school' => 2,
                'title' => 'Classical Mechanics',
                'updated_at' => '2022-05-04 11:05:12',
            ),
            2 => 
            array (
                'created_at' => '2022-05-04 11:05:35',
                'id' => 3,
                'price' => 50900,
                'school' => 3,
                'title' => 'Computer Technology',
                'updated_at' => '2022-05-04 11:05:35',
            ),
            3 => 
            array (
                'created_at' => '2022-05-04 11:05:53',
                'id' => 4,
                'price' => 200690,
                'school' => 4,
                'title' => 'Quantum Physics',
                'updated_at' => '2022-05-04 11:05:53',
            ),
            4 => 
            array (
                'created_at' => '2022-05-04 11:06:19',
                'id' => 5,
                'price' => 198200,
                'school' => 5,
                'title' => 'Mechatronic Engineering',
                'updated_at' => '2022-05-04 11:06:19',
            ),
            5 => 
            array (
                'created_at' => '2022-05-04 12:04:31',
                'id' => 7,
                'price' => 45000,
                'school' => 5,
                'title' => 'Tailoring',
                'updated_at' => '2022-05-04 12:04:31',
            ),
            6 => 
            array (
                'created_at' => '2022-05-11 18:12:59',
                'id' => 8,
                'price' => 210000,
                'school' => 5,
                'title' => 'Meteorology',
                'updated_at' => '2022-05-11 18:12:59',
            ),
        ));
        
        
    }
}