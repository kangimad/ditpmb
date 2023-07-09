<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Postingan;

class PostinganController extends Controller
{
    public function index()
    {
        // $postingan = Postingan::latest(); // nampilke postingan terakhir

        // if (request('search')) { // nek ono pencarian sek diinput maka pencariane ditangkep terus nampilke judul sek sesuai ro pencarian
        //     $postingan->where('judul', 'like', '%' . request('search') . '%');
        // }  // nek raono pencarian, langsung tampilke kabeh berdasarkan sek paling baru

        return view('frontend.pages.allpostingan', [
            'title' => 'Sastri Blog',
            'active' => 'Postingan',
            'subtitle' => 'Postingan',
            // 'postingan' => Postingan::all()
            'postingan' => Postingan::latest()->filter()->paginate(7)
        ]);
    }

    public function show(Postingan $postingan)
    {
        return view('frontend.pages.postingan', [
            'title' => 'Sastri Blog',
            'active' => 'Postingan',
            'subtitle' => 'Detail Postingan',
            'postingan' => $postingan
        ]);
    }

}
