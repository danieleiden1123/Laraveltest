<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('admin.app');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function layout()
    {
        return view('admin.layout');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function createProduct()
    {
        return view('admin.project.create');
    }
}
