@extends('template.home')
@section('title', 'EDIT-KATEGORI')
@section('sub-title','Edit Kategori')
@section('content')

        @if (count($errors)>0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <form action="{{ route('kategori.update' ,$kategori->id ) }}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_kategori_barang" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori_barang" name="nama_kategori_barang" placeholder="Masukkan Nama Kategori" value="{{$kategori->nama_kategori_barang}}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" value="{{$kategori->deskripsi}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection
