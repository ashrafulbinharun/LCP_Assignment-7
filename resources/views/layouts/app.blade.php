<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('components.head-scripts')
    <title> @yield('title') | {{ env('APP_NAME', 'Barta') }}</title>
</head>

<body class="bg-gray-100">
    @include('components.header')
    @yield('content')
    @include('components.footer')
</body>

</html>
