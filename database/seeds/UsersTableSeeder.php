<?php

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
                'id' => 1,
                'role_id' => 1,
                'name' => 'Injamamul Haque',
                'email' => 'injam.bd.jsr@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AM6noxNcEEVlfAQtxAqGEOmB3QwwDhy4GrApLT9bHIUS99iLbBZny',
                'remember_token' => 'fbjmkzW09J92mGjxXk8A1iO7bomi5SwBbSVblLktyf2rK6h7juAJgm2XWxrj',
                'settings' => NULL,
                'created_at' => '2020-04-04 12:35:18',
                'updated_at' => '2020-04-05 12:51:41',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Asif Uz Zaman',
                'email' => 'asif@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KOFm1W85thp.upwznv2z.OlE1BtRbOFiZjH1YJ6bOAAc82koSSQAa',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-04-05 12:55:12',
                'updated_at' => '2020-04-05 12:55:12',
            ),
        ));
        
        
    }
}