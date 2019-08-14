<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collections\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user);
    }

    public function edit($userId)
    {
        $user = User::find($userId);
        return response()->json($user);
    }

    public function update(Request $request, $userId)
    {
        $user = User::find($userId);

        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->save();

        return response()->json($user);
    }

    public function destroy($userId)
    {
        $user = User::find($userId);
        $user->delete();

        return response()->json(array("message" => "User deleted"));
    }
}
