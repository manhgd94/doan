<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Session;
use App\Http\Controllers\Controller;
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
            return redirect()->route('admin.index');
        } else {
            if ($request->query('token')) {
                    Session::set('token',$request->query('token'));
                    return redirect()->route('admin.index');
            } else {
                return view('admin/login');
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
        return redirect('/admin/login');
    }
}
