@extends('template.home')
@section('title', 'EDIT-GUDANG')
@section('sub-title','Edit Gudang')
@section('content')

        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('gudang.update' ,$gudang->id ) }}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_gudang" class="form-label">Nama Gudang</label>
                <input type="text" class="form-control" id="nama_gudang" name="nama_gudang" placeholder="Masukkan Nama Gudang" value="{{$gudang->nama_gudang}}">
            </div>
            <div class="mb-3">
                <label for="alamat_gudang" class="form-label">Alamat Gudang</label>
                <input type="text" class="form-control" id="alamat_gudang" name="alamat_gudang" placeholder="Masukkan Alamat Gudang" value="{{$gudang->alamat_gudang}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection
