<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkoutSplitRequest;

class UserWorkoutSplitController extends Controller
{
    public function show()
    {
        return view('user.split.request');
    }

    public function store(WorkoutSplitRequest $request)
    {
        //Validation logic comes here
        return redirect()->route('user.dashboard');
    }

}
