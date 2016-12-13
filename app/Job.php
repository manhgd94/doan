<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $table = 'jobs';

    protected $fillable = ['name', 'description', 'image', 'salary', 'position', 'status', 'user_id', 'category_id', 'latitude', 'longitude'];

    public function user()
    {
        return $this->belongsTo('App\User')->select('name');
    }

    public function category()
    {
        return $this->belongsTo('App\Category')->select('name');
    }
}
