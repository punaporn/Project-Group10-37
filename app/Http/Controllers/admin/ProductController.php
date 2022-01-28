<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
{
    $product = Product::all();
    return view('admin/Product',['product' => $product]);
}


}
