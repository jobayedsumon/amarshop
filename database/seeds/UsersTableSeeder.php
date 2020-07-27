<?php

use Illuminate\Database\Seeder;
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
            'name' => 'Amar Shop',
            'email' => 'admin@amarshop.com.bd',
            'email_verified_at' => now(),
            'password' => bcrypt('admin.amarshop'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
