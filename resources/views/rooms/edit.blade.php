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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" name="nama_ruangan" placeholder="Nama Ruangan">
                                    <label>Nama Ruangan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Ukuran Ruangan</span>
                                    <select name="ukuran" class="form-select" id="">
                                        <option selected>Choose...</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Penanggung Jawab</span>
                                    <select name="penanggung_jawab" class="form-select" id="">
                                        <option selected>Choose...</option>
                                        <option value="">Pic1</option>
                                        <option value="">Pic2</option>
                                        <option value="">Pic3</option>
                                    </select>
                                </div>
                            </div>
                            

                            
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection