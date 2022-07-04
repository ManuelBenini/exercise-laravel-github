@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Add a Prototype</h1>
    <p>In this section you are free to give us a suggestion on what type of robot you'd like to see! <br>
    Set your imagination free!</p>

    <form action="{{ route('robot.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="robot_name" class="form-label">Robot Name:</label>
            <input type="text" class="form-control" id="robot_name" placeholder="Whats the robots name?" name="name">
        </div>

        <div class="mb-3">
            <label for="production_date" class="form-label">Date of production:</label>
            <input type="date" class="form-control" id="production_date" name="production_date">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Robot Description:</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="Give us a brief description of the robot"></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>

        <div class="mb-3">
            <label for="included" class="form-label">Nuke included</label>
            <input type="radio" class="me-3" id="included" name="nuke_Available" value="1">

            <label for="not_included" class="form-label">Nuke not included</label>
            <input type="radio" class="" id="not_included" name="nuke_Available" value="0">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
