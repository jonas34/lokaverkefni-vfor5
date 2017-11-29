@extends('layouts.app')

@section('content')

@forelse($blogs as $blog)
<div class="card article">
  <div class="card-content">
    <div class="media">
      <div class="media-content has-text-centered">
        <p class="title article-title" style="font-family:cursive;">
          <a href="/blogs/{{ $blog->id }}">
            {{ $blog->title }}
          </a>
        </p>
        <p class="subtitle is-6 article-subtitle">
          by {{ $blog->user->name }}  
          </p>
      </div>
    </div>

    <div class="content article-body">
      <p></p>
      <h3 class="has-text-centered"></h3>
        <p style="font-family:cursive;">
           {{ $blog->body }}  
        </p>
    </div>
  </div>
@empty
  <p> No blogs available </p>
</div>
@endforelse
<hr>
  {{ $blogs->links() }}

@endsection