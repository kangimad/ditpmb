<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('frontend.pages.allkategori', [
            'title' => 'Sastri Blog',
            'active' => 'Kategori',
            'subtitle' => 'Kategori',
            'kategori' => Kategori::with(['postingan'])->get()
        ]);
    }

    public function show(Kategori $kategori)
    {
        return view('frontend.pages.kategori', [
            'title' => 'Sastri Blog',
            'active' => 'Kategori',
            'subtitle' => 'Kategori',
            'kategori' => $kategori->nama,
            'postingan' => $kategori->postingan->load(['kategori', 'author'])
        ]);
    }
}
