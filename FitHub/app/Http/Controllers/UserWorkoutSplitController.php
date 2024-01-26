<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkoutSplitRequest;
use Illuminate\Validation\Validator;
use Illuminate\Http\RedirectResponse;
use App\Models\Split;

class UserWorkoutSplitController extends Controller
{
    //..
    public function create()
    {
//        return view('users.workout-splits.create');
        return view('user.split.request');
    }
    /**
     * Store a new workout split for the user.
     */
    public function store(WorkoutSplitRequest $request): RedirectResponse
    {
        //incoming request is validated by WorkoutSplitRequest

        //Retrieve the validated input data
        $validated = $request->validated();

        Split::create($validated);

        //Store the workout split...

        return redirect('/user/split/request');
    }
}
