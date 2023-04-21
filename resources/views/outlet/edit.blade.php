@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Outlet</h4>
        <form action="/outlet/update/{{$outlet->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_outlet" class="form-label">Nama Outlet</label>
                <input type="text" class="form-control" id="nama_outlet" name="nama_outlet" placeholder="Masukan Nama Outlet" value="{{$outlet->nama_outlet}}">
            </div>
            <div class="mb-3">
                <label for="alamat_outlet" class="form-label">Alamat Outlet</label>
                <input type="text" class="form-control" id="alamat_outlet" name="alamat_outlet" placeholder="Masukan Alamat Outlet" value="{{$outlet->alamat_outlet}}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('outlet.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection