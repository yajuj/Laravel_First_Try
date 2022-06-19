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
      <div>
        <a href="#" class="btn btn-danger">Remove</a>
        <a href="{{route('posts.edit',$post)}}" class="btn btn-primary">Update</a>
      </div>
      @endcan
    </div>
  </div>
</div>
@endsection