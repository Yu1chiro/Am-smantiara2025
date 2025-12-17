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
                'id' => 1,
                'name' => 'Am',
                'email' => 'am-smantiara@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$TKj.LSX.3UBQ5tjdzDVX2eEsdqIXmAp5gNhncdtgoOTb32hlKwfPS',
                'remember_token' => NULL,
                'created_at' => '2025-12-17 01:46:59',
                'updated_at' => '2025-12-17 01:46:59',
            ),
        ));
        
        
    }
}