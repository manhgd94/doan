<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Order;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
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
        $orders = Order::all();
        foreach ($orders as $order) {
            $order->user;
            $order->job;
        }
        return $orders;
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

        $order = new Order;

        $order->user_id = $currentUser->id;
        $order->job_id  = $request->get('job_id');

        if($order->save())
            return $this->response->created();
        else
            return $this->response->error('could_not_create_order', 500);
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

        $order = Order::find($id);
        $order->user;
        $order->category;

        if(!$order)
            throw new NotFoundHttpException; 

        return $order;
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

        $order = Order::find($id);
        if(!$order)
            throw new NotFoundHttpException;

        $order->fill($request->all());

        if($order->save())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_update_order', 500);
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

        $order = Order::find($id);

        if(!$order)
            throw new NotFoundHttpException;

        if($order->delete())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_delete_order', 500);
    }
}
