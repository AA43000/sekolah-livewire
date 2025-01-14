<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function prosesLogin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        try {
            $userCredentials = $request->only('email', 'password');

            if(Auth::attempt($userCredentials)) {
                return redirect('/');
            } else {
                return redirect('login')->with('error', 'Wrong Credentials');
            }
        } catch (\Exception $e) {
            return redirect('login')->with('error', $e->getMessage());
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('login');
    }
}
