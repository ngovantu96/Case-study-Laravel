<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WebController extends Controller
{
    public function index(){
        $wines = DB::table('products')->where('category_id','=',11)->get();
        $whiskys = Product::paginate(10);
        $cognacs = DB::table('products')->where('category_id','=',12)->get();
        return view('web.index',compact('wines','whiskys','cognacs'));
    }
    public function detail($id){
        $product = Product::findOrFail($id);
        return view('web.detail',compact('product'));
    }
    public function present() {
        $products = DB::table('products')->where('id','<',10)->get();
        return view('web.qoatet',compact('products'));
    }
    public function wine() {
        $products = DB::table('products')->where('category_id','=',11)->get();
        return view('web.vang_champagne',compact('products'));
    }
    public function whisky() {
        $products = DB::table('products')->where('category_id','=',10)->get();
        return view('web.whisky',compact('products'));
    }
    public function vodkal() {
        $products = DB::table('products')->where('category_id','=',13)->get();
        return view('web.vodkal',compact('products'));
    }
    public function cognac() {
        $products = DB::table('products')->where('category_id','=',14)->get();
        return view('web.cognac',compact('products'));
    }
}
