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
      $blogs = Blog::latest()->paginate(10);

    	return view('blogs.index', compact('blogs'));
    }

    public function show(Blog $blogs)
    {

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
      
      session()->flash('message', 'Your blog was successfully posted!');

       Blog::create([
        'title' => $request['title'],
        'body' => $request['body'],
        'user_id' => auth()->id()
      ]);

      return redirect('/blogs');
    }

    public function edit(Blog $blogs)
    {
  
      if ( auth()->id() == $blogs->user_id ) {
        return view('blogs.update', compact('blogs'));
      }
  
        session()->flash('edit_message', 'You must be the owner of this blog to do this action!');
        
     
    }

    public function update(Blog $blogs, Request $request)
    {
      $blogs->update($request->all());;
     
      return redirect('/blogs');
    }

    public function delete(Blog $blogs)
    {


       if ( auth()->id() == $blogs->user_id ) {
       
        $blogs->delete();

 
      }
      
      session()->flash('deletion_message', 'Your blog has been deleted!');
      return redirect('/blogs');
  
    }
}
