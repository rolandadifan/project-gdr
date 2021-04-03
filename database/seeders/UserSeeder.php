<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'super admin',
            'email' => 'superadmin@admin.com',
            'password' => Hash::make('sadmin'),
            'telephone' => '8777677',
            'role' => 'sadmin'
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'telephone' => '8777677',
            'role' => 'admin'
        ]);
    }
}
