<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Comment;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
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
        $comments = Comment::all();
        foreach ($comments as $comment) {
            $comment->job;
            $comment->user;
            $comment->user_comment;
        }
        
        return $comments;
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

        $comment = new Comment;

        $comment->content         = $request->get('content');
        $comment->user_id         = $request->get('user_id');
        $comment->user_comment_id = $currentUser->id;
        $comment->job_id          = $request->get('job_id');

        if($comment->save())
            return $this->response->created();
        else
            return $this->response->error('could_not_create_comment', 500);
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

        $comment = Comment::find($id);
        $comment->job;
        $comment->user;

        if(!$comment)
            throw new NotFoundHttpException; 

        return $comment;
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

        $comment = Comment::find($id);
        if(!$comment)
            throw new NotFoundHttpException;

        $comment->fill($request->all());

        if($comment->save())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_update_comment', 500);
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

        $comment = Comment::find($id);

        if(!$comment)
            throw new NotFoundHttpException;

        if($comment->delete())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_delete_comment', 500);
    }
}
