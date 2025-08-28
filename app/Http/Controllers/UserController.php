<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth; // ✅ Add this line

use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $incomingfields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (Auth::attempt(['name' => $incomingfields['loginname'], 'password' => $incomingfields['loginpassword']])) {

            $request->session()->regenerate();
        }
        return view('userhome');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function register(Request $request)
    {
        $incomingfields = $request->validate([
            'name' => ['required', 'min:3', 'max:20', Rule::unique('users', 'name')],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:20']
        ]);
        $incomingfields['password'] = bcrypt($incomingfields['password']);

        $user = User::create($incomingfields);

        Auth::login($user);
        return redirect('/form');
    }
}
