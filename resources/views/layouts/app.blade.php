<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootsrap@5.3.0/dist/css/bootsrap.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <div class="container mt-4">
         @yield('content')
    </div>
    
    @include('partials.footer')
</body>
</html>