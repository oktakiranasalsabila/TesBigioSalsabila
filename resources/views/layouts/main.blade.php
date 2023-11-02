<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Sistem Informasi Mentoring Sekolah')</title>
<style>
    main > .container {
    padding: 60px 15px 0;
    }
</style>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

@include('layouts.header')

<!-- Begin page content -->
<main class="flex-shrink-0 bg-white">
  <div class="container">

    @yield('content')

  </div>
</main>

@include('layouts.footer')

    <script src="/js/bootstrap.bundle.min.js"></script>
  <!-- //  <script>feather.replace()</script> //   -->
  </body>
</html>
