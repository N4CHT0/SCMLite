@extends('template.home')
@section('title', 'TAMBAH-RUTE')
@section('sub-title','Tambah Rute')
@section('content')

        <form action="/rute" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="kota_asal" class="form-label">Kota kota_asal</label>
                <input type="text" class="form-control" id="kota_asal" name="kota_asal" placeholder="Masukan Kota Asal">
            </div>
            <div class="form-group">
                <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" placeholder="Masukan Kota Tujuan">
            </div>
            <div class="form-group">
                <label for="jarak_rute" class="form-label">Jarak Rute</label>
                <input type="text" class="form-control" id="jarak_rute" name="jarak_rute" placeholder="Masukan Jarak Rute">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('rute.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection