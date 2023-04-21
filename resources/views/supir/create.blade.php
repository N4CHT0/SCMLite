@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Supir</h4>
        <form action="/supir" method="POST" class="w-25 mt-3">
            @csrf
            <div class="form-group">
                <label for="id_truk" class="form-label">Truk</label>
                <select class="form-control select2" style="width: 100%;" name="id_truk" id="id_truk">
                    <option disabled value>Pilih Truk</option>
                    @foreach ($truk_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nomor_polisi }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_supir" class="form-label">Nama Supir</label>
                <input type="text" class="form-control" id="nama_supir" name="nama_supir" placeholder="Masukan Nama Supir">
            </div>
            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukan Nomor Telepon">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('supir.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection