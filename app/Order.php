<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['user_id', 'job_id', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User')->select('name');
    }

    public function job()
    {
        return $this->belongsTo('App\Job')->select('name');
    }
}
