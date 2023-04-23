@extends('gudang.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Stok Barang</h4>
        <a href="{{ route('stok.create') }}" class="btn btn-primary">Tambah Stok</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Barang</th>
                <th scope="col">Kategori Barang</th>
                <th scope="col">Jumlah Stok</th>
                <th scope="col">Tanggal Update</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stok as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RBarang->nama_barang }}</td>
                <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
                <td>{{ $item->jumlah_stok }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a class="btn btn-warning" href="/stok/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/stok/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $stok->links() }}
</div>
@endsection
