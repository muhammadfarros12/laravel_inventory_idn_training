@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Kategori Barang</span>
                                <select required class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                                    <option selected>Choose...</option>
                                    @foreach($categories as $key)
                                    <option value="{{ $key->id }}">{{ $key->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Ruangan</span>
                                <select required class="form-select @error('room_id') is-invalid @enderror" name="room_id">
                                    <option selected>Choose...</option>
                                    @foreach($rooms as $key)
                                    <option value="{{ $key->id }}">{{ $key->room_name }}</option>
                                    @endforeach
                                </select>
                                @error('room_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-2">
                                <input required type="text" class="form-control @error('item_name') is-invalid @enderror" id="floatingInput" name="item_name"
                                    placeholder="Nama Barang">
                                <label for="floatingInput">Nama Barang</label>
                                @error('item_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Stok/Satuan</span>
                                <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror">
                                <select class="form-select @error('unit') is-invalid @enderror" name="unit">
                                    <option selected>Choose...</option>
                                    <option value="unit">Unit</option>
                                    <option value="kilogram">Kilogram</option>

    
        
          
    

        
        Expand All
    
    @@ -49,26 +62,38 @@
  
                                    <option value="butir">Butir</option>
                                    <option value="liter">Liter</option>
                                    <option value="lembar">Lembar</option>
                                    <option value="roll">Roll</option>
                                </select>
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @error('unit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Upload</span>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile01">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Kondisi</span>
                                <select class="form-select  @error('condition') is-invalid @enderror" name="condition">
                                    <option selected>Choose...</option>
                                    <option value="baik">Baik</option>
                                    <option value="rusak">Rusak</option>
                                    <option value="tidak layak">Tidak Layak</option>
                                </select>
                                @error('condition')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="form-group">
                                <textarea class="form-control ckeditor" name="spec" id="ckeditor"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        Data Barang
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-strip" id="myTable">
                                <thead>
                                    <th>Gambar</th>
                                    <th>Nomor Gambar</th>
                                    <th>Nama Barang</th>
                                    <th>tempat</th>
                                    <th>Pilihan</th>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <td>
                                            <img class="img-thumbnail" src="{{ asset('/storage/images/item/'.$item->image) }}" alt="gambar item" width="100" height="150">
                                        </td>
                                        <td>{{ $item->item_number }}</td>
                                        <td>{{ $item->item_name }}</td>
                                        <td>{{ $item->room->room_name }}</td>
                                        <td>
                                            <form action="{{ route('item.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda akan menghapus item {{ $item->item_name }}?');">Hapus</button>
                                                <a href="{{ route('item.edit', $item->id) }}" class="btn btn-warning">edit</a>
                                                <a href="{{ route('item.show', $item->id) }}" class="btn btn-success">Detail</a>
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