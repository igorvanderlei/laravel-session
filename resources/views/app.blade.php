<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">Laravel</a>
      </div>
    </nav>
    @auth
        Bem vindo
    @endauth
    <div class="container" style="padding-top: 40px">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="list-group">
            <a class='list-group-item list-group-item-action' href="#">Escrever</a>
            <a class='list-group-item list-group-item-action ' href="#">Entrada</a>
            <a class='list-group-item list-group-item-action'  href="#">Saída</a>
          </div>
        </div>
        <div class="col-md-9">
          @yield('content')
        </div>
      </div>
    </div>
</body>



</html>
