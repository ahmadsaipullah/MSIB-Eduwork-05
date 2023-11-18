@extends('dashboard.layouts.default')
@section('title', 'Create Product')
@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Create Product</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('products.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Kode</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="kode" name="kode"
                                        class="form-control @error('kode') is invalid
                                    @enderror"
                                        value="{{ old('kode') }}" placeholder="Kode">
                                    @error('kode')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label>Nama Barang</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="nama_barang" name="nama_barang"
                                        class="form-control @error('nama_barang') is invalid
                                    @enderror"
                                        value="{{ old('nama_barang') }}" placeholder="Nama Barang">
                                    @error('nama_barang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label>Brand</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-control" name="brand_id" id="brand_id">
                                        <option>---Pilih Brand---</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Type</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-control" name="type_id" id="type_id">
                                        <option>---Pilih Type---</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Suplier</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-control" name="suplier_id" id="suplier_id">
                                        <option>---Pilih Suplier---</option>
                                        @foreach ($supliers as $suplier)
                                            <option value="{{ $suplier->id }}">{{ $suplier->perusahaan }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Katalog</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-control" name="katalog_id" id="katalog_id">
                                        <option>---Pilih Katalog---</option>
                                        @foreach ($katalogs as $katalog)
                                            <option value="{{ $katalog->id }}">{{ $katalog->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Size</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="size" name="size"
                                        class="form-control @error('size') is invalid
                                    @enderror"
                                        value="{{ old('size') }}" placeholder="Size">
                                    @error('size')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label>Jenis</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <select class="form-control" name="jenis" id="jenis">
                                        <option selected>---Pilih Jenis---</option>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label>Stock</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="number" id="qty_stock" name="qty_stock"
                                        class="form-control @error('qty_stock') is invalid
                                    @enderror"
                                        value="{{ old('qty_stock') }}" placeholder="Stock">
                                    @error('qty_stock')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label>Harga</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="number" id="harga" name="harga"
                                        class="form-control @error('harga') is invalid
                                    @enderror"
                                        value="{{ old('harga') }}" placeholder="Harga">
                                    @error('harga')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label>Deskripsi</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <textarea name="deskripsi" id="deskripsi" rows="3"
                                        class="form-control @error('deskripsi') is invalid @enderror"{{ old('deskripsi') }} required></textarea>
                                    @error('deskripsi')
                                        <div class="alert alert-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="image">Image</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="file" id="image" name="image"
                                        class="form-control @error('image') is invalid
                                    @enderror"
                                        value="{{ old('image') }}" placeholder="Image">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
