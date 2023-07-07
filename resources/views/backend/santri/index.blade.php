{{-- @dd($santris) --}}
@extends('backend.partials.layout')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card">
                <div class="card-body">
                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-start" href="/santri/create">
                        <span class="ms-2 badge bg-gradient-primary"><i class="ni ni-fat-add ni-lg"></i>tambah data</span>
                    </a>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">#</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Nama
                                        Santri</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">NIS</th>
                                    <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Kelas
                                        Diniyah</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                                        Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($santris as $santri)
                                    <tr>
                                        <td>
                                            <p class="text-xs text-center font-weight-bold mb-0">{{ $no++ }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('backend/assets/img/team-2.jpg') }}"
                                                        class="avatar avatar-sm me-3" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $santri->nama_santri }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $santri->nis }}</p>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <span
                                                class="badge badge-sm bg-gradient-success">{{ $santri->kelas_diniyah }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="/santri/{{ $santri->id }}/detail" class="px-1"><i
                                                    class="ni ni-tv-2 ni-lg text-success"></i></a>
                                            <a href="/santri/{{ $santri->id }}/delete" class="px-1"><span
                                                    class="badge bg-gradient-danger">hapus</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-center pagination pagination-success font-weight-bolder">
                    {{ $santris->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
