@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Fasilitas
                    <a href="{{ route('fasilitas.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('fasilitas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-2">
                            <label for="nama">Nama Fasilitas</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="img">Images</label>
                            <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                            @error('img')
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