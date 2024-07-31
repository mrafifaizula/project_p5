@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data eskul
                    <a href="{{route('eskul.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                        <div class="mb-2">
                            <label for="">Nama Eskul</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                value="{{$eskul->eskul}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Deskripsi</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{$eskul->deskripsi}}" disabled>
                        </div>
                        <center>
                            <div class="mb-2">
                                <label for="">Images</label>
                                <img class="form-control" src="{{ asset('images/eskul/'.$eskul->img) }}" alt=""
                                    style="width: 150px; height: 150px">
                            </div>
                        </center>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection