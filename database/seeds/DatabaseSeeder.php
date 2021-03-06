<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(CouriersTableSeeder::class);
        // $this->call(DataRowsTableSeeder::class);
        // $this->call(DataTypesTableSeeder::class);
        // $this->call(PermissionsTableSeeder::class);
        // $this->call(PermissionRoleTableSeeder::class);
        // $this->call(OrdersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
