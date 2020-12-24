@extends('web.layout.master')
@section('page-title','Trang Chu')
@section('content')
    <section class="container description-text">
            <h3 class="h3 mt-3 text-center">CHI TIẾT SẢN PHẨM</h3>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;height: 2px">
    </section>
    </section>
    <!-- Optional JavaScript -->
    <!--Section: Block Content-->
    <section class="mb-5">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div id="mdb-lightbox-ui"></div>
                <div class="mdb-lightbox">
                    <div class="row product-gallery mx-1">
                        <div class="col-12 mb-0">
                            <figure class="view overlay rounded z-depth-1 main-img">
                                <a href="{{ asset('storage/'.substr($product->image,7)) }}"
                                   data-size="710x823">
                                    <img src="{{ asset('storage/'.substr($product->image,7)) }}"
                                         class="img-fluid z-depth-1">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
               <div class="col-md-6 col-sm-4">
                   <h5>{{ $product->name }}</h5>
                   <p><span class="mr-1">Giá Bán : <strong class="text-danger">{{ number_format($product->price)  }} đ</strong></span></p>
                   <div class="table-responsive">
                       <table class="table table-sm table-borderless mb-0">
                           <tbody>
                           <tr>
                               <th class="pl-0 w-25" scope="row"><strong>Thương Hiệu :</strong></th>
                               <td>{{ $product->category->name }}</td>
                           </tr>
                           <tr>
                               <th class="pl-0 w-25" scope="row"><strong>Nồng Độ :</strong></th>
                               <td>{{ $product->concentration }}%</td>
                           </tr>
                           <tr>
                               <th class="pl-0 w-25" scope="row"><strong>Dung Tích :</strong></th>
                               <td>{{ $product->size}} ml</td>
                           </tr>
                           <tr>
                               <th class="pl-0 w-25" scope="row"><strong>Tình Trạng :</strong></th>
                               <td class="text-danger">@if($product->quantity > 0)<i class="far fa-check-square text-success"></i><span class="text-success"> Còn Hàng</span>@else <span>hết Hàng</span> @endif</td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
                   <hr>
                   <a href="{{ route('cart.addToCart',$product->id) }}" class="btn btn-primary btn-md mr-1 mb-2 text-black"><i
                           class="fas fa-shopping-cart pr-2"></i>Thêm Vào Giỏ</a>
               </div>
        </div>

    </section>
    <!--Section: Block Content-->
    <section class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <h6 class="text-uppercase font-weight-bold text-black">Giới Thiệu</h6>
                <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 88px;height: 2px">
            </div>
            <div class="col-lg-12">
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </section>
<hr>
@endsection
