<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Category;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
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
        $categories = Category::all();

        return $categories;
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

        $category    = new Category;

        $category->name = $request->get('name');
        $file = $request->file('image');
        $filename = str_random(6).$file->getClientOriginalName();

        $category->image = $filename;

        if($category->save())
        {
            $file->move(public_path().'/images/categories', $filename);
            return $this->response->created();
        } else
            return $this->response->error('could_not_create_category', 500);
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

        $category = Category::find($id);
        $category->jobs;

        if(!$category)
            throw new NotFoundHttpException; 

        return $category;
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

        $category = Category::find($id);
        if(!$category)
            throw new NotFoundHttpException;

        $category->fill($request->all());
        if ($file = $request->file('image')) {
            $filename = str_random(6).$file->getClientOriginalName();

            $category->image = $filename;
            
            $file->move(public_path().'/images/categories', $filename);
        }

        if($category->save())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_update_category', 500);
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

        $category = Category::find($id);

        if(!$category)
            throw new NotFoundHttpException;

        if($category->delete())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_delete_category', 500);
    }
}
