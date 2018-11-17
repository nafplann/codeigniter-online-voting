<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | E-Coblos App</title>
        <link id="favicon" rel="icon" type="image/x-icon" href="/favicon.ico">
        
        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
        <link rel="stylesheet" href="{{ base_url('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ base_url('assets/css/page.css') }}">
        @yield('style')
    </head>
    <body>
        @include('layouts.frontend.header')
       
        <main>
            @yield('content')
        </main>

        @include('layouts.frontend.footer')

        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        @yield('script')
    </body>
</html>