<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-06-16 23:31:53',
                'updated_at' => '2019-06-16 23:31:53',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-06-16 23:31:53',
                'updated_at' => '2019-06-16 23:31:53',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-06-16 23:31:54',
                'updated_at' => '2019-06-16 23:31:54',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-16 23:31:55',
                'updated_at' => '2019-06-16 23:31:55',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-06-16 23:31:57',
                'updated_at' => '2019-06-16 23:31:57',
            ),
            26 => 
            array (
                'id' => 32,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2019-06-18 15:46:16',
                'updated_at' => '2019-06-18 15:46:16',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2019-06-18 15:46:16',
                'updated_at' => '2019-06-18 15:46:16',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2019-06-18 15:46:16',
                'updated_at' => '2019-06-18 15:46:16',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2019-06-18 15:46:16',
                'updated_at' => '2019-06-18 15:46:16',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2019-06-18 15:46:16',
                'updated_at' => '2019-06-18 15:46:16',
            ),
        ));
        
        
    }
}