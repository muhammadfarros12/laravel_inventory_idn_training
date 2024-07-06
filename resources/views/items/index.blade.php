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
                        <div class="row">

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Kategori Barang</span>
                                    <select name="kategori" class="form-select" id="">
                                        <option selected>Choose...</option>
                                        <option value="">elektronik</option>
                                        <option value="">makanan</option>
                                        <option value="">ATK</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Nama Ruangan</span>
                                    <select name="kategori" class="form-select" id="">
                                        <option selected>Choose...</option>
                                        <option value="">A1</option>
                                        <option value="">A2</option>
                                        <option value="">A3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                                    <label>Nama Barang</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Stok/Satuan</span>
                                    <select name="kategori" class="form-select" id="">
                                        <option selected>Choose...</option>
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
                                    <span class="input-group-text">Upload</span>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Kondisi</span>
                                    <select name="kondisi" class="form-select" id="">
                                        <option selected>Choose...</option>
                                        <option value="baik">Baik</option>
                                        <option value="rusak">Rusak</option>
                                        <option value="tidak layak">Tidak Layak</option>>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-control">
                                    <div class="input-group">
                                        <textarea name="spec" id="" cols="100" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Tambah Data</button>
                                </div>
                            </div>
                        </div>
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
                                    <tr>
                                        <td>Gambar</td>
                                        <td>12345</td>
                                        <td>kabel</td>
                                        <td>A3</td>
                                        <td>
                                            <form action="">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                <a href="/items/edit" class="btn btn-warning">edit</a>
                                                <a href="/items/detail" class="btn btn-success">Detail</a>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection