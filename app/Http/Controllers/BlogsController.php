<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogsController extends Controller
{
	public function __construct()
    {
      $this->middleware('auth')->except('index', 'home', 'show');
    }

    public function index()
    {
      $blogs = Blog::latest()->get();

    	return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
    	$blogs = Blog::find($id);

    	return view('blogs.show', compact('blogs'));
   	}

    public function create()
    {
    	return view('blogs.create');
    }

    public function store(Request $request)
    {
     
      $this->validate($request, [
        'title' => 'required|max:40',
        'body' => 'required|min:20',
      ]);
      
       Blog::create([
        'title' => $request['title'],
        'body' => $request['body'],
        'user_id' => auth()->id()
      ]);

      return redirect('/blogs');
    }
}
