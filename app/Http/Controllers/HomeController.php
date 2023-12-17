<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->orderby('tbl_product.product_id','desc')->get();

        return view('pages.home')->with('category', $cate_product)->with('brand', $brand_product)->with('all_product', $all_product);

    }
}
