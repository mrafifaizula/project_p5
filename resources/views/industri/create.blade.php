<style>
    .card option {
        color: black;
    }
</style>

@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Industri
                    <a href="{{ route('industri.index') }}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('industri.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Jurusan</label>
                            <select name="id_jurusan" class="form-control @error('industri') is-invalid @enderror">
                                <option value="">jurusan</option>
                                @foreach ($jurusan as $data)
                                <option value="{{$data->id}}">{{$data->nama_jurusan}}</option>
                                @endforeach
                            </select>
                            @error('id_jurusan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="nama">Nama Industri</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="tahun">tahun Kerja Sama</label>
                            <input type="date" class="form-control @error('tahun') is-invalid @enderror" name="tahun">
                            @error('tahun')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat"></textarea>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection