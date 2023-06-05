@extends('template.home')
@section('title', 'EDIT-RUTE')
@section('sub-title','Edit Rute')
@section('content')

        <form action="/rute/update/{{$rute->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kota_asal" class="form-label">Masukan Kota Asal</label>
                <input type="text" class="form-control" id="nama_outlet" name="kota_asal" placeholder="Masukan Kota Asal" value="{{$rute->kota_asal}}">
            </div>
            <div class="form-group">
                <label for="kota_tujuan" class="form-label">Masukan Kota Tujuan</label>
                <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" placeholder="Masukan Kota Tujuan" value="{{$rute->kota_tujuan}}">
            </div>
            <div class="form-group">
                <label for="jarak_rute" class="form-label">Masukan Jarak Rute</label>
                <input type="text" class="form-control" id="jarak_rute" name="jarak_rute" placeholder="Masukan Jarak Rute" value="{{$rute->jarak_rute}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('rute.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection