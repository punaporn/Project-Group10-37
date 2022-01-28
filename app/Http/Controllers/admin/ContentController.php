<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    public function index()
    {
        $content = Content::all();
        return view('admin/content',['content' => $content]);
    }
}
