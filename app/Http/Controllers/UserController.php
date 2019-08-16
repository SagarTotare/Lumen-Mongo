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

    public function validateUser(Request $request)
    {
        $pw = $request->password;
        $oldPassword = '$2y$10$xFrPm5KNEC/CEISEZC5Hn.UFs2vKnRfh6k2ntcd5wYFxUeA/LqxTC';
        var_dump(app()->make('hash')->check($pw, $oldPassword));
    }

    public function store(Request $request)
    {
        $hasher = app()->make('hash');

        $user = User::create(array(
            "name" => $request->name,
            "mobile" => $request->mobile,
            "email" => $request->email,
            "password" => $hasher->make($request->password),
        ));

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
