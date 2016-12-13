<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Config;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('authen');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $json_string = file_get_contents(Config::get('constants.url_api').'count');
        $data        = json_decode($json_string, true);
        $date        = array_keys($data['chartUsers']);
        $dataUser    = array_values($data['chartUsers']);
        $dataJob     = array_values($data['chartJobs']);
        return view('admin/index', compact('data', 'date', 'dataUser', 'dataJob'));
    }

    /**
     * Show the forms.
     *
     * @return \Illuminate\Http\Response
     */
    public function forms(Request $request)
    {
        return view('admin/forms');
    }

    /**
     * Show the charts.
     *
     * @return \Illuminate\Http\Response
     */
    public function charts(Request $request)
    {
        return view('admin/charts');
    }

    /**
     * Show the blank.
     *
     * @return \Illuminate\Http\Response
     */
    public function blank(Request $request)
    {
        return view('admin/blank');
    }

    /**
     * Show the blank.
     *
     * @return \Illuminate\Http\Response
     */
    public function buttons(Request $request)
    {
        return view('admin/buttons');
    }

    /**
     * Show the panels.
     *
     * @return \Illuminate\Http\Response
     */
    public function panels(Request $request)
    {
        return view('admin/panels');
    }

    /**
     * Show the notifications.
     *
     * @return \Illuminate\Http\Response
     */
    public function notifications(Request $request)
    {
        return view('admin/notifications');
    }

    /**
     * Show the typography.
     *
     * @return \Illuminate\Http\Response
     */
    public function typography(Request $request)
    {
        return view('admin/typography');
    }

    /**
     * Show the grid.
     *
     * @return \Illuminate\Http\Response
     */
    public function grid(Request $request)
    {
        return view('admin/grid');
    }

    /**
     * Show the icon.
     *
     * @return \Illuminate\Http\Response
     */
    public function icon(Request $request)
    {
        return view('admin/icon');
    }
}
