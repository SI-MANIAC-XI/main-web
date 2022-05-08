<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert(['username' => 'dani123', 'password'=>'Contoh123']);
        DB::table('accounts')->insert(['username' => 'danub', 'password'=>'Contoh123Danub']);
    }
}
