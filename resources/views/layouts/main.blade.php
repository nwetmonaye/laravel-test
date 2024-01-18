<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href=" {{ url('home') }} ">Home</a>
    <a href=" {{ url('about') }} ">About</a>
    <a href=" {{ url('contact') }} ">Contact</a>
    <a href=" {{ route('ser') }} ">Service</a>
    <hr>

    @yield('myContent')
</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
