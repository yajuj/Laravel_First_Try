@extends('layouts.main')
@section('content')
<div class="container mt-2">
  <div class="card mb-3">
    @if ($post->image)
    <img src="{{ url($post->image) }}" class="card-img-top" alt="...">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <div class="d-flex justify-content-between">
        <p>Author: {{$post->author}}</p>
        <p>Date: {{$post->created_at}}</p>
      </div>
      <p class="card-text">{{$post->content}}
      </p>
    </div>
    <div class="card-body d-flex justify-content-end align-items-center">
      @can('view', $post)
      <div class="d-flex gap-1">
        <a href="{{route('posts.edit', $post)}}" class="btn btn-primary">Update</a>
        <form action="{{route('posts.destroy',$post)}}" method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger">Remove</button>
        </form>
      </div>
      @endcan
    </div>
  </div>
</div>
@endsection