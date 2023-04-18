<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 👇 index() retrieves a list of all users. //
    public function index()
    {
        $users = User::all();
        return response()->json(['users' => $users]);
    }
    // 👇 store(Request $request) creates a new user using the data //
    // from the request //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email_address' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        return response()->json(['user' => $user], 201);
    }
    // 👇 show(User $user) retrieves a specific user. //
    public function show(User $user)
    {
        return response()->json(['user' => $user]);
    }
    // 👇 update(Request $request, User $user): Updates a specific user with //
    // data from the request //
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'email_address' => 'email|unique:users,email_address,' . $user->id,
            'password' => 'min:8',
        ]);

        if (isset($validated['email_address'])) {
            $user->email_address = $validated['email_address'];
        }

        if (isset($validated['email_address'])) {
            $user->email_address = $validated['email_address'];
        }

        if(isset($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }

        $user->save();

        return response()->json(['user' => $user]);
    }
    // 👇 destroy(User $user): Deletes a specific user. //
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }

}
