@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Truk</h4>
        <form action="/truk" method="POST" class="w-25 mt-3">
            @csrf
            <div class="mb-3">
                <label for="nomor_polisi" class="form-label">Nomor Polisi</label>
                <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" placeholder="Masukan Nomor Polisi">
            </div>
            <div class="mb-3">
                <label for="kapasitas" class="form-label">Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Masukan Kapasitas">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('truk.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection