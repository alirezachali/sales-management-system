<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $todaySales = Sale::whereDate('created_at', $today)
            ->sum('final_price');

        $todayInvoices = Sale::whereDate('created_at', $today)
            ->count();

        $productsCount = Product::count();

        $lowStockProducts = Product::where('stock', '<=', 5)
            ->count();

        return view('dashboard.index', compact(
            'todaySales',
            'todayInvoices',
            'productsCount',
            'lowStockProducts'
        ));
    }
}
