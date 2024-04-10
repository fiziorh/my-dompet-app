<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();

            if ($user) {
                $request->session()->regenerate();
                $request->session()->put('email', $user->email);
                $request->session()->put('name', $user->name);
                Session::put('login_success', true);

                Alert::toast('Login is Success!', 'success');
                return redirect('/dashboard');
            } else {
                Alert::toast('Login failed, Invalid email or password', 'error');
                return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password']);
            }
        } else {
            Alert::toast('Login failed, Invalid email or password', 'error');
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Alert::toast('Logout Success, You have been logged out', 'success');

        return redirect('/login');
    }
}
