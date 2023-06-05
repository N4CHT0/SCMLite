@extends('template.home')
@section('sub-title','Tambah Kategori')
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



    <form action="{{ route('kategori.store') }}" method="POST" class="">
        @csrf
        <div class="form-group">
            <label for="nama_kategori_barang" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori_barang" name="nama_kategori_barang" placeholder="Masukan Nama Kategori">
        </div>
        <div class="form-group">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </div>
    </form>

@endsection