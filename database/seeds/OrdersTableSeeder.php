<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_badge' => 190600001,
                'third_party_receipt_number' => 321321,
                'admin_receipt_number' => NULL,
                'courier' => 2,
                'sender_data' => 1,
                'dropship_data' => '321321321321',
                'receiver_data' => '321321321',
                'product_data' => '321321',
                'description' => '321321',
                'status' => 1,
                'created_at' => '2019-06-19 05:50:36',
                'updated_at' => '2019-06-19 05:50:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'order_badge' => 190600002,
                'third_party_receipt_number' => 312321,
                'admin_receipt_number' => NULL,
                'courier' => 2,
                'sender_data' => 1,
                'dropship_data' => '32132132',
                'receiver_data' => '321321',
                'product_data' => '321321321',
                'description' => '321321321',
                'status' => 1,
                'created_at' => '2019-06-19 05:51:16',
                'updated_at' => '2019-06-19 05:51:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'order_badge' => 190600003,
                'third_party_receipt_number' => 321321,
                'admin_receipt_number' => NULL,
                'courier' => 1,
                'sender_data' => 1,
                'dropship_data' => '321312321',
                'receiver_data' => '321321',
                'product_data' => '321321',
                'description' => '321321',
                'status' => 1,
                'created_at' => '2019-06-19 05:54:41',
                'updated_at' => '2019-06-19 05:54:41',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'order_badge' => 190600004,
                'third_party_receipt_number' => 321432432,
                'admin_receipt_number' => NULL,
                'courier' => 1,
                'sender_data' => 1,
                'dropship_data' => '321321',
                'receiver_data' => '32132131312',
                'product_data' => '3213213211',
                'description' => '321321',
                'status' => 1,
                'created_at' => '2019-06-19 06:02:13',
                'updated_at' => '2019-06-19 06:02:13',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'order_badge' => 190600005,
                'third_party_receipt_number' => 321321,
                'admin_receipt_number' => NULL,
                'courier' => 3,
                'sender_data' => 1,
                'dropship_data' => '321321321111',
                'receiver_data' => '3132131',
                'product_data' => '321321',
                'description' => '321321',
                'status' => 1,
                'created_at' => '2019-06-19 06:02:28',
                'updated_at' => '2019-06-19 06:02:28',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'order_badge' => 190600006,
                'third_party_receipt_number' => NULL,
                'admin_receipt_number' => NULL,
                'courier' => 2,
                'sender_data' => 1,
                'dropship_data' => '321321321',
                'receiver_data' => '321321321',
                'product_data' => '3213121211',
                'description' => '321321321',
                'status' => 1,
                'created_at' => '2019-06-19 06:02:39',
                'updated_at' => '2019-06-19 06:02:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}