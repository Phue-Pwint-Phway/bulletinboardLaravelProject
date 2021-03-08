<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('login');
    }
    public function checklogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:3',
        ]);

        $login = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        if(Auth::attempt([$login]))
        {
            return redirect('posts.postlist');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    public function  successlogin()
    {
        return view('posts.postlist');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
