<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpendingController extends Controller
{
    public function index()
    {
        $active = 'spending';
        $title = 'Spending';
        return view('admin.spending', compact('active', 'title'));
    }
}
