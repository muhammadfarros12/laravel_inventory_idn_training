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
                        <table class="table table-borderless">
                            <tr>
                                <th>Detail Gambar</th>
                                <th>1000</th>
                            </tr>
                            <tr>
                                <th>Nama Ruangan</th>
                                <th>A5</th>
                            </tr>
                            <tr>
                                <th>Kategori/Jenis Barang</th>
                                <td>elektronik</td>
                            </tr>
                            <tr>
                                <th>Nomor Barang</th>
                                <td>4573</td>
                            </tr>
                            <tr>
                                <th>Stok Barang</th>
                                <td>45678</td>
                            </tr>
                            <tr>
                                <th>Kondisi</th>
                                <td>
                                    <span class="badge text-bg-primary">Baik</span>
                                    <span class="badge text-bg-primary">Rusak</span>
                                    <span class="badge text-bg-primary">Tidak Layak</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Spesifikasi</th>
                                <td>Masih Bagus</td>
                            </tr>
                        </table>
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
                                                <a href="" class="btn btn-success">Detail</a>
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