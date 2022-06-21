<div class="card mb-3">
  @if ($post->image)
  <div class="overflow-hidden" style="height: 200px;">
    <img src="{{ url($post->image) }}" class="card-img-top" alt="...">
  </div>
  @endif

  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <div class="d-flex justify-content-between">
      <p>Author: {{$post->user->name}}</p>
      <p>Date: {{$post->created_at}}</p>
    </div>
    <p class="card-text">Description: {{mb_strimwidth($post->description,0,50)}}...
    </p>
  </div>
  <div class="card-body d-flex justify-content-between align-items-center">
    <div><a href="{{route('posts.show',$post->id)}}" class=" btn btn-primary">Read more</a></div>
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