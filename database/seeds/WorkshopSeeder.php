<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshops')->insert(['name'=>'Workshop Game Concept Design', 'date'=>'2022-08-27']);
        DB::table('workshops')->insert(['name'=>'Workshop Game Asset Design', 'date'=>'2022-08-28']);
    }
}
