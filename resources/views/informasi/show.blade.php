@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Informasi
                    <a href="{{route('informasi.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                        <div class="mb-2">
                            <label for="">Judul</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{$informasi->judul}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{$informasi->tgl}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Deskripsi</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{$informasi->deskripsi}}" disabled>
                        </div>
                        <center>
                            <div class="mb-2">
                                <label for="">Images Informasi</label>
                                <img class="form-control" src="{{ asset('images/informasi/'.$informasi->img) }}" alt=""
                                    style="width: 150px; height: 150px">
                            </div>
                        </center>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection