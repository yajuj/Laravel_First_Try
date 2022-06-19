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
    <div class="card-body d-flex justify-content-arround align-items-center">
      <div><a href="{{route('posts.show',$post->id)}}" class=" btn btn-primary">Read more</a></div>
    </div>
  </div>
  @endforeach
  <div>
    {{$posts->links()}}
  </div>
</div>
@endsection