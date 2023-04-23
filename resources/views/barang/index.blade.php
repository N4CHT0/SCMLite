@extends('gudang.app')

@section('content')
<div class="container">
  <div class="row justify-content-between align-items-center mb-4">
    <div class="col-lg-6">
      <h4>Data Barang</h4>
    </div>
    <div class="col-lg-6 text-lg-right">
      <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambahkan Barang</a>
      <a href="{{ route('export.pdf') }}" class="btn btn-primary">Export to PDF</a>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
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
                <a class="btn btn-warning btn-sm" href="/barang/edit/{{$item->id}}">Edit</a>
                <a class="btn btn-danger btn-sm" href="/barang/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
  <div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item {{ ($barang->currentPage() == 1) ? ' disabled' : '' }}">
                <a class="page-link" href="{{ $barang->url(1) }}">First</a>
            </li>
            @if($barang->currentPage() > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $barang->previousPageUrl() }}"><</a>
                </li>
            @endif

            @for ($i = 1; $i <= $barang->lastPage(); $i++)
                <li class="page-item {{ ($barang->currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link" href="{{ $barang->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            @if($barang->currentPage() < $barang->lastPage())
                <li class="page-item">
                    <a class="page-link" href="{{ $barang->nextPageUrl() }}">></a>
                </li>
            @endif
            <li class="page-item {{ ($barang->currentPage() == $barang->lastPage()) ? ' disabled' : '' }}">
                <a class="page-link" href="{{ $barang->url($barang->lastPage()) }}">Last</a>
            </li>
        </ul>
    </nav>
  </div>
@endsection
