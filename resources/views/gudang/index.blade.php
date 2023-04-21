@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Gudang</h4>
        <a href="{{ route('gudang.create') }}" class="btn btn-primary">Tambah Gudang</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Gudang</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_gudang }}</td>
                <td>{{ $item->alamat_gudang }}</td>
                <td>
                    <a class="btn btn-warning" href="/gudang/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/gudang/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $gudang->links() }}
</div>
@endsection