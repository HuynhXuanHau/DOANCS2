<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('users.homeUser');
    }
    // public function profile()
    // {
        // return view('users.homeUser');
    // }
}
