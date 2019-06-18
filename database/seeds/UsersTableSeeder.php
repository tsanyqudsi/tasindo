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
                'name' => 'Muhammad Tsany Qudsi',
                'email' => 'tsanyqudsi@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nvfAIFCB6ejgog/bldbf/er8fwtGDcr4Nd.8loMo.UrayDEf0a/s2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2019-06-16 23:32:20',
                'updated_at' => '2019-06-16 23:32:21',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Test',
                'email' => 'test@test.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UG8JDEsXtVq2vmQiTDRAyOPIUmbXiWGeyjKkF4xOdrcIstZtEmM.C',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2019-06-19 05:09:46',
                'updated_at' => '2019-06-19 05:09:46',
            ),
        ));
        
        
    }
}