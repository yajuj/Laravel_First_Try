<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
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
              <a class="nav-link active" aria-current="/about" href="#">About</a>
            </li>
          </ul>
          @if (mb_ereg('login',url()->current()))
          <a class="btn btn-outline-success" href="{{ route('register') }}">Registration</a>
          @else
          <a class="btn btn-outline-success" href="{{ route('login') }}">Login</a>
          @endif
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>

</html>