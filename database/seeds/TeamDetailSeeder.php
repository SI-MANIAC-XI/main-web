<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_details')->insert(
            ['team_id'=>'1' ,'name' => 'Wardi Halim', 'role'=>'Leader', 'phone_number'=>'0992 5481 984', 'email'=>'amelia02@yahoo.co.id','image'=>'id1.jpg']
        );

        DB::table('team_details')->insert(['team_id'=>'1' ,'name' => 'ElonS Saputra', 'role'=>'Member', 'phone_number'=>'0967 3637 998', 'email'=>'gantar.rahmawati@gmail.co.id','image'=>'id2.jpg']);
        DB::table('team_details')->insert(['team_id'=>'1' ,'name' => 'Rangga Putra', 'role'=>'Member', 'phone_number'=>'0627 4559 833', 'email'=>'rizki32@yahoo.co.id','image'=>'id3.jpg']);
    }
}
