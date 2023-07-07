{{-- @dd($postingan) --}}
@extends('frontend.partials.layout')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row pb-5">
            <div class="col-md-12 text-center">
                <p class="h3">{{ $postingan->judul }}</p>
                <p class="card-subtitle">By : <a href="/author/{{ $postingan->author->name }}"
                        class="text-decoration-none">{{ $postingan->author->name }}</a> in <a
                        href="/kategori/{{ $postingan->kategori->nama }}"
                        class="text-decoration-none">{{ $postingan->kategori->nama }}</a>
                    {{ $postingan->created_at->diffForHumans() }}</p>
            </div>
        </div>

        @if ($postingan->count())
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3 pb-5">
                        <img src="https://source.unsplash.com/1200x400?{{ $postingan->kategori->nama }}"
                            class="card-img-top">
                        <div class="card-body" style="text-align: justify">
                            <p class="card-text">{!! $postingan->isi !!}</p>
                        </div>
                        <div class="text-center">
                            <a href="/postingan" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            @else
                <p class="h5 text-center">
                    Postingan tidak ditemukan
                </p>
        @endif
    </div>
@endsection
