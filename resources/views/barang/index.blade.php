@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between mb-2">
    <h4>Data Barang</h4>
    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambahkan Barang</a>
    <a href="{{ route('export.pdf') }}" class="btn btn-primary">Export to PDF</a>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Kategori Barang</th>
      <th scope="col">Gudang Barang</th>
      <th scope="col">Name</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
      @foreach ($barang as $item)
        <tr>
          <th scope="row">{{ $item->id }}</th>
          <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
          <td>{{ $item->Gudangbarang->nama_gudang }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td>{{ $item->harga_barang }}</td>
          <td>
            <a class="btn btn-warning" href="/barang/edit/{{$item->id}}">Edit</a>
            <a class="btn btn-danger" href="/barang/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $barang->links() }}
</div>
@endsection
