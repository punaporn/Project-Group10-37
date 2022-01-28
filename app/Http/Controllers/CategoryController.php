<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Category = Category::all();
        return view('admin/Category/Category', compact('Category'));
    }

    public function create(Request $request)
    {
        $Category = new Category();
        $Category->name = $request->name;


        $Category->save();
        return redirect()->route('category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {

        Category::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'name' => $request->name,
            ]
        );
        return redirect()->route('category');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category');
    }
}
