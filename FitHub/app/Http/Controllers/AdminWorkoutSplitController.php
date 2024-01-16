<?php
namespace App\Http\Controllers;

use App\Models\WorkoutSplit;

use Illuminate\Http\Request;

class AdminWorkoutSplitController extends Controller{
    public function create(){
        return view ('admin.workout-split.create');
    }
    public function store(Request $request)
    {
        //Validation logic comes here
        return redirect()->route('admin.dashboard');
    }
    public function edit(WorkoutSplit $split)
    {
    return view('admin.workout-split.edit', compact('split'));
    }
    public function update(Request $request, WorkoutSplit $split){
        //Validation and update  logic comes here
        return redirect()->route('admin.dashboard');
    }
    public function delete(WorkoutSplit $split)
    {
        $split->delete();

        return redirect()->route('admin.dashboard');
    }

}
