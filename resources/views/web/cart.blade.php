@extends('web.layout.master')
@section('page-title','gio-hang')
@section('content')
    <section class="container description-text">
        @if(session()->has('Cart'))
        <h3 class="h3 mt-3 text-center">Thông Tin Giỏ Hàng</h3>
        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;height: 2px">
    </section>
    <section class="container">
        <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Chi Tiết Đơn Hàng
                <a href="{{ route('web.index') }}" class="btn btn-outline-info btn-sm pull-right">Tiếp Tục Mua Hàng</a>
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                <!-- PRODUCT -->
                <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Tên Sản Phẩm</th>
                                                <th scope="col" class="text-center">Số Lượng</th>
                                                <th scope="col" class="text-center">Tổng Tiền</th>
                                                <th scope="col" class="text-center">Xóa</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cart->products as $item)
                                                    <tr>
                                                        <td><img class="img-responsive" src="{{ asset('storage/'.substr($item['productInfo']->image,7)) }}" alt="prewiew" width="120" height="80"></td>
                                                        <td> <h4 class="product-name"><strong>{{ $item['productInfo']->name }}</strong></h4>
                                                            <h6><strong>{{ number_format($item['productInfo']->price) }} đ</strong></h6>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('cart.minusCart',$item['productInfo']->id) }}"><i class="fas fa-minus mr-1"></i></a>
                                                            <span>{{ $item['qty'] }}</span>
                                                           <a href="{{ route('cart.addToCart',$item['productInfo']->id) }}"><i class="fas fa-plus ml-1"></i></a>
                                                        <td class="text-center"><h6><strong>{{ number_format($item['productInfo']->price*$item['qty']) }} đ</strong></h6></td>
                                                        <td class="text-center"><button class="btn btn-sm btn-danger"><a class="btn btn-sm btn-danger"
                                                                    href="{{ route('cart.delete-item-cart',$item['productInfo']->id) }}"><i class="fa fa-trash"></i> </a></button> </td>
                                                    </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <hr>

            <div class="card-footer">
                <div class="pull-right" style="margin: 10px">
                    <a href="{{ route('show-checkout') }}" class="btn btn-success pull-right">
                            Thanh Toán
                    </a>
                    <div class="pull-right" style="margin: 5px">
                        Tổng Tiền: <b>{{ number_format($cart->totalPrice )}} đ</b>
                    </div>
                </div>
            </div>
                @else
                    <h3 class="h3 mt-3 text-center">Giỏ Hàng Bạn Trống</h3>
                    <hr class="bg-success" style="width:100%; height: 2px" >
                    <div class="card-header bg-dark text-light">
                        <a href="{{ route('web.index') }}" class="btn btn-outline-info btn-sm pull-right text-white">Tiếp Tục Mua Hàng</a>
                    </div>
                @endif
        </div>
        </div>
    </section>

    <!-- Button trigger modal -->


@endsection
