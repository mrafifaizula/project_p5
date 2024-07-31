@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data industri
                    <a href="{{route('industri.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                        <div class="mb-2">
                            <label for="">Nama Jurusan</label>
                            <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" name="nama" value="{{$industri->jurusan->nama_jurusan}}"
                                disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Nama Industri</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                value="{{$industri->nama}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Tahun Kerja Sama</label>
                            <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun"
                                value="{{$industri->tahun}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Alamat Industri</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{$industri->alamat}}" disabled>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection