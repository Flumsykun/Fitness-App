<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkoutSplitRequest;

class UserWorkoutSplitController extends Controller
{
    public function store(WorkoutSplitRequest $request){
        //request validated

        //retrieve the validated input data
        $validated = $request->validated();

        //Use the validated data to store a new workout split

    }
}
