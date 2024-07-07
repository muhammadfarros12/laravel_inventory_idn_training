@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Edit Data Ruangan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('room.update', $room->id) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input required value="{{ $room->room_name }}" type="text" class="form-control" name="room_name" placeholder="Nama Ruangan">
                                    <label>Nama Ruangan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Ukuran Ruangan</span>
                                    <select name="size" class="form-select">
                                        <option selected>{{ $room->size }}</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text
                                    @error('user_id')
                                        is-invalid
                                    @enderror
                                    ">Penanggung Jawab</span>
                                    <select name="user_id" class="form-select">
                                        <option selected value="{{ $room->user->id }}">{{ $room->user->name }}</option>
                                        @foreach($user as $key)
                                        @if($key->level == 'pic')
                                        <option value="{{ $key->id }}">{{ $key->name }}</option>
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
                                    <button type="submit" class="btn btn-success">Update Data</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection