@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Ruangan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('room.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input required type="text" class="form-control" name="room_name" placeholder="Nama Ruangan">
                                    <label>Nama Ruangan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text
                                    @error('size')
                                        is-invalid
                                    @enderror
                                    ">Ukuran Ruangan</span>
                                    <select name="size" class="form-select">
                                        <option selected>Choose...</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                    </select>
                                    @error('size')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text
                                    @error('user_id')
                                        is-invalid
                                    @enderror
                                    ">Penanggung Jawab</span>
                                    <select name="user_id" class="form-select" id="">
                                        <option selected>Choose...</option>
                                        @foreach($users as $user)
                                        @if($user->level == 'pic')
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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
                        Data Ruangan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-strip" id="myTable">
                                <thead>
                                    <th>Nomor Ruangan</th>
                                    <th>Nama Ruangan</th>
                                    <th>Ukuran</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Pilihan</th>
                                </thead>
                                <tbody>
                                    @foreach($rooms as $room)
                                    <tr>
                                        <td>{{ $room->room_number }}</td>
                                        <td>{{ $room->room_name }}</td>
                                        <td>
                                            @if($room->size == 'small')
                                                <span class="badge text-bg-primary">small</span>
                                            @elseif($room->size == 'medium')
                                                <span class="badge text-bg-warning">medium</span>
                                            @elseif($room->size == 'large')
                                                <span class="badge text-bg-secondary">large</span>
                                            @endif
                                        </td>
                                        <td>{{ $room->user->name }}</td>
                                        <td>
                                            <form action="">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                <a href="{{ route('room.edit', $room->id) }}" class="btn btn-warning">edit</a>
                                                <a href="/rooms/detail" class="btn btn-success">Detail</a>
                                            </form>
                                        </td>
                                    </tr>
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