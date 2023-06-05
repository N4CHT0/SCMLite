@extends('template.home')
@section('sub-title','Barang Yang Telah Dihapus')
@section('content')

  @if (Session::has('success'))
  <div class="alert alert-success" role="alert">
      {{ Session('success') }}
  </div>
  @endif

  {{-- <div class="row justify-content-between align-items-center mb-4">
    <div class="col-lg-6 text-lg-right">
      <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambahkan Barang</a>
      <a href="{{ route('export.pdf') }}" class="btn btn-primary">Export to PDF</a>
    </div>
  </div> --}}
  <br><br>

    <table class="table table-striped table-hover table-sm table-bordered">
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
                <form action="" method="POST">
                  @csrf
                  @method('delete')
                  <a class="btn btn-info btn-sm" href="{{ route('barang.restore', $item->id ) }}">Restore</a>
                  <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are You Sure')">Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

  {{ $barang->links() }}
  
@endsection
