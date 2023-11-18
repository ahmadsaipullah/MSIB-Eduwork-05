@extends('layouts.default')
@section('title', 'Saipul Sport | Detail Product')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="{{ Storage::url($product->image) }}" alt="gambar" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span> {{ $product->brand->nama }} </span>
                                    <h3>{{ $product->nama_barang }} </h3>
                                </div>
                                <div class="pd-desc">
                                    <article>
                                        {{ $product->deskripsi }}
                                    </article>

                                    <div class="pd-title">
                                        <span>Kategori: {{ $product->jenis }} </span>
                                        <span>Size: {{ $product->size }} </span>

                                    </div>

                                    <h4> {{ 'Rp. ' . number_format($product->harga) }}</h4>
                                </div>
                                <div class="quantity">
                                    <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection
