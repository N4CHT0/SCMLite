@extends('template.home')
@section('title', 'DAFTAR-OUTLET')
@section('sub-title','Data Outlet')
@section('content')

    <a href="{{ route('outlet.create') }}" class="btn btn-info btn-sm">Tambah Outlet</a>
    <a href="{{ route('outlet.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Outlet</th>
                <th scope="col">Alamat Outlet</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($outlet as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_outlet }}</td>
                <td>{{ $item->alamat_outlet }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/outlet/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger btn-sm" href="/outlet/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
