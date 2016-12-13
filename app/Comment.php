<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comments';

    protected $fillable = ['content', 'user_id', 'user_comment_id', 'job_id'];

    public function job()
    {
        return $this->belongsTo('App\Job')->select('name');
    }

    public function user()
    {
        return $this->belongsTo('App\User')->select('name');
    }

    public function user_comment()
    {
        return $this->belongsTo('App\User')->select('name');
    }
}
