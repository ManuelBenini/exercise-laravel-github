@extends('layouts.main')

@section('content')

<div class="container">
    <h1>{{ $robot->name }}</h1>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card mb-3">
                <img src="{{ $robot->image }}" class="card-img-top" alt="{{ $robot->name }}">
                <div class="card-body">
                    <h5 class="card-title">ID: <br>{{ $robot->robot_id }}</h5>
                    <p class="card-text">Description: <br>{{ $robot->description }}</p>
                    {{-- AGGIUNGERE RADIO BTN PER NUKE PRESENTE O MENO --}}
                    <a href="{{ route('robot.index') }}" class="btn btn-success"><< Back</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <form class="d-inline" action="{{ route('robot.destroy' , $robot) }}" method="POST" onsubmit="return confirm('Is this model really obsolete?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
