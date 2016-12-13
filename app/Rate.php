<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
	protected $table = 'rates';

    protected $fillable = ['user_id', 'rate'];

    public function user()
    {
        return $this->belongsTo('App\User')->select('name');
    }
}
