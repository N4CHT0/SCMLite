@extends('template.home')
@section('title', 'DAFTAR-STOK')
@section('sub-title','Data Stok Barang')
@section('content')

  @if (Session::has('success'))
  <div class="alert alert-success" role="alert">
      {{ Session('success') }}
  </div>
  @endif

    <div class="btn-group mb-3" role="group" aria-label="Basic Example">
        <a href="{{ route('stok.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Stok</a>
        <a href="{{ route('stok.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
    </div>


    <table class="table table-striped table-hover table-sm table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Barang</th>
                <th scope="col">Kategori Barang</th>
                <th scope="col">Jumlah Stok</th>
                <th scope="col">Tanggal Update</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stok as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RBarang->nama_barang }}</td>
                <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
                <td>{{ $item->jumlah_stok }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/stok/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('stok.destroy', $item->id ) }}" method="POST">
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
