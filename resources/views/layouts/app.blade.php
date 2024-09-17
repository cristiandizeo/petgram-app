<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <title>Petgram - @yield('titulo')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
@yield('contenido')
  
</body>