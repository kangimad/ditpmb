{{-- @dd($postingan) --}}
@extends('frontend.partials.layout')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row pb-4">
            <div class="col-md-12 text-center">
                <p class="h3">Halaman Kategori</p>
            </div>
        </div>
        <div class="row">
            @foreach ($kategori as $kat)
                <div class="col-md-4">
                    <a href="/kategori/{{ $kat->nama }}"" class="text-decoration-none">
                        <div class="card bg-dark text-white my-2 p-0">
                            <img src="https://source.unsplash.com/500x400?{{ $kat->nama }}" class="card-img" alt="https://source.unsplash.com/500x400?{{ $kat->nama }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill bg-dark bg-opacity-75 m-0 px-3 py-4 fs-5" style="color: rgb(230, 227, 227)"><strong>{{ $kat->nama }}</strong></h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
