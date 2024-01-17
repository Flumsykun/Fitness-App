<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkoutSplit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller{

    public function profile()
    {
        // Return the user profile view
        return view('user.profile');
    }

    public function like(WorkoutSplit $split)
    {
        // Implement logic for liking a workout split
        auth()->user()->likedSplits()->attach($split);

        return redirect()->back();
    }

    public function dislike(WorkoutSplit $split)
    {
        // Implement logic for disliking a workout split
        auth()->user()->dislikedSplits()->detach($split);

        return redirect()->back();
    }

    public function requestPasswordReset()
    {
        // Return the request password reset view
        return view('forgot-password');
    }


    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);
        if (auth()->attempt(['name' => $validatedData['loginname'], 'password' => $validatedData['loginpassword']])) {
            $request->session()->regenerate();
        }
        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', ' min:3', 'max:255', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255'],

        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
        auth()->login($user);
        return redirect('/');

    }
}

