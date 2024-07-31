@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{route('eskul.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('eskul.update', $eskul->id)}}" method="post"
                    enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <label for="eskul">Eskul</label>
                            <input type="text" class="form-control @error('eskul') is-invalid @enderror" name="eskul"
                                value="{{$eskul->eskul}}">
                            @error('eskul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="img">Images</label>
                            @if($eskul->img)
                            <p><img src="{{ asset('images/eskul/' .$eskul->img)}}" alt="img" width="100px">
                            </p>
                            @endif
                            <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="deskripsi">deskripsi eskul</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi"></textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert" value="{{$eskul->nim}}">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection