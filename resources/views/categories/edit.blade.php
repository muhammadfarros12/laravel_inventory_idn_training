@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Update Data Kategori                    
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-2">
                                    <input required value="{{ $category->category_name }}" type="text" class="form-control" name="category_name" placeholder="Nama Kategori">
                                    <label>Nama Kategori</label>
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