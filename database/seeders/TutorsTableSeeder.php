<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TutorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tutors')->delete();
        
        \DB::table('tutors')->insert(array (
            0 => 
            array (
                'address' => 'nairobi',
                'created_at' => NULL,
                'email' => 'alberttutors@gmail.com',
                'gender' => 'Male',
                'id' => 1,
                'mobile' => '0790841987',
                'name' => 'Albert Tutorials',
                'status' => '1',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'address' => 'nairobi',
                'created_at' => NULL,
                'email' => 'teachertutors@gmail.com',
                'gender' => 'Male',
                'id' => 2,
                'mobile' => '0786644148',
                'name' => 'Muhatia Tutora',
                'status' => '1',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'address' => 'Address',
                'created_at' => '2022-05-04 11:45:54',
                'email' => 'kimomondi@gmail.com',
                'gender' => 'Male',
                'id' => 3,
                'mobile' => '0723014032',
                'name' => 'Kim Omondi',
                'status' => '1',
                'updated_at' => '2022-05-04 11:45:54',
            ),
        ));
        
        
    }
}