<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use DB;

class LikesController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function store(Comment $comment)
	{
		$comment->likes()->toggle(auth()->id());
		
		return back();
	} 
}
