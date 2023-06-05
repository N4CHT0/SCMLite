@extends('template.home')
@section('sub-title','Daftar Pengguna')
@section('content')


    <a href="{{ route('admin.create')}}" class="btn btn-info btn-sm"><i class="fas fa-calendar"></i> Tambah Akun</a>
    <br><br>

    <table class="table table-striped table-hover table-sm table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Hak Akses</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->password }}</td>
                    <td>{{ $item->role }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/user_system/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="/user_system/delete/{{$item->id}}" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

@endsection
