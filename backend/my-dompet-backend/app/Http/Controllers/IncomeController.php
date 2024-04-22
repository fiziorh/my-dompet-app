<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $active = 'income';
        $title = 'Income';
        return view('admin.income', compact('active', 'title'));
    }
}
