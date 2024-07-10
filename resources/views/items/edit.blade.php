@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Edit Data Barang
                    </div>
                    <div class="card-body">
                        <form action="{{ route('item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Kategori Barang</span>
                                    <select name="category_id" class="form-select">
                                        <option selected value="{{ $item->category->id }}">{{ $item->category->category_name }}</option>
                                        @foreach($category as $key)
                                        <option value="{{ $key->id }}">{{ $key->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nama Ruangan</span>
                                    <select name="room_id" class="form-select" id="">
                                        <option selected value="{{ $item->room->id }}">{{ $item->room->room_name }}</option>
                                        @foreach($room as $key)
                                        <option value="{{ $key->id }}">{{ $key->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input value="{{ $item->item_name }}" type="text" class="form-control" name="item_name" placeholder="Nama Barang">
                                    <label>Nama Barang</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Stok/Satuan</span>
                                    <input type="number" class="form-control" name="stock" value="{{ $item->stock }}">
                                    <select name="unit" class="form-select" id="">
                                        <option selected value="{{ $item->unit }}">{{ $item->unit }}</option>
                                        <option value="unit">Unit</option>
                                        <option value="kilogram">Kilogram</option>
                                        <option value="liter">Liter</option>
                                        <option value="lembar">Lembar</option>
                                        <option value="roll">Roll</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Kondisi</span>
                                    <select name="condition" class="form-select">
                                        <option selected value="{{ $item->condition }}">{{ $item->condition }}</option>
                                        <option value="baik">Baik</option>
                                        <option value="rusak">Rusak</option>
                                        <option value="tidak layak">Tidak Layak</option>>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <img class="img-thumbnail" src="{{ asset('/storage/images/item/'.$item->image) }}" alt="gambar item" width="200px">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Upload</span>
                                    <input type="file" name="image" value="{{ $item->image }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control ckeditor" name="spec" id="ckeditor">{{$item->spec}}</textarea>
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