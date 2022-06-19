<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a class="nav-link active" aria-current="/" href="{{route('main.index')}}">Home</a>
  </li>
  @if (auth()->check())
  <li class="nav-item">
    <a class="nav-link active" aria-current="/posts" href="{{route('posts.index')}}">Posts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="/addpost" href="{{route('posts.create')}}">Add Post</a>
  </li>
  @endif
  <li class="nav-item">
    <a class="nav-link active" aria-current="/about" href="{{route('main.about')}}">About</a>
  </li>
</ul>