<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
 public function assignRole(Request $request, $userId): \Illuminate\Http\RedirectResponse
 {
      //Validate the request

        $user = User::find($userId);
        $role = Role::find($request->input('role_id'));

        $user->role->associate($role);
        $user->save();


        return redirect()->route('users.index');
    }
}
