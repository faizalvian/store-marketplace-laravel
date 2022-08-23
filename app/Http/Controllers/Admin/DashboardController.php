<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index() {
        $user = User::count();
        $revenue = Transaction::sum('total_price');
        $transaction = Transaction::count();
        return view('pages.admin.home', [
            'user' => $user,
            'revenue' => $revenue,
            'transaction' => $transaction
        ]);
    }
}
