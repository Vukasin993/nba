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
  <a class="navbar-brand" href="/teams">NBA</a>


  <ul class="navbar-nav ml-auto d-flex flex-row bd-highlight mb-3 ">
            <!-- Authentication Links -->
            @guest
              <li class="nav-item">
                <a class="nav-link " href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="{{ route('register') }}">Register</a>
                </li>
    
            @else
              <li class="nav-item">
                <a class="dropdown-item" href="/logout"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="/logout" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            @endguest
          </ul>
  
    <!--
    <a class="nav-link" href="{{ route('login') }}">Login</a>
             
    <a href="/logout">Logout</a>

    <a href="/register">Register</a>
-->

</nav>

    <div class="container">
        @yield('content')
    </div>

   
    
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>