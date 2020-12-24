@extends('web.layout.master')
@section('page-title','Trang Chu')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('slider/Red_Wine.jpeg') }}" class="d-block w-100 auto carousel-image" alt="..." >
            </div>
            <div class="container title">
                <div class="col-md-12 text-center">
                    </a><h6 class="text-uppercase font-weight-bold text-white">Vang/Champagne</h6>
                    <p class="text-white"> "Tôi đã có chặng đường dài với Bia, một mối tình say đắm với Cognac, nhưng tình yêu của tôi vẫn là Rượu Vang".
                        (Nicholas Oakes)
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- search -->
    <div class="search-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <form action="">
                        <div class="p-1 bg-light shadow-sm">
                            <div class="input-group">
                                <input type="search" placeholder="bạn muốn tìm gì...." class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="container mt-5">
        <h3 class="h3 mt-3">Sản Phẩm Mới Nhất</h3>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 250px;height: 2px">
        <div class="owl-carousel owl-theme">
            @foreach($whiskys as $whisky)
            <div class="items">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="{{ route('product.detail',$whisky->id) }}">
                                <img class="pic-1" src="{{ asset('storage/'.substr($whisky->image,7)) }}">
                                <img class="pic-2" src="{{ asset('storage/'.substr($whisky->image,7)) }}">
                            </a>
                            <ul class="social">
                                <li><a href="{{ route('product.detail',$whisky->id) }}" class="fa fa-shopping-bag"></a></li>
                                <li><a href="{{ route('cart.addToCart',$whisky->id) }}" class="fa fa-shopping-cart"></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title mt-2 ml-3"><a href="#">{{ $whisky->name }}</a></h3>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <div class="price">{{ number_format($whisky->price) }} đ</div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="container mt-5">
        <div class="row">
           <div class="col-6">
               <h3 class="h3 mt-3">VANG/CHAMPAGNE</h3>
           </div>
           <div class="col-6">
               <a href="{{ route('web.ruou-vang') }}"><h6 class="text-right mt-4">Xem Thêm >></h6></a>
           </div>
        </div>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;height: 2px">
        <div class="row">
            @foreach($wines as $wine)
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image mt-5">
                            <a href="{{ route('product.detail',$wine->id) }}">
                                <img class="pic-1" src="{{ asset('storage/'.substr($wine->image,7)) }}">
                                <img class="pic-2" src="{{ asset('storage/'.substr($wine->image,7)) }}">
                            </a>
                            <ul class="social">
                                <li><a href="{{ route('product.detail',$wine->id) }}" class="fa fa-shopping-bag"></a></li>
                                <li><a href="{{ route('cart.addToCart',$wine->id) }}" class="fa fa-shopping-cart"></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title mt-2"><a href="#">{{ $wine->name }}</a></h3>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <div class="price">{{ number_format($wine->price) }} đ</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h3 class="h3 mt-3">WHISKY</h3>
            </div>
            <div class="col-6">
                <a href="{{ route('web.whisky') }}"><h6 class="text-right mt-4">Xem Thêm >></h6></a>
            </div>
        </div>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;height: 2px">
        <div class="row">
            @foreach($whiskys as $whisky)
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image mt-5">
                            <a href="{{ route('product.detail',$whisky->id) }}">
                                <img class="pic-1" src="{{ asset('storage/'.substr($whisky->image,7)) }}">
                                <img class="pic-2" src="{{ asset('storage/'.substr($whisky->image,7)) }}">
                            </a>
                            <ul class="social">
                                <li><a href="{{ route('product.detail',$whisky->id) }}" class="fa fa-shopping-bag"></a></li>
                                <li><a href="{{ route('cart.addToCart',$whisky->id) }}" class="fa fa-shopping-cart"></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title mt-2"><a href="#">{{ $whisky->name }}</a></h3>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>
                            <div class="price">{{ number_format($whisky->price) }} đ</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr class="mt-5">
    </section>


 @endsection


