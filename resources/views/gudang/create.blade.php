@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Gudang</h4>
        <form action="/gudang" method="POST" class="w-25 mt-3">
            @csrf
            <div class="mb-3">
                <label for="nama_gudang" class="form-label">Nama Gudang</label>
                <input type="text" class="form-control" id="nama_gudang" name="nama_gudang" placeholder="Masukan Nama Gudang">
            </div>
            <div class="mb-3">
                <label for="alamat_gudang" class="form-label">Alamat Gudang</label>
                <input type="text" class="form-control" id="alamat_gudang" name="alamat_gudang" placeholder="Masukan Alamat Gudang">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('gudang.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection