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
                    <a href="{{ route('robot.index') }}" class="btn btn-primary"><< Back</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
