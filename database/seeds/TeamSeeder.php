<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(['account_id'=>'1' ,'team_name' => 'Pasti Menang', 'school_name'=>'Sekolah Jaya']);
    }
}
