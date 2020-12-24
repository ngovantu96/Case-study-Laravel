@extends('admin.master')
@section('page-title','Danh Sách Đơn Hàng')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi Tiết Đơn Hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Danh Sách Đơn Hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="col-12">
                            @if (Session::has('success'))
                                <p class="text-success">
                                    <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                                </p>
                            @endif
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Trạng thái</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                    <th>Hành Động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orderDetails as $key=>$orderDetail)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $orderDetail->customer_id }}</td>
                                        <td>{{ $orderDetail->name }}</td>
                                        <td>{{ ($orderDetail->status == 1) ? 'Đã xác nhận' : 'chưa xác nhận' }}</td>
                                        <td>{{ $orderDetail->quantity }}</td>
                                        <td>{{ $orderDetail->price }}</td>
                                        <td>
                                            <a href="{{route('order.order-detail-delete',$orderDetail->id)}}">
                                                <button type="button" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')" >
                                                    Xoá
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
