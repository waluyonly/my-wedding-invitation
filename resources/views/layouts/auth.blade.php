<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">

    @stack('css')
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    
    @stack('js')
</body>

</html>
