@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Kategori Barang</h4>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_kategori_barang }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a class="btn btn-warning" href="/kategori/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/kategori/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $kategori->links() }}
</div>
@endsection
