<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login_a');
    }
    
    public function showLoginAdminForm()
    {
    return view('auth.login_admin');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function adminLogin(Request $request)
{
    $uname = $request->input('uname');
    $password = $request->input('password');
    if (empty($uname) || empty($password)) {
        return redirect()->back()->with('error', 'User Name and Password are required');
    }
    $user = DB::table('users')->where('user_name', $uname)->first();
    if ($user && Hash::check($password, $user->user_password)) {
        Session::put('user_name', $user->user_name);
        Session::put('user_id', $user->user_id);
        
        if ($user->user_name === 'admin') {
            return redirect()->route('admin.home');
        }
    } else {
        return redirect()->back()->with('error', 'Incorrect User Name or Password');
    }
}
    public function login(Request $request)
    {
        $uname = $request->input('uname');

        $password = $request->input('password');

        if (empty($uname) || empty($password)) {
            return redirect()->back()->with('error', 'User Name and Password are required');
        }

  $user = DB::table('users')
        ->where('user_name', $uname)
        ->orWhere('mail', $uname)
        ->first();
        if ($user && Hash::check($password, $user->user_password)) {
            Session::put('user_name', $user->user_name);
            Session::put('user_id', $user->user_id);
            
            if ($user->is_admin === 0) {
                return redirect()->route('home');
            } else if ($user->is_admin === 2){
                return redirect()->route('admin.home');
            } else {
                return redirect()->back()->with('error', 'Incorrect User Name or Password');}
        } else {
            return redirect()->back()->with('error', 'Incorrect User Name or Password');
        }
    }
    // app/Http/Controllers/AuthController.php
    public function logout(Request $request)
    {
        Auth::logout();  // Log the user out
        $request->session()->invalidate();  // Invalidate the session
        $request->session()->regenerateToken();  // Regenerate the CSRF token
    
        return redirect('login');
    }
    public function register(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'rg_name' => 'required|max:255',
            'rg_email' => 'required|email|unique:users,mail|max:255',
            'rg_password' => 'required|min:6|confirmed',
            'checkAgree' => 'accepted'  
        ]);
    
        try {
            $user = User::create([
                'user_name' => $request->rg_name,
                'mail' => $request->rg_email,
                'user_password' => Hash::make($request->rg_password),
                'is_admin' => false,
            ]);
        } catch (\Exception $e) {
            return back()->withErrors('Có lỗi xảy ra. Vui lòng thử lại sau.');
        }
        
            // Redirect to login page after successful registration
            return redirect()->route('login')->with('success', 'Đăng ký thành công!');
    
    }
    
}
