<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        return view('user.dashboard', compact('user'));
    }

    public function templates()
    {
        $user = Auth::user();

        return view('user.templates', compact('user'));
    }

    public function resumeForm($template)
    {
        $user = Auth::user();

        return view('user.resume-form', compact('user', 'template'));
    }
}