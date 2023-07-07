@extends('backend.partials.layout')
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="/santri/{{ $santris->id }}/save">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama_santri">Nama Santri</label>
                                    <input type="text" class="form-control" id="nama_santri"
                                        value="{{ $santris->nama_santri }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kelas_diniyah">Kelas Diniyah</label>
                                    <input type="text" class="form-control" id="kelas_diniyah" value="{{ $santris->kelas_diniyah }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="text" class="form-control" id="nis"
                                        value="{{ $santris->nis }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenis_kelamin"
                                        value="{{ $santris->jenis_kelamin }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="komplek">Komplek</label>
                                    <input type="text" class="form-control" id="komplek"
                                        value="{{ $santris->komplek }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="text" class="form-control" id="foto"
                                        value="{{ $santris->foto }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-gradient-success"><i class="ni ni-send mx-1"></i>save</button>
                        <button type="reset" class="btn bg-gradient-secondary">reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
