<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_view()
    {
        if (auth()->check())
            return redirect('/');
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:191',
            'password' => 'required|string|max:191',
        ]);

        $admin = Admin::whereEmail($request->email)->where('blocked', '!=', 1)->first();

        if (!$admin) {
            $alert['type'] = 'danger';
            $alert['heading'] = 'login failed';
            $alert['message'] = 'invalid email or password';
            return redirect()->back()->with('alert', $alert);
        }

        if (!auth()->loginUsingId((password_verify($request->password, $admin->password)) ? $admin->id : 0)) {
            $alert['type'] = 'danger';
            $alert['heading'] = 'login failed';
            $alert['message'] = 'invalid email or password';
            return redirect()->back()->with('alert', $alert);
        }

        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }
}
