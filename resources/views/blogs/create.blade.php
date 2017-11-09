@extends('layouts.app')

@section('content')
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="heading" style="font-size:24px;text-align:center;">Skrifa Nýtt Blogg</div><br>
		<form method="POST" action="/blogs">
			{{ csrf_field() }}
			<div class="field">
	  			<label class="label">Title</label>
	  			<div class="control">
	    			<input class="input" name="title" type="title" placeholder="Title">
	  			</div>
			</div>

			<div class="field">
	  			<label class="label">Body</label>
	  			<div class="control">
	    			<textarea class="textarea" rows="7" name="body" type="body" placeholder="write something special"></textarea><br>
                    <button class="button is-primary" style="background-color:#5bc0de; border-color:#46B8D9">Publish</button>
	  			</div>
			</div>
		</form>
	</body>
	</html>
@endsection