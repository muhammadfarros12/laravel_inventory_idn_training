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
                        <table class="table table-borderless">
                            <tr>
                                <th>Nomor Ruangan</th>
                                <th>:</th>
                                <th>{{ $room->room_number }}</th>
                            </tr>
                            <tr>
                                <th>Nama Ruangan</th>
                                <th>:</th>
                                <th>{{ $room->room_name }}</th>
                            </tr>
                            <tr>
                                <th>Penanggung Jawab</th>
                                <th>:</th>
                                <th>{{ $room->user->name }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        Barang yang tersedia
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-strip" id="myTable">
                                <thead>
                                    <th>Nomor Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Detail</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123536</td>
                                        <td>Kabel</td>
                                        <td>
                                            <form action="">

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