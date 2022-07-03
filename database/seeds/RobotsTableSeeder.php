<?php

use Illuminate\Database\Seeder;
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
        $robots = config('robots');
        foreach ($robots as $robot) {
            $new_robot = new Robot();
            $new_robot->name = $robot->name;
            $new_robot->production_date = $robot->production_date;
            $new_robot->description = $robot->description;
            $new_robot->image = $robot->image;
            $new_robot->robot_id = $robot->robot_id;
            $new_robot->nuke_Available = $robot->nuke_Available;
            $new_robot->save();
        }
        

    }
}
