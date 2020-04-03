<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function create(){
        return view('admin/food-categories/create');
    }

    public function edit(){
        return view('admin/food-categories/edit');
    }
}
