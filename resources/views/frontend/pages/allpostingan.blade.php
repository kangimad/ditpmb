{{-- @dd($postingan) --}}
@extends('frontend.partials.layout')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row pb-4">
            <div class="col-md-12 text-center">
                <p class="h3">Halaman Postingan</p>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <form action="/postingan" method="get" class="d-flex">
                    <input class="form-control me-2" name="search" value="{{ request('search') }}" type="search"
                        placeholder="Masukkan kata kunci ..." aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

        @if ($postingan->count())
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <img src="https://source.unsplash.com/1200x400?{{ $postingan[0]->kategori->nama }}"
                            class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $postingan[0]->judul }}</h5>
                            <small>
                                <p class="card-subtitle">
                                    By : <a href="/author/{{ $postingan[0]->author->name }}"
                                        class="text-decoration-none">{{ $postingan[0]->author->name }}</a> in <a
                                        href="/kategori/{{ $postingan[0]->kategori->nama }}"
                                        class="text-decoration-none">{{ $postingan[0]->kategori->nama }}</a>
                                    {{ $postingan[0]->created_at->diffForHumans() }}</p>
                                <p class="card-text mt-3">{{ $postingan[0]->ringkasan }}</p>
                                <a href="/postingan/{{ $postingan[0]->slug }}" class="btn btn-primary mt-3">Read more</a>
                            </small>
                        </div>
                    </div>
                </div>

                @foreach ($postingan->skip(1) as $post)
                    <div class="col-md-4 mt-3">
                        <div class="card mb-3">
                            <small><a href="/kategori/{{ $post->kategori->nama }}"
                                    class="text-decoration-none position-absolute m-2 bg-secondary p-2 text-light bg-opacity-75 rounded-3">{{ $post->kategori->nama }}</a></small>
                            <img src="https://source.unsplash.com/600x400?{{ $post->kategori->nama }}"
                                class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $post->judul }}</h5>
                                <small>
                                    <p class="card-subtitle">By : <a href="/author/{{ $post->author->name }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}</p>
                                    <p class="card-text mt-3">{{ $post->ringkasan }}</p>
                                    <a href="/postingan/{{ $post->slug }}"
                                        class="bg-primary px-3 py-2 text-light bg-opacity-75 rounded-3 text-decoration-none">Read
                                        more</a>
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
                <div class="d-flex justify-content-center">
                    {{ $postingan->links() }}
                </div>
            </div>
        @else
            <p class="h5 text-center mt-4">
                Postingan tidak ditemukan
            </p>
        @endif

    </div>
@endsection
