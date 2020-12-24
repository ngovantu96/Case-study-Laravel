<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Cart;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddCart(Request $request, $id){
        $product = Product::findOrFail($id);
        if($product != null){
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
            $request->session()->put('Cart',$newCart);
        }
        return redirect()->back()->with('them thanh cong');
    }
    public function MinusCart(Request $request, $id){
        $product = Product::findOrFail($id);
        if($product != null){
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->MinusCart($product, $id);
            $request->session()->put('Cart',$newCart);
        }
        return redirect()->back()->with('them thanh cong');
    }

    public function showCart(){
        $cart = session('Cart');
        return view('web.cart',compact('cart'));
    }
    public function DeleteItemCart(Request $request, $id){
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->DeleteCart($id);
            if(Count($newCart->products) > 0){
                $request->session()->put('Cart',$newCart);
            }else{
                $request->session()->forget('Cart');
            }

        return redirect()->back();
    }
    public function showCheckout(){
        return view('web.checkout');
}
    public function checkout(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();

        $order = new Order();
        $order->customer_id = $customer->id;
        $order->status = 1;
        $order->save();

        $order_id =$order->id;
        $oldCart = session('Cart') ? session('Cart'): null;
        $cart = new Cart($oldCart);
        foreach($cart->products as $item) {
//            dd($item);
            $product_id = $item['productInfo']->id;
            $quantity = $item['qty'];
            $price = $item['productInfo']->price;
            DB::table('order_details')->insert([
                'order_id' => $order_id,
                'product_id'=>$product_id,
                'quantity' => $quantity,
                'price' => $price,
            ]);
        }
        session()->forget('Cart');
        $message = "Order Success!";
        return redirect()->route('web.index')->with('success',$message);

    }
}


