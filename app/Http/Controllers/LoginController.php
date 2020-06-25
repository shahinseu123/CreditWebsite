<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest');
    }
    public function login_page()
    {
        return view("front_end.login");
    }

    public function login_action(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            // 'g-recaptcha-response' => 'required|captcha'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('errmsg', 'Inconrrect email or password');
        }
    }
}
