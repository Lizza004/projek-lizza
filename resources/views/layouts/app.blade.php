<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="http://localhost:5173/resources/css/app.css">

</head>

<body>
    @include('partials.header')


    @yield('content')    

    @include('partials.footer')
</body>
</html>