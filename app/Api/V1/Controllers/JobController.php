<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Job;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Http\Requests;

class JobController extends Controller
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
        $jobs = Job::all();
        foreach ($jobs as $job) {
            $job->user;
            $job->category;
        }
        return $jobs;
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

        $job = new Job;

        $job->name        = $request->get('name');
        $job->description = $request->get('description');

        $file = $request->file('image');
        $filename = str_random(6).$file->getClientOriginalName();

        $job->image       = $filename;
        $job->salary      = $request->get('salary');
        $job->position    = $request->get('position');
        $job->user_id     = $currentUser->id;
        $job->category_id = $request->get('category_id');
        $job->latitude    = $request->get('latitude');
        $job->longitude   = $request->get('longitude');

        if($job->save())
        {
            $file->move(public_path().'/images/jobs', $filename);
            return $this->response->created();
        } else
            return $this->response->error('could_not_create_job', 500);
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

        $job = Job::find($id);
        $job->user;
        $job->category;

        if(!$job)
            throw new NotFoundHttpException; 

        return $job;
    }

    /**
     * Search jobs.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $keyword      = Input::get('q');
        $salary_begin = Input::get('salary_begin');
        $salary_end   = Input::get('salary_end');
        $position     = Input::get('position');
        $category_id  = Input::get('category_id');
        
        //query to search
        $query        = Job::query();
        if ($keyword) {
            $query = $query->where(function ($query) use ($keyword) {
                        $query->where('name', 'like', '%'.$keyword.'%')
                              ->orWhere('description', 'like', '%'.$keyword.'%');
                     });
        }
        if ($salary_begin) {
            $query = $query->where('salary', '>=', $salary_begin);
        }
        if ($salary_end) {
            $query = $query->where('salary', '<=', $salary_end);
        }
        if ($salary_begin && $salary_end) {
            $query = $query->whereBetween('salary', [$salary_begin, $salary_end]);
        }
        if ($position) {
            $query = $query->where('position', 'like', '%'.$position.'%');
        }
        if ($category_id) {
            $query = $query->where('category_id', $category_id);
        }
        $jobs = $query->get();

        if ($jobs->count()) {
            return $jobs;
        } else {
            $message['message'] = 'We didn\'t find any result';
            return $message;
        }
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

        $job = Job::find($id);
        if(!$job)
            throw new NotFoundHttpException;

        $job->fill($request->all());
        if ($file = $request->file('image')) {
            $filename = str_random(6).$file->getClientOriginalName();

            $job->image = $filename;
            
            $file->move(public_path().'/images/jobs', $filename);
        }

        if($job->save())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_update_job', 500);
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

        $job = Job::find($id);

        if(!$job)
            throw new NotFoundHttpException;

        if($job->delete())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_delete_job', 500);
    }
}
