@extends('layouts.main')
@section('content')
<div class="container mt-2">
  <form class="d-flex gap-2 my-3">
    <input type="text" name="title" class="form-control-plaintext form-control border">
    <button type="submit" class="btn btn-primary ">Search</button>
  </form>
  @foreach($posts as $post)
  @include('posts.post')
  @endforeach
  <div>
    {{$posts->withQueryString()->links()}}
  </div>
</div>
@endsection