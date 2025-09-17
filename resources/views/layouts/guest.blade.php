<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-san antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image:url('{{ URL::to('/') }}/assets/images/hero/hero1.jpg'); background-size: cover; background-position: center;">
            <div>
                <a href="/">
                  <img src="{{ URL::to('/') }}/images/logo/168.png" width="40px" /> 

                  
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
      
        </div>
    </body>
</html>
