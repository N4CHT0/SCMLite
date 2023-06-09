@extends('template.home')
@section('title', 'EDIT-JADWAL')
@section('sub-title','Edit Jadwal Pengiriman')
@section('content')

        <form action="/jadwal_pengiriman/update/{{$jadwal_pengiriman->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_rute" class="form-label">Kota Asal</label>
                <select class="form-control select2" style="width: 100%;" name="id_rute" id="id_rute"value="{{$jadwal_pengiriman->id_rute}}">
                    <option disabled value>Pilih Kota Asal</option>
                    @foreach ($rute_ as $item)
                        <option value="{{ $item->id }}">{{ $item->kota_asal }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_rute" class="form-label">Kota Tujuan</label>
                <select class="form-control select2" style="width: 100%;" name="id_rute" id="id_rute"value="{{$jadwal_pengiriman->id_rute}}">
                    <option disabled value>Pilih Rute</option>
                    @foreach ($rute_ as $item)
                        <option value="{{ $item->id }}">{{ $item->kota_tujuan }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_outlet" class="form-label">Outlet</label>
                <select class="form-control select2" style="width: 100%;" name="id_outlet" id="id_outlet" value="{{$jadwal_pengiriman->id_outlet}}">
                    <option disabled value>Pilih Outlet</option>
                    @foreach ($outlet_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_outlet }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_pengiriman" class="form-label">Status Pengiriman</label>
                <select class="form-control select2" style="width: 100%;" name="id_pengiriman" id="id_pengiriman" value="{{$jadwal_pengiriman->id_pengiriman}}">
                    <option disabled value>Pilih Pengiriman</option>
                    @foreach ($pengiriman_ as $item)
                        <option value="{{ $item->id }}">{{ $item->status_pengiriman }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori" id="id_kategori" value="{{$jadwal_pengiriman->id_kategori}}">
                    <option disabled value>Pilih Kategori</option>
                    @foreach ($kategori_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori_barang }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman</label>
                <div class="input-group">
                  <input type="datetime-local" class="form-control" id="tanggal_pengiriman" name="tanggal_pengiriman" placeholder="Masukan Tanggal Pengiriman"value="{{$jadwal_pengiriman->tanggal_pengiriman}}">
                  <span class="input-group-text" id="tanggal_pengiriman-addon"><i class="bi bi-calendar"></i></span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('jadwal_pengiriman.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#tanggal_pengiriman').datepicker({
          format: 'yyyy-mm-dd',
          autoclose: true
        });
      });
    </script>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection