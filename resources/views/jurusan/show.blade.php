@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Jurusan
                    <a href="{{route('jurusan.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" name="nama_jurusan"
                            value="{{$jurusan->nama_jurusan}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection