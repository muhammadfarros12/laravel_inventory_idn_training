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
                                <th>
                                    <img class="img-thumbnail" src="{{ asset('/storage/images/item/'.$item->image) }}" alt="gambar item" width="400px">
                                </th>
                            </tr>
                            <tr>
                                <th>Nama Ruangan</th>
                                <th>{{ $item->room->room_name }}</th>
                            </tr>
                            <tr>
                                <th>Kategori/Jenis Barang</th>
                                <td>{{ $item->category->category_name }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Barang</th>
                                <td>{{ $item->item_number }}</td>
                            </tr>
                            <tr>
                                <th>Stok Barang</th>
                                <td>{{ $item->stock }}</td>
                            </tr>
                            <tr>
                                <th>Kondisi</th>
                                <td>
                                    @if($item->condition == 'baik')
                                    <span class="badge text-bg-primary">Baik</span>
                                    @elseif($item->condition == 'rusak')
                                    <span class="badge text-bg-primary">Rusak</span>
                                    @elseif($item->condition == 'tidak layak')
                                    <span class="badge text-bg-primary">Tidak Layak</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Spesifikasi</th>
                                <td>{!!$item->spec!!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection