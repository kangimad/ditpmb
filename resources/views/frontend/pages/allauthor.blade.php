{{-- @dd($postingan) --}}
@extends('frontend.partials.layout')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="row pb-4">
            <div class="col-md-12 text-center">
                <p class="h3">Halaman User</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($user as $us)
                    <div class="card" style="width: 100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="/author/{{ $us->name }}""  class="text-decoration-none">
                                    {{ $us->name }}
                                </a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
