@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Kategori                    
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
                                    <label>Nama Kategori</label>
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
                        Data Kategori
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-strip" id="myTable">
                                <thead>
                                    <th>Nama Kategori</th>
                                    <th>Pilihan</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>elektronik</td>
                                        <td>
                                            <form action="">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                <a href="" class="btn btn-warning">edit</a>
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