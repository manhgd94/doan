<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'books';

    protected $fillable = ['title', 'author_name', 'pages_count'];
}
