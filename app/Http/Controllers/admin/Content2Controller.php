<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content2;

class Content2Controller extends Controller
{
    public function index()
    {
        $content2 = Content2::all();
        // dd($content2);
        return view('admin/content2',['content' => $content2]);
    }
}
