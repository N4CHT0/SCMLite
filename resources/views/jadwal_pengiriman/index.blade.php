@extends('pengiriman.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <div class="col-lg-6">
            <h4>Jadwal Pengiriman</h4>
        </div>
        <div class="col-lg-6 text-lg-right">
            <a href="{{ route('jadwal_pengiriman.create') }}" class="btn btn-primary">Tambah Jadwal</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rute</th>
                    <th scope="col">Outlet</th>
                    <th scope="col">Pengiriman</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal Pemesanan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal_pengiriman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->RRute->kota_tujuan }}</td>
                    <td>{{ $item->ROutlet->nama_outlet }}</td>
                    <td>{{ $item->RPengiriman->status_pengiriman }}</td>
                    <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
                    <td>{{ $item->tanggal_pengiriman }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/jadwal_pengiriman/edit/{{$item->id}}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/jadwal_pengiriman/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item {{ ($jadwal_pengiriman->currentPage() == 1) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $jadwal_pengiriman->url(1) }}">First</a>
                </li>
                @if($jadwal_pengiriman->currentPage() > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $jadwal_pengiriman->previousPageUrl() }}"><</a>
                    </li>
                @endif
    
                @for ($i = 1; $i <= $jadwal_pengiriman->lastPage(); $i++)
                    <li class="page-item {{ ($jadwal_pengiriman->currentPage() == $i) ? ' active' : '' }}">
                        <a class="page-link" href="{{ $jadwal_pengiriman->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
    
                @if($jadwal_pengiriman->currentPage() < $jadwal_pengiriman->lastPage())
                    <li class="page-item">
                        <a class="page-link" href="{{ $jadwal_pengiriman->nextPageUrl() }}">></a>
                    </li>
                @endif
                <li class="page-item {{ ($jadwal_pengiriman->currentPage() == $jadwal_pengiriman->lastPage()) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $jadwal_pengiriman->url($jadwal_pengiriman->lastPage()) }}">Last</a>
                </li>
            </ul>
        </nav>
      </div>
</div>
@endsection
