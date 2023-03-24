<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('dist/css/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/flat-ui.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/starter-template.css') }}">
  <link rel="shortcut icon" href="{{ asset('dist/img/favicon.ico') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @yield('styles')
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">コーチリスト</a>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
    @yield('content')
  </div>
  @yield('table')
  <footer class="footer">
    <div class="container">
      <p class="text-muted">コーチリスト</p>
    </div>
  </footer>
  <script src="{{ asset('dist/js/vendor/jquery.min.js') }}"></script>
  <script src="{{ asset('dist/js/vendor/video.js') }}"></script>
  <script src="{{ asset('dist/js/flat-ui.min.js') }}"></script>
  <script src="{{ asset('assets/js/prettify.js') }}"></script>
  <script src="{{ asset('assets/js/application.js') }}"></script>
  @yield('scripts')
</body>
</html>