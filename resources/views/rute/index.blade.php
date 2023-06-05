@extends('template.home')
@section('title', 'DAFTAR-RUTE')
@section('sub-title','Daftar Rute')
@section('content')


        <a href="{{ route('rute.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Buat Rute</a>
        <a href="{{ route('rute.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
        <br><br>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Jarak Rute</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rute as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->kota_asal }}</td>
                <td>{{ $item->kota_tujuan }}</td>
                <td>{{ $item->jarak_rute }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/rute/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-sm" href="/rute/delete/{{$item->id}}" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
