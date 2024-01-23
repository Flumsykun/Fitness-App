@extends('layouts.app')

@section('title', 'FitHub')

@section('body_class', 'bg-gray-50 dark:bg-gray-900')
@section('content')

    <header class="text-center py-8">
        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white">Welcome to FitHub</h1>
        <!-- Add any additional header content or navigation links -->
    </header>
    <form method="POST" action="{{ route('user.workout-split.store') }}">
        @csrf
        <div class="form-group">
            <label for="workout_name">Workout Name</label>
            <input type="text" class="form-control" id="workout_name" name="workout_name" required>
        </div>
        <div class="form-group">
            <label for="workout_description">Workout Description</label>
            <textarea class="form-control" id="workout_description" name="workout_description" required></textarea>
        </div>
        <!-- Add more fields as needed -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
