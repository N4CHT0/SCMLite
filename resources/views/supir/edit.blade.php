@extends('template.home')
@section('title', 'EDIT-SUPIR')
@section('sub-title','Edit Supir')
@section('content')


        <form action="/supir/update/{{$supir->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_truk" class="form-label">Truk</label>
                <select class="form-control select2" style="width: 100%;" name="id_truk" id="id_truk">
                    <option disabled value>Pilih Truk</option>
                    @foreach ($truk_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nomor_polisi }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_supir" class="form-label">Nama Supir</label>
                <input type="text" class="form-control" id="nama_supir" name="nama_supir" placeholder="Masukkan Nama Supir" value="{{$supir->nama_supir}}">
            </div>
            <div class="form-group">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" value="{{$supir->nomor_telepon}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection
