<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('pages.dashboard.products');
    }

    public function detail() {
        return view('pages.dashboard.product-details');
    }

    public function create() {
        return view('pages.dashboard.product-create');
    }
}
