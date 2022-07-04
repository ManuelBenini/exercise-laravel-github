@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Our Robots</h1>
    <div class="row row-cols-4">
        @foreach ($robots as $robot)
        <div class="col m-3 cella">
            <div class="card" style="width: 18rem;">
                <img src="{{ $robot->image }}" class="card-img-top" alt="{{ $robot->name }}">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">{{ $robot->name }}</h5>
                    <p class="card-text">{{ $robot->description }}</p>
                    @if($robot->nuke_Available)
                        <p>A handy-dandy NUKE comes in clutch with this model!</p>
                    @else
                        <p>Unfortunately this model does not support a NUKE at the moment.</p>
                    @endif
                    <div>
                        <a href="{{ route('robot.show', $robot) }}" class="btn btn-success">Details</a>
                        <a href="{{ route('robot.edit', $robot) }}" class="btn btn-primary">Edit</a>

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
