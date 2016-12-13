<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Session;
use Illuminate\Http\Request;

class AuthenController extends Controller
{

    /**
     * Login
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if (Session::get('token')) {
            return redirect()->route('home');
        } else {
            if ($request->query('token')) {
                    Session::set('token',$request->query('token'));
                    return redirect()->route('home');
            } else {
                return view('auth/login');
            }
        }
    }

    /**
     * Logout
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/');
    }
}
