@extends('layouts.app')

@section('content')
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="heading" style="font-size:24px;text-align:center;">Breyta Bloggi</div><br>
		@include('common.errors')
		<form method="POST" action="/blogs/{{$blogs->id}}/update">
			{{ csrf_field() }}
			<div class="field">
	  			<label class="label">Title</label>
	  			<div class="control">
	    			<input class="input" name="title" type="title" placeholder="Title" value="{{ $blogs->title }}">
	  			</div>
			</div>

			<div class="field">
	  			<label class="label">Body</label>
	  			<div class="control">
	    			<textarea class="textarea" rows="7" name="body" type="body" placeholder="write something special">{{{ $blogs->body }}}</textarea><br>
                    <button class="button is-primary" style="background-color:#5bc0de; border-color:#46B8D9">Publish Changes</button>
	  			</div>
			</div>
		</form>
	</body>
	</html>
@endsection