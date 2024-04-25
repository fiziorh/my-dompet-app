<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\Spending;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
            // retrieve income and spending records
            $incomeRecords = Income::latest()->limit(5)->get();
            $spendingRecords = Spending::latest()->limit(5)->get();

            //calculate main balance
            $totalIncome = Income::sum('nominal');
            $totalSpending = Spending::sum('nominal');
            $mainBalance = $totalIncome - $totalSpending;

            return view('admin.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'main_balance' => $mainBalance,
            'income_records' => $incomeRecords,
            'spending_records' => $spendingRecords
            ]);
    
    }
}
