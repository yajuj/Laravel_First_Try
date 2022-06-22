<div class="card mb-3">
  <div class="card-body">
    <div class="d-flex flex-start align-items-center">
      <div>
        <h6 class="fw-bold text-primary mb-1">{{$comment->user->name}}</h6>
        <p class="text-muted small mb-0">
          Date: {{$comment->created_at}}
        </p>
      </div>
    </div>

    <p class="mt-3 mb-4 pb-2">
      {{$comment->content}}
    </p>

    @can('view', $comment)
    <div class="small d-flex justify-content-start gap-3">
      <a href="{{route('comments.edit',$comment->id)}}">
        Update
      </a>
      <form action="{{route('comments.destroy',$comment)}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" href="#!" class="text-danger border-0 bg-transparent text-decoration-underline"
          value="Delete" />
      </form>
    </div>
    @endcan
  </div>
</div>