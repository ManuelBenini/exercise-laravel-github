@extends('layouts.main')

@section('content')
<h1>Our Robots</h1>
<div class="container">
    <div class="row row-cols-5">
        @foreach ($robots as $robot)
        <div class="col m-3 cella">
            <div class="card" style="width: 18rem;">
                <img src="{{ $robot->image }}" class="card-img-top" alt="{{ $robot->name }}">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{ $robot->name }}</h5>
                    <p class="card-text">{{ $robot->description }}</p>
                    <div>
                        <a href="{{ route('robot.show', $robot) }}" class="btn btn-success">Details</a>
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
        @endforeach
    </div>
</div>

@endsection
