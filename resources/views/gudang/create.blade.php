@extends('template.home')
@section('title', 'TAMBAH-GUDANG')
@section('sub-title','Tambah Gudang')
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

        <form action="{{ route('gudang.store') }}" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="nama_gudang" class="form-label">Nama Gudang</label>
                <input type="text" class="form-control" id="nama_gudang" name="nama_gudang" placeholder="Masukan Nama Gudang">
            </div>
            <div class="form-group">
                <label for="alamat_gudang" class="form-label">Alamat Gudang</label>
                <input type="text" class="form-control" id="alamat_gudang" name="alamat_gudang" placeholder="Masukan Alamat Gudang">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <a href="{{ route('gudang.index') }}" class="btn btn-secondary btn-block">Batal</a>
            </div>
        </form>

@endsection