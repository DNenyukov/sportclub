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
        $this -> call(ClubsSeeder::class);
        $this -> call(UsersSeeder::class);
        $this -> call(StocksSeeder::class);
        $this -> call(TrenersSeeder::class);
     
    }
}
