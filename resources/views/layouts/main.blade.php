<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>SiKabada | {{ $title }}</title>

        <!-- LOGO TITLE -->
        <link rel="icon" href="/img/LOGO.svg" type="image/x-icon" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

        <!-- FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

        <!-- CSS -->
        <link rel="stylesheet" href="/style/style.css" />
        <link rel="stylesheet" href="/style/eventdetail.css" />
        <link rel="stylesheet" href="/style/kontak.css" />
        <link rel="stylesheet" href="/style/tambahkata.css" />
        <link rel="stylesheet" href="/style/tentangsikabada.css" />
        <link rel="stylesheet" href="/style/blogdetail.css" />

        <!-- JQUERY -->
        <script type="text/javascript" src="/js/jquery.js"></script>

        <!-- LOADMORE JQUERY -->
        <script type="text/javascript" src="/js/loadmore.js"></script>

    </head>

    <body>
        
        @include('partials.navbar')
        @yield('container')
        @include('partials.footer')

        <!-- JS -->
        <script src="/js/script.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
