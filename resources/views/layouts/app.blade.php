<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name') }} @yield('title')</title>
  @php
  $num = rand(0,5);
  $favi = "favicon";
  if($num !== 0){
    $favi .= strval($num);
  }
  $favi .= ".ico";
  @endphp
  {{--  <link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">  --}}
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  
  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <header class="nav">
    <img src="{{ asset('logo-01.svg') }}" alt="Logo">
    <nav class="nav-main">
      @guest
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      @else
      <a class="nav-link">
        {{ Auth::user()->name }}
      </a>
      <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      @endguest
    </nav>
  </header>
  
  
  <main>
    @yield('content')
  </main>
  
  <footer>
  </footer>
  @yield('scripts')
</body>
</html>
