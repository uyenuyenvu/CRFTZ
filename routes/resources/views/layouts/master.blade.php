<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="page-wrapper">
    @include('includes.header')
    @yield('content')
    @include('includes.goToContact')
    @include('includes.footer')
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 30,
    });
</script>
</body>
</html>
