@extends('layouts.main')
@section('content')
<div class="container mt-2">
  <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Title</label>
      <input required type="text" value="{{old('title')}}" class="form-control" name="title"
        placeholder="Введите название поста...">
    </div>
    @error('title')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Description</label>
      <input required type="text" value="{{old('description')}}" class="form-control" name="description"
        placeholder="Введите краткое описание поста...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Content</label>
      <textarea required class="form-control" name="content" style="resize: none;"
        rows="3">{{old('content')}}</textarea>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Pick you'r image</label>
      <input class="form-control" type="file" accept="image/jpeg,image/png,image/gif" name="photo">
    </div>
    <div class="mb-3 text-end">
      <button class="btn btn-primary" type="submit">Add post</button>
    </div>
  </form>
</div>
@endsection