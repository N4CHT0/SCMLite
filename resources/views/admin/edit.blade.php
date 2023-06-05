@extends('template.home')
@section('sub-title','Edit Pengguna')
@section('content')
<form action="/user_system/update/{{$user->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Masukan Nama</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama" value="{{$user->name}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Masukan Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="{{$user->email}}">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Masukan Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" value="{{$user->password}}">
    </div>
    <div class="form-group">
        <label for="role" class="form-label">Role</label>
        <select class="form-control select2" style="width: 100%;" name="role" id="role" required>
          <option value="admin">Admin</option>
          <option value="gudang">Gudang</option>
          <option value="pengiriman">Pengiriman</option>
        </select>
        @error('role')
          <span class="text-red-500">{{ $message }}</span>
        @enderror
      </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </div>
  </form>
@endsection