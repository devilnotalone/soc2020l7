<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        @yield('script')

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-san">
{{--         <h1 class="text-4xl text-center font-bolder text-white">Welcome to Laravel with Tailwindcss!! การทำงาน</h1>
 --}}          <!-- Left side column. contains the logo and sidebar -->
          @include('layouts2.nav')
         {{--  @include('layouts2.carousel') --}}
          @include('layouts2.hero')
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            @yield('content')
        </div>
        @include('layouts2.footer')
    </body>
</html>
