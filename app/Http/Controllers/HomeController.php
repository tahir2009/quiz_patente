<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        if (auth()->check() and auth()->user()->type === 'admin')
            return redirect('admin');
        else if (auth()->check() and auth()->user()->type === 'school')
            return redirect('school');
        else
            return redirect('login');

    }
}
