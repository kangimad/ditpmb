<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index ()
    {
        return view('frontend.pages.allauthor', [
            'title' => 'DITPMB',
            'subtitle' => 'Halaman User',
            'user' => User::all()
        ]);
    }

    public function show (User $user)
    {
        return view('frontend.pages.author', [
            'title' => 'DITPMB',
            'subtitle' => 'User',
            'user' => $user->name,
            'postingan' => $user->postingan
        ]);
    }
}
