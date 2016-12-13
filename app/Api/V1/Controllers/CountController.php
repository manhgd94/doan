<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\User;
use App\Job;
use App\Category;
use App\Comment;
use App\Rate;
use App\Order;

use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class CountController extends Controller
{
    use Helpers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::select([
        DB::raw("DATE_FORMAT(created_at, '%Y-%m') AS `date`"),
        DB::raw("DATE_FORMAT(created_at, '%M') AS `month`"),
        DB::raw('COUNT(id) AS count'),
        ])
        ->whereYear('created_at', '=', date('Y'))
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get()->toArray();

        $job = Job::select([
        DB::raw("DATE_FORMAT(created_at, '%Y-%m') AS `date`"),
        DB::raw("DATE_FORMAT(created_at, '%M') AS `month`"),
        DB::raw('COUNT(id) AS count'),
        ])
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get()->toArray();

        $resultUser = array_combine(array_column($user, 'month'), array_column($user, 'count'));
        $resultJob  = array_combine(array_column($job,  'month'), array_column($job,  'count'));

        //compare user vs job
        $userDiffJob = array_diff_key($resultUser,$resultJob);
        $userDiffJob = array_fill_keys(array_keys($userDiffJob), 0);
        //compare job vs user
        $jobDiffUser = array_diff_key($resultJob,$resultUser);
        $jobDiffUser = array_fill_keys(array_keys($jobDiffUser), 0);
        //add diff
        $resultUser += $jobDiffUser;
        $resultJob  += $userDiffJob;
        //sort
        uksort($resultUser, function($a, $b) {
            $monthA = date_parse($a);
            $monthB = date_parse($b);

            return $monthA["month"] - $monthB["month"];
        });
        uksort($resultJob, function($a, $b) {
            $monthA = date_parse($a);
            $monthB = date_parse($b);

            return $monthA["month"] - $monthB["month"];
        });


        $data = [
            'chartUsers' => $resultUser,
            'chartJobs'  => $resultJob,
            'users'      => array_sum($resultUser),
            'jobs'       => array_sum($resultJob),
            'categories' => Category::count(),
            'comments'   => Comment::count(),
            'rates'      => Rate::count(),
            'orders'     => Order::where('status', 1)->count(),
        ];
        return $data;
    }
}
