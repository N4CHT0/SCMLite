@extends('pengiriman.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-lg-6 text-lg-left mb-3 mb-lg-0">
            <a href="{{ route('pengiriman.create') }}" class="btn btn-primary px-lg-4">Tambah Pengiriman</a>
        </div>
        <div class="col-lg-6">
            <h4>Data Pengiriman</h4>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rute</th>
                    <th scope="col">Outlet</th>
                    <th scope="col">Truk</th>
                    <th scope="col">Supir</th>
                    <th scope="col">Tanggal Pengiriman</th>
                    <th scope="col">Status Pengiriman</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengiriman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->RRute->kota_tujuan }}</td>
                    <td>{{ $item->ROutlet->nama_outlet }}</td>
                    <td>{{ $item->RTruk->nomor_polisi }}</td>
                    <td>{{ $item->RSupir->nama_supir }}</td>
                    <td>{{ $item->tanggal_pengiriman }}</td>
                    <td>{{ $item->status_pengiriman }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="/pengiriman/edit/{{$item->id}}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="/pengiriman/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item {{ ($pengiriman->currentPage() == 1) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $pengiriman->url(1) }}">First</a>
                </li>
                @if($pengiriman->currentPage() > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $pengiriman->previousPageUrl() }}"><</a>
                    </li>
                @endif
    
                @for ($i = 1; $i <= $pengiriman->lastPage(); $i++)
                    <li class="page-item {{ ($pengiriman->currentPage() == $i) ? ' active' : '' }}">
                        <a class="page-link" href="{{ $pengiriman->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
    
                @if($pengiriman->currentPage() < $pengiriman->lastPage())
                    <li class="page-item">
                        <a class="page-link" href="{{ $pengiriman->nextPageUrl() }}">></a>
                    </li>
                @endif
                <li class="page-item {{ ($pengiriman->currentPage() == $pengiriman->lastPage()) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $pengiriman->url($pengiriman->lastPage()) }}">Last</a>
                </li>
            </ul>
        </nav>
      </div>
</div>
@endsection