<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home', [
            'title' => 'Sastri Blog',
            'active' => 'Home',
            'subtitle' => 'Home'
        ]);
    }

    public function about()
    {
        return view('frontend.pages.about', [
            'title' => 'Sastri Blog',
            'active' => 'About',
            'subtitle' => 'About'
        ]);
    }
}
