<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 'Dalam Proses',
            ),
            1 => 
            array (
                'id' => 2,
                'status' => 'Barang Terkirim',
            ),
        ));
        
        
    }
}