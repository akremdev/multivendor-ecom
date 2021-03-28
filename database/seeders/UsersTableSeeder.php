<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'full_name' => 'Akrem Gharbi',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('akrem123@'),
                'role' => 'admin',
                'status' => 'active',
            ],
            [
                'full_name' => 'Ahmed Gharbi',
                'username' => 'Vendor',
                'email' => 'ahmed@gmail.com',
                'password' => Hash::make('ahmed123@'),
                'role' => 'vendor',
                'status' => 'active',
            ],
            [
                'full_name' => 'Jalloul Gharbi',
                'username' => 'Customer',
                'email' => 'jalloul@gmail.com',
                'password' => Hash::make('jalloul123@'),
                'role' => 'customer',
                'status' => 'active',
            ],
        ]);
    }
}
