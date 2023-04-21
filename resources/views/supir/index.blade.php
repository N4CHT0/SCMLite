@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Supir</h4>
        <a href="{{ route('supir.create') }}" class="btn btn-primary">Tambah Supir</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Truk</th>
                <th scope="col">Nama Supir</th>
                <th scope="col">Nomor Telpon</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supir as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RTruk->nomor_polisi }}</td>
                <td>{{ $item->nama_supir }}</td>
                <td>{{ $item->nomor_telepon }}</td>
                <td>
                    <a class="btn btn-warning" href="/supir/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/supir/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $supir->links() }}
</div>
@endsection
