@extends('template.home')
@section('title', 'DAFTAR-JADWAL')
@section('sub-title','Jadwal Pengiriman')
@section('content')


    <a href="{{ route('jadwal_pengiriman.create') }}" class="btn btn-info btn-sm"><i class="fas fa-calendar"></i> Buat Jadwal</a>
    <a href="{{ route('jadwal.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kota Asal</th>
                    <th scope="col">Kota Tujuan</th>
                    <th scope="col">Outlet</th>
                    <th scope="col">Status Pengiriman</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal Pemesanan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal_pengiriman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->RRute->kota_asal }}</td>
                    <td>{{ $item->RRute->kota_tujuan }}</td>
                    <td>{{ $item->ROutlet->nama_outlet }}</td>
                    <td>{{ $item->RPengiriman->status_pengiriman }}</td>
                    <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
                    <td>{{ $item->tanggal_pengiriman }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/jadwal_pengiriman/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="/jadwal_pengiriman/delete/{{$item->id}}" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

@endsection
