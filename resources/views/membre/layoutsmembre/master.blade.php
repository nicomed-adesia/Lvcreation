<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/styleConnexion.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{asset('fontawesome-6/css/all.css')}}">
    </head>
    <body>
        {{-- @include('membre.layoutsmembre.navbar') --}}
        @yield('contenu3')
        {{-- @include('accueil.layouts.footer') --}}
        <script src="{{ asset('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('JS/membre.js') }}"></script>
    </body>
</html>

