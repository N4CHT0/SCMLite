@extends('template.home')
@section('title', 'DAFTAR-SUPIR')
@section('sub-title','Daftar Supir')
@section('content')

        <a href="{{ route('supir.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Supir</a>
        <a href="{{ route('supir.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
        <br><br>

        <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Truk</th>
                <th scope="col">Nama Supir</th>
                <th scope="col">Nomor Telpon</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supir as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RTruk->nomor_polisi }}</td>
                <td>{{ $item->nama_supir }}</td>
                <td>{{ $item->nomor_telepon }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/supir/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-sm" href="/supir/delete/{{$item->id}}" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
