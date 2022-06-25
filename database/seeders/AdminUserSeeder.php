<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'name' => 'owner',
            'email' => 'owner@example.com',
            'password' => 12345678,
            'admin_level' => 1,
        ]);
        DB::table('admin_users')->insert([
            'name' => 'sub',
            'email' => 'sub@example.com',
            'password' => 12345678,
            'shop_id' => 1
        ]);
    }
}
