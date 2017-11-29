@extends('layouts.app')

@section('content')
<div class="card article">
  <div class="card-content">
    <div class="media">
      @if ( auth()->id() == $blogs->user_id )
      <div class="dropdown is-hoverable">
        <div class="dropdown-trigger">
          <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
            <span class="icon is-small">
              <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
          <div class="dropdown-content">
            <a href="/blogs/{{ $blogs->id }}/edit" class="dropdown-item">
              Edit
            </a>
            <a href="/blogs/{{ $blogs->id }}/delete" class="dropdown-item">
              Delete
            </a>
          </div>
        </div>
      </div>
      @endif
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
<br>
  
  <article class="media">
  @forelse($blogs->comments()->latest()->get() as $comment)
  <div class="media-content">
    <div class="content">
      <p>
        <strong>{{ $comment->user->name }}</strong>
        <br>
        {{ $comment->text }}
        <br>
        <small>
          <form method="POST" action="/blogs/{{ $comment->id }}/like">
            {{ csrf_field() }}
            <button>Like   </button>
          ·  {{ $comment->likes()->count() }} {{ str_plural('like', $comment->likes()->count() ) }}
          </form> 
          · {{ $comment->created_at->diffForHumans() }}
        </small>
      </p>
    </div>

    @empty
      <p class="has-text-centered">  Be the first one to comment </p>
    
    @endforelse
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