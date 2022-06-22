<div class="container mb-3">
  <form action="{{route('comments.store',$post->id)}}" method="POST">
    @csrf
    @method('POST')
    <div class="row d-flex justify-content-center">
      <div class="card">
        <div class="py-3">
          <div class="d-flex flex-start w-100">
            <div class="form-outline w-100">
              <div class="d-flex justify-content-between">
                @auth
                <p>Author: {{auth()->user()->name}}</p>
                @else
                <p>Author: Anonymous</p>
                @endauth
                <label class="form-label" for="textAreaExample">Comment</label>
              </div>
              <textarea class="form-control" name="content" rows="4">{{old('content')}}</textarea>
            </div>
          </div>
          <div class="float-end mt-2 pt-1">
            <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>