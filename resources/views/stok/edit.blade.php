@extends('gudang.app')

@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Stok</h4>
        <form action="/stok/update/{{$stok->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_barang" class="form-label">Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_barang" id="id_barang">
                    <option disabled value>Pilih Barang</option>
                    @foreach ($barang_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_kategori_barang" class="form-label">Kategori Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori_barang" id="id_kategori_barang">
                    <option disabled value>Pilih Kategori Barang</option>
                    @foreach ($kategori_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukkan Jumlah Stok" value="{{$stok->jumlah_stok}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
@endsection
