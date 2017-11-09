@extends('layouts.app')

@section('content')
<div class="card article">
  <div class="card-content">
    <div class="media">
      <div class="media-content has-text-centered">
        <p class="title article-title" style="font-family:cursive;">{{ $blogs->title }}</p>
        <p class="subtitle is-6 article-subtitle">
          by {{ $blogs->user->name }}  
          </p>
      </div>
    </div>

    <div class="content article-body">
      <p></p>
      <h3 class="has-text-centered"></h3>
        <p style="font-family:cursive;"> 
          {{ $blogs->body }}
        </p>
    </div>
  </div>
</div>
  
  <article class="media">
  @foreach($blogs->comments()->latest()->get() as $comment)
  <div class="media-content">
    <div class="content">
      <p>
        <strong>{{ $comment->user->name }}</strong>
        <br>
        {{ $comment->text }}
        <br>
        <small><a>Like</a> · {{ $comment->created_at->diffForHumans() }}</small>
      </p>
    </div>
    @endforeach
  </article>
  
  <article class="media">
  <div class="media-content">
    <form method="POST" action="/blogs/{{ $blogs->id }}/comment">
      {{ csrf_field() }}
    <div class="field">
      <p class="control">
        <textarea class="textarea" name="text" placeholder="Add a comment..."></textarea>
      </p>
    </div>
    <div class="field">
      <p class="control">
        <button class="button">Post comment</button>
      </p>
    </div>
    </form>
  </div>
</article>

@endsection