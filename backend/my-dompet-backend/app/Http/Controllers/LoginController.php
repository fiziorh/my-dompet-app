<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authentication(Request $request){
        $credential = $request->validate([
            'email' =>'required|email:dns',
            'password' => 'required'
        ]);
    

    if (Auth::attempt($credential)){
        $user = User::where('email', $credential['email'])->first();
    
    if ($user) {
        $request->session()->regenerate();
    
    Alert::success('Login success')->showConfirmButton(false);

                return redirect()->intended('/dashboard')->with('alert', 'Login success');
            } else {
                Alert::error('Login failed', 'Invalid email or password')->showConfirmButton(false);
                return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password']);
            }
        } else {
            Alert::error('Login failed', 'Invalid email or password')->showConfirmButton(false);
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password']);
        }
    }
}
