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
    public function run(Faker $faker)
    {
        for($i = 0; $i < 25; $i++){
            $new_robot = new Robot();
            $new_robot->name = $faker->domainWord();
            $new_robot->production_date = $faker->date();
            $new_robot->description = $faker->text(150);
            $new_robot->robot_id = $faker->regexify('[A-Z]{5}[0-9]{4}');
            $new_robot->nuke_Available = $faker->boolean();
            $new_robot->save();
        }
    }
}
