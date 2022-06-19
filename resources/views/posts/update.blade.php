@extends('layouts.main')
@section('content')
<div class="container mt-2">
  <form action="{{route('posts.update',$post)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Title</label>
      <input type="text" class="form-control" value="{{$post->title}}" name="title"
        placeholder="Введите название поста...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Description</label>
      <input type="text" class="form-control" value="{{$post->description}}" name="description"
        placeholder="Введите краткое описание поста...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Content</label>
      <textarea class="form-control" name="content" style="resize: none;" rows="3">{{$post->content}}</textarea>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Pick you'r image</label>
      <input class="form-control" value="{{$post->image??''}}" name="photo" accept="image/jpeg,image/png,image/gif"
        type="file">
    </div>
    <div class="mb-3 text-end">
      <button class="btn btn-primary" type="submit">Update</button>
    </div>
  </form>
</div>
@endsection