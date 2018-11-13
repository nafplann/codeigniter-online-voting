<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Coblos App</title>
   
        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Nunito" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="{{ base_url('assets/css/app.css') }}">

        <style>
            header .btn {
                text-transform: initial !important;
                border-radius: 20px;
            }

            #section-main {
                background: #ff512f;
                background: -webkit-linear-gradient(to right, #ff512f, #f09819);
                background: linear-gradient(to right, #ff512f, #f09819);
                min-height: 350px;
            }

            #section-main {
                display: flex;
                align-items: center;
            }
            
            .section .title {
                margin-bottom: 2px;
            }

            .section .subtitle {
                margin: 5px 0;
            }
            
            .card .card-image {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 30px;
                min-height: 270px;

            }

            .card .card-image img {
                margin: auto;
                max-width: 145px;
            }
            
            .btn-coblos {
                width: 100%;
            }

            .btn-coblos i.left {
                margin-right: initial;
            }

            .img-chart {
                max-width: 330px;
            }

            .coblos-feature {
                padding: 30px 0;
            }

            .register-now {
                margin: 2rem 0 1rem 0;
            }
        </style>
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
    </body>
</html>