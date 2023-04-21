@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Add Rute</h4>
        <form action="/rute" method="POST" class="w-25 mt-3">
            @csrf
            <div class="mb-3">
                <label for="kota_asal" class="form-label">Kota kota_asal</label>
                <input type="text" class="form-control" id="kota_asal" name="kota_asal" placeholder="Masukan Kota Asal">
            </div>
            <div class="mb-3">
                <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" placeholder="Masukan Kota Tujuan">
            </div>
            <div class="mb-3">
                <label for="jarak_rute" class="form-label">Jarak Rute</label>
                <input type="text" class="form-control" id="jarak_rute" name="jarak_rute" placeholder="Masukan Jarak Rute">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('rute.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection