@extends('dashboard.layouts.default')
@section('title', 'Halaman Product')
@section('product', 'active')
@section('content')
    <!-- Basic Tables start -->
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Table Product</h4>
                        <a class="btn btn-primary" href="{{ route('products.create') }}">Tambah Product</a>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('failed'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('failed') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table id="dataTables" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Barang</th>
                                            <th>Brand</th>
                                            <th>Type</th>
                                            <th>Suplier</th>
                                            <th>Katalog</th>
                                            <th>Size</th>
                                            <th>Jenis</th>
                                            <th>Stock</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->kode }}</td>
                                                <td>{{ $product->nama_barang }}</td>
                                                <td>{{ $product->Brand->nama }}</td>
                                                <td>{{ $product->Type->nama }}</td>
                                                <td>{{ $product->Suplier->perusahaan }}</td>
                                                <td>{{ $product->katalog->nama }}</td>
                                                <td>{{ $product->size }}</td>
                                                <td>{{ $product->jenis }}</td>
                                                <td>{{ $product->qty_stock }}</td>
                                                <td>{{ number_format($product->harga) }}</td>
                                                <td>{!! \Illuminate\Support\Str::limit($product->deskripsi, 50, '......') !!} </td>
                                                <td> <img src="{{ Storage::url($product->image) }}" alt="gambar"
                                                        width="150px" class="tumbnail img-fluid"></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-warning mx-1"
                                                            href="{{ route('products.edit', $product->id) }}">Update</a>
                                                        <form action="{{ route('products.destroy', $product->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini')">Delete</button>
                                                        </form>
                                                    </div>
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
    </section>
    <!-- Basic Tables end -->

@endsection
