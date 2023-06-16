@extends('template.home')
@section('title', 'TAMBAH-BARANG')
@section('sub-title', 'Tambah Barang')
@section('content')

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

    <form action="{{ route('barang.store') }}" method="POST" class="">
        @csrf
        <div class="form-group">
            <label for="id_kategori_barang" class="form-label">Kategori Barang</label>
            <select class="form-control select2" style="width: 100%;" name="id_kategori_barang" id="id_kategori_barang">
                <option disabled value>Pilih Kategori Barang</option>
                @foreach ($kategori_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kategori_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_gudang" class="form-label">Gudang Barang</label>
            <select class="form-control select2" style="width: 100%;" name="id_gudang" id="id_gudang">
                <option disabled value>Pilih Gudang Barang</option>
                @foreach ($gudang_ as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_gudang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                placeholder="Masukan Nama Barang">
        </div>
        <div class="form-group">
            <label for="harga_barang" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" id="harga_barang" name="harga_barang"
                placeholder="Masukan Harga Barang">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </div>

    </form>

@endsection
