@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Jadwal Pengiriman</h4>
        <a href="{{ route('jadwal_pengiriman.create') }}" class="btn btn-primary">Tambah Jadwal</a>
    </div>
    <table class="table">
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
                    <a class="btn btn-warning" href="/jadwal_pengiriman/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/jadwal_pengiriman/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $jadwal_pengiriman->links() }}
</div>
@endsection
