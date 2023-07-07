<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        return view('backend.santri.index', [
            'title' => 'Santri',
            'subtitle' => 'Data Semua Santri',
            'santris' => Santri::paginate(5)
        ]);
    }

    public function create()
    {
        return view('backend.santri.create', [
            'title' => 'Santri',
            'subtitle' => 'Tambah Data Santri',
        ]);
    }

    public function show($id)
    {
        return view('backend.santri.detail', [
            'title' => 'Santri',
            'subtitle' => 'Detail Data Santri',
            'santris' => Santri::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('backend.santri.edit', [
            'title' => 'Santri',
            'subtitle' => 'Edit Data Santri',
            'santris' => Santri::find($id)
        ]);
    }

    // public function save($id)
    // {
    //     return view('backend.santri.edit', [
    //         'title' => 'Santri',
    //         'subtitle' => 'Edit Data Santri',
    //         'santris' => Santri::updated($id, [
    //             'nama_santri' => $request->nama_santri,
    //             'nis' => $request->nis,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'kelas_diniyah' => $request->kelas_diniyah,
    //             'komplek' => $request->komplek,
    //             'foto' => $request->foto
    //         ])
    //     ]);
    // }
}
