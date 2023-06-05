@extends('template.home')
@section('title', 'TAMBAH-STOK')
@section('sub-title','Tambah Stok')
@section('content')

        @if (count($errors)>0)
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

        <form action="{{ route('stok.store') }}" method="POST" class="">
            @csrf
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
            <div class="form-group">
                <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="form-control" id="jumlah_stok" name="jumlah_stok" placeholder="Masukan Jumlah Stok">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <a href="{{ route('stok.index') }}" class="btn btn-secondary btn-block">Batal</a>
            </div>
            
        </form>

@endsection