<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TeamDetailSeeder::class);
        $this->call(WorkshopSeeder::class);
    }
}
