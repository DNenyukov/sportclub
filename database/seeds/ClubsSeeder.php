<?php


use App\Models\Clubs;
use Illuminate\Database\Seeder;

class ClubsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Clubs::class, 10)->create();
    }
}
