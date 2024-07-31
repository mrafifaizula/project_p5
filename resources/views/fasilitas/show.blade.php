@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Fasilitas
                    <a href="{{route('fasilitas.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="nama">Nama Fasilitas</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{$fasilitas->nama}}" disabled>
                    </div>
                    <center>
                        <div class="mb-2">
                            <label for="">Images</label>
                            <img class="form-control" src="{{ asset('images/fasilitas/'.$fasilitas->img) }}" alt=""
                                style="width: 150px; height: 150px">
                        </div>
                    </center>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection