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
            'name' => 'required|string|max:255',
            'email_address' => 'required|email|unique:users',
        ]);

    // 👇 create a new user instance and populate it with the request data //

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;

        // 🙃 save the user to the database
        $user->save();
        // 👇 Return the newly created user as a JSON response with a 201 status //
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
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:users,email,' . $user->id,
        ]);

        if (isset($validated['name'])) {
            $user->name = $validated['name'];
        }

        if(isset($validated['email'])) {
            $user->email = $validated['email'];
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
