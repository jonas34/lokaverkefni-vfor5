<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth')->except('show');
  }  
	
  public function show($id)
	{
      $comments = Comment::find($id);

      return view('blogs.show', compact('comment'));
	}

    public function store(Request $request, $id)
    {
 		Comment::create([
        	'text' => $request->text,
        	'blog_id' => $id,
        	'user_id' => auth()->id()
      	]);

      	return back(); 
    }
}

