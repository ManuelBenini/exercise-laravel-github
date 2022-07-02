<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Robot;
use Faker\Generator as Faker;

class RobotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $robots = Robot::all();
        return view('robots.index', compact('robots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('robots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Faker $faker)
    {
        $new_data = $request->all();

        $new_robot = new Robot();

        $new_robot->robot_id = $faker->regexify('[A-Z]{5}[0-9]{4}');

        $new_robot->fill($new_data);

        $new_robot->save();

        return redirect()->route('robot.show', $new_robot->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $robot = Robot::find($id);

        return view('robots.show', compact('robot'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $robot = Robot::find($id);
        return view('robots.edit', compact('robot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Robot $robot)
    {
        $update_robot = $request->all();

        $robot->update($update_robot);

        return redirect()->route('robot.show', $robot->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Robot $robot)
    {
        $robot->delete();

        return redirect()->route('robot.index');
    }
}
