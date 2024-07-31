@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-header">Data eskul
                <a href="{{route('eskul.create')}}" class="btn btn-sm btn-primary" style="float: right">Create</a>
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Nama eskul</th>
                            <th>Images</th>
                            <th>aksi</th>
                        </thead>
                        @php $no = 1; @endphp
                        <tbody>
                            @foreach ($eskul as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->eskul}}</td>
                                <td><img src="{{asset('images/eskul/'.$item->img)}}" alt=""
                                        style="width: 50px; height: 50px;"></td>
                                <td>
                                    <form action="{{route('eskul.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('eskul.edit', $item->id)}}" class="btn btn-sm btn-success">Edit
                                        </a>
                                        <a href="{{route('eskul.show', $item->id)}}" class="btn btn-sm btn-warning">Show
                                        </a>
                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- eskul --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-header">Data Eskul
            
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Nama eskul</th>
                            <th>Images</th>
                            <th>aksi</th>
                        </thead>
                        @php $no = 1; @endphp
                        <tbody>
                            @foreach ($eskul as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->eskul}}</td>
                                <td><img src="{{asset('images/eskul/'.$item->img)}}" alt=""
                                        style="width: 50px; height: 50px;"></td>
                                <td>
                                    <form action="{{route('eskul.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('eskul.show', $item->id)}}" class="btn btn-sm btn-warning">Show
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- fasilitas --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-header">Data Fasilitas
               
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Nama Fasilitas</th>
                            <th>Images</th>
                            <th>Aksi</th>

                        </thead>
                        @php $no = 1; @endphp
                        <tbody>
                            @foreach ($fasilitas as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama}}</td>
                                <td><img src="{{asset('images/fasilitas/'.$item->img)}}" alt=""
                                        style="width: 50px; height: 50px;"></td>

                                <td>
                                    <form action="{{route('fasilitas.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('fasilitas.show', $item->id)}}"
                                            class="btn btn-sm btn-warning">Show
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- jurusan --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-header">Data Jurusan
                
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Aksi</th>

                        </thead>
                        @php $no = 1; @endphp
                        <tbody>
                            @foreach ($jurusan as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_jurusan}}</td>
                                <td>
                                    <form action="{{route('jurusan.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('jurusan.show', $item->id)}}"
                                            class="btn btn-sm btn-warning">Show
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- informasi --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-header">Data Informasi
                
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </thead>
                        @php $no = 1; @endphp
                        <tbody>
                            @foreach ($informasi as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->tgl}}</td>
                                <td><img src="{{asset('images/informasi/'.$item->img)}}" alt=""
                                        style="width: 50px; height: 50px;"></td>
                                <td>
                                    <form action="{{route('informasi.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('informasi.show', $item->id)}}"
                                            class="btn btn-sm btn-warning">Show
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- industri --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-header">Data Industri
               
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Nama Industri</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($industri as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->jurusan->nama_jurusan }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td align="center">
                                    <form action="{{ route('industri.destroy', $item->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('industri.show', $item->id) }}"
                                            class="btn btn-sm btn-warning">Show</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection