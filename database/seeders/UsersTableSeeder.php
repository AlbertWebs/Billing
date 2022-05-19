<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
            'avatar' => '188142773_2046856382119267_1706973228643307406_n (1).jpg',
                'created_at' => '2022-05-11 15:02:44',
                'email' => 'admin@atlascollege.ac.ke',
                'email_verified_at' => NULL,
                'id' => 1,
                'is_admin' => 1,
                'name' => 'Super Admin',
                'password' => '$2y$10$C3gxPTIR89w.GqsvN0vDpuqO.jfdFLulHDKRfszig7zZpmqkgezsG',
                'remember_token' => NULL,
                'updated_at' => '2022-05-11 15:02:44',
            ),
            1 => 
            array (
            'avatar' => '188142773_2046856382119267_1706973228643307406_n (1).jpg',
                'created_at' => '2022-05-11 15:02:44',
                'email' => 'user@atlascollege.ac.ke',
                'email_verified_at' => NULL,
                'id' => 2,
                'is_admin' => 0,
                'name' => 'Super Admin',
                'password' => '$2y$10$FdrFyMSkSL7zAWQyzbzPc.FXH7VQAPotBldO1Q55UHBcNbXzlwCwy',
                'remember_token' => NULL,
                'updated_at' => '2022-05-11 15:02:44',
            ),
            2 => 
            array (
            'avatar' => '188142773_2046856382119267_1706973228643307406_n (1).jpg',
                'created_at' => '2022-05-11 15:02:44',
                'email' => 'user@itsolutionstuff.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'is_admin' => 0,
                'name' => 'User',
                'password' => '$2y$10$b.soyyH2WFqhAOklFbgP1Opud6OS77xv3VHMA713R28kv0Y7.Qrvy',
                'remember_token' => NULL,
                'updated_at' => '2022-05-11 15:02:44',
            ),
            3 => 
            array (
            'avatar' => '188142773_2046856382119267_1706973228643307406_n (1).jpg',
                'created_at' => '2022-05-14 06:41:41',
                'email' => 'noelmbuya@gmail.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'is_admin' => 1,
                'name' => 'Noel Mbuya',
                'password' => 'password',
                'remember_token' => NULL,
                'updated_at' => '2022-05-14 06:41:41',
            ),
        ));
        
        
    }
}