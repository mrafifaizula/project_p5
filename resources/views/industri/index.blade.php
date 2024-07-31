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
            <div class="card-header">Data industri
                <a href="{{route('industri.create')}}" class="btn btn-sm btn-primary" style="float: right">Create</a>
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
                                        <a href="{{ route('industri.edit', $item->id) }}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('industri.show', $item->id) }}" class="btn btn-sm btn-warning">Show</a>
                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
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
