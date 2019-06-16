<?php

use Illuminate\Database\Seeder;

class CouriersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('couriers')->delete();
        
        \DB::table('couriers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'courier' => 'JNE REG',
            ),
            1 => 
            array (
                'id' => 2,
                'courier' => 'JNE OKE',
            ),
            2 => 
            array (
                'id' => 3,
                'courier' => 'JNE YES',
            ),
            3 => 
            array (
                'id' => 4,
                'courier' => 'POS KILAT KHUSUS',
            ),
            4 => 
            array (
                'id' => 5,
                'courier' => 'POS EXPRESS',
            ),
            5 => 
            array (
                'id' => 6,
                'courier' => 'JNT EXPRESS',
            ),
        ));
        
        
    }
}