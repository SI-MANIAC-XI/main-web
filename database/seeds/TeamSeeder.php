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
        DB::table('teams')->insert(['account_id'=>'1' ,'team_name' => 'Pasti Menang', 'school_name'=>'Sekolah Jaya', 'school_address'=>'123 Street', 'school_number'=>'081222222']);
    }
}
