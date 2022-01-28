<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        return view('admin/product/index', compact('product'));
    }

    public function create(Request $request)
    {
        $product = new product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
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
        $product = product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $filename = $product->image;
        File::delete(public_path() . '/admin/product' . $filename);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $destinationPath = public_path() . '/admin/product';
            $file->move($destinationPath, $fileName);
            $new = $fileName;
        } else {
            $new = 'default.png';
        };
        product::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'name' => $request->name,
                'description' => $request->description,
                'image' => $new,
                'price' => $request->price,
                'category_id' => $request->category_id,


            ]
        );
        return redirect()->route('product');
    }

    public function destroy($id)
    {
        product::destroy($id);
        return redirect()->route('product');
    }
}
