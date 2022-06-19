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
        @include('layouts.navigation')
        @auth
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="btn btn-outline-success" type="submit">Logout</button>
        </form>
        @else
        <a class="btn btn-outline-success" href="{{ route('login') }}" type="submit">Login</a>
        @endauth
      </div>
    </div>
  </nav>
  <main>
    @yield('content')
  </main>
</body>

</html>