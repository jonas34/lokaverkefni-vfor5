<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['text', 'user_id', 'blog_id'];
    protected $table = 'comments';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
