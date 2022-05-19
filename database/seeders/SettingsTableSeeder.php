<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'created_at' => '2022-05-11 06:06:24',
                'email' => 'atlaseducationalcentre@gmail.com',
                'id' => 1,
                'location' => '7th Floor, Al Habib Building, 4th Street',
            'logo' => 'atlascollege-logo (1).jpg',
                'mobile' => '+254741363089',
                'name' => 'Atlas Educational Centers',
                'updated_at' => '2022-05-11 06:06:24',
            ),
        ));
        
        
    }
}