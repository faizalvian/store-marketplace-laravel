<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        return view('pages.dashboard.transactions');
    }

    public function detail() {
        return view('pages.dashboard.transaction-details');
    }
}
