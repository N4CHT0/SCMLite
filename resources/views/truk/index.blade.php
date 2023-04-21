@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-2">
        <h4>Data Truk</h4>
        <a href="{{ route('truk.create') }}" class="btn btn-primary">Tambah Truk</a>
    </div>
    <table class="table">
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
                    <a class="btn btn-warning" href="/truk/edit/{{$item->id}}">Edit</a>
                    <a class="btn btn-danger" href="/truk/delete/{{$item->id}}" onclick="return confirm('Are You Sure')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $truk->links() }}
</div>
@endsection
