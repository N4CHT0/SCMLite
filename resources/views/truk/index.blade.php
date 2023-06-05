@extends('template.home')
@section('title', 'DAFTAR-TRUK')
@section('sub-title','Daftar Truk')
@section('content')

    <a href="{{ route('truk.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Truk</a>
    <a href="{{ route('truk.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nomor Polisi</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($truk as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nomor_polisi }}</td>
                <td>{{ $item->kapasitas }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/truk/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <a class="btn btn-danger btn-sm" href="/truk/delete/{{$item->id}}" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
