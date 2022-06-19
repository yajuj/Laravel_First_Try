@extends('layouts.main')
@section('content')
<div class="container mt-2">
  <form class="d-flex gap-2 my-3">
    <input type="text" name="title" class="form-control-plaintext form-control border">
    <button type="submit" class="btn btn-primary ">Search</button>
  </form>
  @foreach($posts as $post)
  <div class="card mb-3">
    @if ($post->image)
    <div class="overflow-hidden" style="height: 200px;">
      <img src="{{ url($post->image) }}" class="card-img-top" alt="...">
    </div>
    @endif

    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <div class="d-flex justify-content-between">
        <p>Author: {{$post->author}}</p>
        <p>Date: {{$post->created_at}}</p>
      </div>
      <p class="card-text">Description: {{mb_strimwidth($post->description,0,50)}}...
      </p>
    </div>
    <div class="card-body d-flex justify-content-between align-items-center">
      <div><a href="{{route('posts.show',$post->id)}}" class=" btn btn-primary">Read more</a></div>
      <div class="d-flex gap-1">
        <a href="{{route('posts.edit', $post)}}" class="btn btn-primary">Update</a>
        <form action="{{route('posts.destroy',$post)}}" method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger">Remove</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach
  <div>
    {{$posts->withQueryString()->links()}}
  </div>
</div>
@endsection