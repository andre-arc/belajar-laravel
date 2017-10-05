@extends('template.default')

@section('content')
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      @foreach ($posts as $post)
        <div class="post-preview">
          <a href="{{ route('post.show', $post->slug) }} ">
            <h2 class="post-title">
              {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
              {!! str_limit($post->content, 150, '...') !!}
            </h3>
          </a>
          <p class="post-meta">Posted on {{ date('d-M-Y', strtotime($post->created_at)) }}</p>
        </div>
        <hr>
      @endforeach
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>

@endsection