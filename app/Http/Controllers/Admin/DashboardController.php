<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TravelPackage;
use App\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'pending' => Transaction::where('transaction_status', '=', 'PENDING')->count(),
            'success' => Transaction::where('transaction_status', '=', 'SUCCESS')->count(),
        ]);
    }
}
