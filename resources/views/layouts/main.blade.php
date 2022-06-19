<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Blog</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light border">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        @if (auth()->check())
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="btn btn-outline-success" type="submit">Logout</button>
        </form>
        @else
        <a class="btn btn-outline-success" href="{{ route('login') }}" type="submit">Login</a>
        @endif
      </div>
    </div>
  </nav>
  <main>
    @yield('content')
  </main>
</body>

</html>