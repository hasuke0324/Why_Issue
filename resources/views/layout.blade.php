<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{{asset('/assets/css/list.css')}}">
</head>
<body>
  <header>
    @include('header')
  </header>
  <main>
    @yield('list')
  </main>
  <footer class="fixed__bottom">
    @include('footer')
  </footer>
</body>
</html>