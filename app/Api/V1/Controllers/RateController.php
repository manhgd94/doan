<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Rate;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Http\Requests;

class RateController extends Controller
{
    use Helpers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $currentUser = JWTAuth::parseToken()->authenticate();
        $rates = Rate::all();
        foreach ($rates as $rate) {
            $rate->user;
        }
        return $rates;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentUser = JWTAuth::parseToken()->authenticate();

        $rate = new Rate;

        $rate->rate = $request->get('rate');

        if($currentUser->rate()->save($rate))
            return $this->response->created();
        else
            return $this->response->error('could_not_create_book', 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $currentUser = JWTAuth::parseToken()->authenticate();

        $rate = Rate::find($id);
        $rate->user;

        if(!$rate)
            throw new NotFoundHttpException; 

        return $rate;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $currentUser = JWTAuth::parseToken()->authenticate();

        $rate = Rate::find($id);
        if(!$rate)
            throw new NotFoundHttpException;

        $rate->rate ++;

        if($rate->save())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_update_rate', 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $currentUser = JWTAuth::parseToken()->authenticate();

        $rate = Rate::find($id);

        if(!$rate)
            throw new NotFoundHttpException;

        if($rate->delete())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_delete_rate', 500);
    }
}
