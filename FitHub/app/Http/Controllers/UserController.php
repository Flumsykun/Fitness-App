<?php
namespace App\Http\Controllers;

use App\Models\WorkoutSplit;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function like(WorkoutSplit $split)
    {
        auth()->user()->likedSplits()->attach($split);

        return redirect()->back();
    }
    public function dislike(WorkoutSplit $split)
    {
        auth()->user()->dislikedSplits()->detach($split);

        return redirect()->back();
    }
}
