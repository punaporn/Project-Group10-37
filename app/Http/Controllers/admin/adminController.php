<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
{
    $user = User::all();
    return view('admin/dashboard',['user' => $user]);
}


}
