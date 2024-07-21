<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function create()
    {
        return view('login');
    }

    public function username()
    {
        return 'username';
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->only('no_hp', 'password');
        $validator = Validator::make($credentials, [
            'no_hp' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back();
    }
}
