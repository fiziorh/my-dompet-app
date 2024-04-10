<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5|max:100'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        Alert::toast('Register is Success, Login Now!', 'success');
        return redirect()->back();
    }
}