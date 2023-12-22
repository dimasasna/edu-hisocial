<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {

        return view("dashboard.register", [
            "title" => "Dashboard | Register",
            'logo' => 'assets/img/logo-hisocial.png',
            'users' => User::orderBy('last_seen','DESC')->filter(request(['search']))->paginate(5)
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
        ]);


        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);


        return redirect('/register')->with('success', 'Success Register User');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/register')->with('success', 'Success Delete User');
    }
}
