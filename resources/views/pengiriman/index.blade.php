@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Pengiriman</h4>
        <a href="{{ route('pengiriman.create') }}" class="btn btn-primary">Tambah Pengiriman</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Rute</th>
                <th scope="col">Outlet</th>
                <th scope="col">Truk</th>
                <th scope="col">Supir</th>
                <th scope="col">Tanggal Pengiriman</th>
                <th scope="col">Status Pengiriman </th>
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
                    <a class="btn btn-warning" href="/pengiriman/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/pengiriman/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pengiriman->links() }}
</div>
@endsection
