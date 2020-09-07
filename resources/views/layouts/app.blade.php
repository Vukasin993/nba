<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand" href="/posts">NBA</a>

  ss
    
    <a class="nav-link" href="{{ route('login') }}">Login</a>
             
    <a href="/logout">Logout</a>

    <a href="/register">Register</a>


</nav>

    <div class="container">
        @yield('content')
    </div>

   
    
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>