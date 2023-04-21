@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Rute</h4>
        <a href="{{ route('rute.create') }}" class="btn btn-primary">Tambah Outlet</a>
    </div>
    <table class="table">
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
                    <a class="btn btn-warning" href="/rute/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/rute/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $rute->links() }}
</div>
@endsection
