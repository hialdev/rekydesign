<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('metakey')">
    <meta name="description" content="@yield('metadesc')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('metadesc')">
    <meta property="og:image" content="@yield('metaimage')">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('metadesc')">
    <meta name="twitter:image" content=" @yield('metaimage')">

    <link rel="icon" href="/src/img/reky-logo.png?v=4" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/src/css/bootstrap.css">

    <!-- Custom -->
    <link rel="stylesheet" href="/src/css/style.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <title>@yield('title')</title>
  </head>
  <body style="background-color:#F7F7F7">
    @include('layouts.nav')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/src/js/carousel.js"></script>
    <script src="/src/js/app.js"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

  </body>
</html>