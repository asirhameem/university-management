<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
</head>

<body style="background: #edf2f7;">
    <nav>
        @yield('navbar')
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>