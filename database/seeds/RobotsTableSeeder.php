<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Robot;

class RobotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run(Faker $faker)
    public function run()
    {
        $data = config('robots');
        // $new_robot = new Robot();
        dump($data);

        $data->save();
    }
}
