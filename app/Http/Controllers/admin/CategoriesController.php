<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('admin.Categories', [
            'categories' => $categories
        ]);
    }
}
