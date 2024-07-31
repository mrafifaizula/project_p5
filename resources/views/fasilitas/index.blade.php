@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="card-header">Data fasilitas
                <a href="{{route('fasilitas.create')}}" class="btn btn-sm btn-primary" style="float: right">Create</a>
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Nama fasilitas</th>
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
                                        <a href="{{route('fasilitas.edit', $item->id)}}" class="btn btn-sm btn-success">Edit
                                        </a>
                                        <a href="{{route('fasilitas.show', $item->id)}}" class="btn btn-sm btn-warning">Show
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
</div>

@endsection