@extends('rute.app')
@section('content')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <h4>Edit Truk</h4>
        <form action="/truk/update/{{$truk->id}}" method="POST" class="w-25 mt-3">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomor_polisi" class="form-label">Masukan Nomot Polisi</label>
                <input type="text" class="form-control" id="nomor_polisi" name="nomor_polisi" placeholder="Masukan Kota Asal" value="{{$truk->nomor_polisi}}">
            </div>
            <div class="mb-3">
                <label for="kapasitas" class="form-label">Masukan Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Masukan Kapasitas" value="{{$truk->kapasitas}}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('truk.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection