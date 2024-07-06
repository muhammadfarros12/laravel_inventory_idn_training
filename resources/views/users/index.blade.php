@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Tambah Data PIC Ruangan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-2">
                                        <input required type="text" class="form-control" name="name" placeholder="Name">
                                        <label>Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-2">
                                        <input required type="text" class="form-control" name="username" placeholder="Username">
                                        <label>Nama Pengguna / Username</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-2">
                                        <input required type="email" class="form-control" name="email" placeholder="Email">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-2">
                                        <input required type="password" class="form-control" name="password" placeholder="Password">
                                        <label>Kata sandi / Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Tambah Data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        Data User
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-strip" id="myTable">
                                <thead>
                                    <th>Nama</th>
                                    <th>Nama Pengguna</th>
                                    <th>Pilihan</th>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    @if($user->level == 'pic')
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>
                                            <form action="">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">edit</a>
                                                <a href="/users/detail" class="btn btn-success">Detail</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection