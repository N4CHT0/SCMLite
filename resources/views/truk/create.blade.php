@extends('template.home')
@section('title', 'TAMBAH-TRUK')
@section('sub-title','Tambah Truk')
@section('content')

        <form action="/truk" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="nomor_polisi" class="form-label">Nomor Polisi</label>
                <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" placeholder="Masukan Nomor Polisi">
            </div>
            <div class="form-group">
                <label for="kapasitas" class="form-label">Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Masukan Kapasitas">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('truk.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection