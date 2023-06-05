@extends('template.home')
@section('title', 'DAFTAR-KATEGORI')
@section('sub-title','Data Kategori')
@section('content')

    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
    @endif

    <div class="btn-group mb-3" role="group" aria-label="Basic Example">
        <a href="{{ route('kategori.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Kategori</a>
        <a href="{{ route('kategori.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Export Ke PDF</a>
    </div>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
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
                    <a class="btn btn-primary btn-sm" href="/kategori/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-sm" href="/kategori/delete/{{$item->id}}" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
