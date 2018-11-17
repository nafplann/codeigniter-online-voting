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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <link rel="stylesheet" href="{{ base_url('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ base_url('assets/css/auth.css') }}">
        @yield('style')
    </head>
    <body>

        <main class="blue-grey lighten-5">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 offset-m3">
                        <div class="card p-15 z-depth-3" id="login-box">
                            <div class="card-header center-align">
                                <a href="{{ base_url() }}">
                                    <h3 class="orange-text tex-darken-3 brand-logo mb-0">coblos.in</h3>
                                </a>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
            
        <footer class="page-footer blue-grey lighten-5">
            <div class="container">
                <div class="row">
                    <div class="col s12 center-align">
                        <span class="grey-text">&copy; Copyright {{ date('Y') }} <a href="//kcdev.id">KCDEV</a> <br> Made with ❤️in Makassar, Indonesia</span>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        @yield('script')
    </body>
</html>