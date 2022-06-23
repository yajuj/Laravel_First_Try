@extends('layouts.main')
@section('content')
<div class="container mt-3">
  <form action="{{route('comments.update',$comment)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="row d-flex justify-content-center">
      <div class="card">
        <div class="py-3">
          <div class="d-flex flex-start w-100">
            <div class="form-outline w-100">
              <div class="d-flex justify-content-between">
                <p>Author: {{auth()->user()->name}}</p>
                <label class="form-label" for="textAreaExample">Comment</label>
              </div>
              <textarea class="form-control" name="content" rows="4">{{
               $comment->content
              }}</textarea>
            </div>
          </div>
          <div class="float-end mt-2 pt-1">
            <button type="submit" class="btn btn-primary btn-sm">Update comment</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection