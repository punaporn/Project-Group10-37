<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin/product/product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/product/addproduct');
    }

    public function add(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $destinationPath = public_path() . '/admin/product';
            $file->move($destinationPath, $fileName);
            $product->image = $fileName;
        } else {
            $product->image = 'default.png';
        };


        $product->save();
        return redirect()->route('product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin\product\editeproduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $filename = $product->image;
        File::delete(public_path() . '/admin/product/' . $filename);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $destinationPath = public_path() . '/admin/product';
            $file->move($destinationPath, $fileName);
            $new = $fileName;
        } else {
            $new = 'default.png';
        };
        Product::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'image' => $new,
            ]
        );
        return redirect()->route('product');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $filename = $product->image;
        File::delete(public_path() . '/admin/product/' . $filename);
        Product::destroy($id);
        return redirect()->route('product');
    }
}
