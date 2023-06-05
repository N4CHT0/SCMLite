@extends('template.home')
@section('title', 'DAFTAR-GUDANG')
@section('sub-title','Data Gudang')
@section('content')

  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
  @endif

  <a href="{{ route('gudang.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Gudang</a>
  <a href="{{ route('gudang.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
  <br><br>

  <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Gudang</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_gudang }}</td>
                <td>{{ $item->alamat_gudang }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/gudang/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('gudang.destroy', $item->id ) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection