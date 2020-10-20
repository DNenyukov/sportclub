<?php


use App\Models\Treners;
use Illuminate\Database\Seeder;

class TrenersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Treners::class, 40)->create();
    }
}
