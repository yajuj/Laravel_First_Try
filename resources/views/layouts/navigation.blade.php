<nav class="navbar navbar-expand-lg bg-light border">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="/" href="{{route('main.index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="/posts" href="{{route('post.index')}}">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="/about" href="#">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="/about" href="#">About</a>
        </li>
      </ul>
      <button class="btn btn-outline-success">Login</button>
    </div>
  </div>
</nav>