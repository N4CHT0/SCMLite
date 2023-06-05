@extends('template.home')
\
@section('sub-title','Daftar Barang')
@section('content')

  @if (Session::has('success'))
  <div class="alert alert-success" role="alert">
      {{ Session('success') }}
  </div>
  @endif

  <div class="btn-group mb-3" role="group" aria-label="Basic Example">
    <a href="{{ route('barang.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Barang</a>
    <a href="{{ route('barang.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Ekspor Ke PDF</a>
  </div>


    <table class="table table-striped table-hover table-sm table-bordered" id="example">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Kategori Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga Barang</th>
          <th scope="col">Gudang Barang</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
        <tbody>
          @foreach ($barang as $item)
            <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
              <td>{{ $item->nama_barang }}</td>
              <td>{{ $item->harga_barang }}</td>
              <td>{{ $item->Gudangbarang->nama_gudang }}</td>
              <td>
                <a class="btn btn-primary btn-sm" href="/barang/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                <form action="{{ route('barang.destroy', $item->id ) }}" method="POST">
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
