<?php

use Illuminate\Database\Seeder;
use TeamsSeeder;
use PlayerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            TeamsSeeder::class,
            PlayerSeeder::class
            ]);
    }
}
