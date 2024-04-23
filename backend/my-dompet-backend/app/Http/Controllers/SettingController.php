<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $active = 'setting';
        $title = 'Setting';
        return view('admin.setting', compact('active', 'title'));
    }
}
