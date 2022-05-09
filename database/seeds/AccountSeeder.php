<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert(['username' => 'dani123', 'password'=>Hash::make('Password123')]);
        DB::table('accounts')->insert(['username' => 'danub', 'password'=>Hash::make('PasswordDani123')]);
    }
}
