@extends('web.layout.master')
@section('page-title','gio-hang')
@section('content')
    <section class="container description-text">
            <h3 class="h3 mt-3 text-center">Thông Tin Nhận Hàng</h3>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;height: 2px">
    </section>

    <div class="container">
        <form method="post" action="{{route('checkout')}}">
            @csrf
            <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Họ Và Tên</label>
                    <input type="text" class="form-control" name="name"  placeholder="họ và tên">
                </div>
                <div class="form-group">
                    <label>Số Điên Thoại</label>
                    <input type="text" class="form-control" name="phone" placeholder="số điện thoại">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" class="form-control" name="address" placeholder="Địa Chỉ">
                </div>
            </div>
                <input type="submit" class="btn btn-primary ml-2" value="Gửi">
            </div>
        </form>
    </div>


@endsection
