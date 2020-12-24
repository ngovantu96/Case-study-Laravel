<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.orders.list',compact('orders'));
    }
    public function orderDetail($id){
        $orderDetails = DB::table('order_details')
            ->join('products','products.id' ,'=', 'order_details.product_id')
            ->join('orders','orders.id','=','order_details.order_id')
            ->select('order_details.*','products.name','orders.*')->get();
        return view('admin.orders.detail',compact('orderDetails'));
    }
    public function orderDestroy($id){
        $orderDelete = Order::FindOrFail($id);
        $orderDelete->delete();
        return redirect()->route('order.index');
    }

    public function orderdetailDestroy($id){
        DB::table('order_details')->where('order_id', '=', $id)->delete();
        return redirect()->route('order.detail');
    }

}
