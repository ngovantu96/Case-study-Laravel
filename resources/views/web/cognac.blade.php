@extends('web.layout.master')
@section('page-title','Trang Chu')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('slider/vodka cover.jpeg') }}" class="d-block w-100 carousel-image" alt="..." >
            </div>
            <div class="container title">
                <div class="col-md-12 text-center">
                    <h6 class="text-uppercase font-weight-bold text-white">Vang/Champagne</h6>
                    <p class="text-white"> "Tôi đã có chặng đường dài với Bia, một mối tình say đắm với Cognac, nhưng tình yêu của tôi vẫn là Rượu Vang".
                        (Nicholas Oakes)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="h3 mt-3 text-center">Danh Sách Sản Phẩm</h3>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;height: 2px">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 col-sm-6 mt-3">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="{{ route('product.detail',$product->id) }}">
                                <img class="pic-1" src="{{ asset('storage/'.substr($product->image,7)) }}">
                                <img class="pic-2" src="{{ asset('storage/'.substr($product->image,7)) }}">
                            </a>
                            <ul class="social">
                                <li><a href="{{ route('product.detail',$product->id) }}" class="fa fa-shopping-bag"></a></li>
                                <li><a href="{{ route('cart.addToCart',$product->id) }}" class="fa fa-shopping-cart"></a></li>
                            </ul>
                            <span class="product-new-label bg-success">New</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title mt-2"><a href="#">{{ $product->name }}</a></h3>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <div class="price">{{ number_format($product->price) }} đ</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Optional JavaScript -->
    <section class="container mt-2">

    </section>
@endsection
