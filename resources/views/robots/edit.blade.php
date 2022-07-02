@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Edit {{ $robot->name }}</h1>

    <form action="{{ route('robot.update', $robot) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="robot_name" class="form-label">Robot Name:</label>
            <input type="text" class="form-control" id="robot_name" placeholder="Whats the robots name?" name="name" value="{{ $robot->name }}">
        </div>

        <div class="mb-3">
            <label for="production_date" class="form-label">Date of production:</label>
            <input type="date" class="form-control" id="production_date" name="production_date" value="{{ $robot->production_date }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Robot Description:</label>
            <textarea class="form-control" id="description" rows="3" name="description" placeholder="Give us a brief description of the robot">{{ $robot->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $robot->image }}">
        </div>

        <div class="mb-3">
            <label for="included" class="form-label">Nuke included</label>
            <input type="radio" class="me-3" id="included" name="nuke_Available" value="1" {{ $robot->nuke_Available ? 'checked' : '' }}>

            <label for="not_included" class="form-label">Nuke not included</label>
            <input type="radio" class="" id="not_included" name="nuke_Available" value="0" {{ !$robot->nuke_Available ? 'checked' : '' }}>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
