@extends('layouts.default')
@section('title', 'Saipul Sport | Halaman Men')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center ">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ Storage::url($product->image) }}" alt="gambar" />
                            <ul>
                                <li class="w-icon active">
                                    <a href="{{ route('detail.product', $product->id) }}"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="{{ route('detail.product', $product->id) }}">+ Quick
                                        View</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{ $product->type->nama }}</div>
                            <a href="{{ route('detail.product', $product->id) }}">
                                <h5>{{ $product->nama_barang }}</h5>
                            </a>
                            <div class="product-price">
                                {{ 'Rp. ' . number_format($product->harga) }}
                                {{-- <span>$35.00</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
