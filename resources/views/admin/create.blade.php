@extends('template.home')
@section('sub-title','Tambah Pengguna')
@section('content')
<form action="{{ route('admin.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name" class="form-label">Name</label>
      <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" required>
      @error('name')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="email" class="form-label">Email</label>
      <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
      @error('email')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="password" class="form-label">Password</label>
      <input class="form-control" type="password" name="password" id="password" required>
      @error('password')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
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
        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        <a href="{{ route('admin.index') }}" class="btn btn-secondary btn-block">Batal</a>
    </div>
  </form>

@endsection
