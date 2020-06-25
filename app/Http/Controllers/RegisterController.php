<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest');
    }
    public function register_page()
    {
        return view("front_end.register");
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'number' => 'required|unique:users,number',
            'address' => 'required',
            'password' => 'required|min:8',
            // 'g-recaptcha-response' => 'required|captcha'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = $request->address;
        //   if(auth()->user()){

        //   }
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('dashboard');
            } else {
                redirect()->back()->with('errmsg', 'Registration is not successfull');
            }
        }
    }
}
