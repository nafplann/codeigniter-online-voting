<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | E-Coblos App</title>
   
        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Rubik|Margarine" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">

        <style>
            main {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: calc(100vh - 100px);
            }

            .row, .card {
                margin: 0;
            }

            form label.active {
                font-weight: bold;
            }
            
            footer.page-footer {
                height: 100px;
            }

            footer.page-footer .row .col:last-of-type {
                justify-content: center;
            }

        </style>
    </head>
    <body>

        <main class="blue-grey lighten-5">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 offset-m3">
                        <div class="card p-15 z-depth-3" id="login-box">
                            <div class="card-header center-align">
                                <h3 class="orange-text tex-darken-3 brand-logo mb-0">coblos.in</h3>
                            </div>
                            <div class="card-content center-align">
                                <form class="mb-15" action="">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input name="identity" id="identity" type="text" class="validate">
                                            <label for="identity">Email</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input name="password" id="password" type="password" class="validate">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button type="button" class="btn waves-effect waves-light submit full orange darken-4">Login</button>
                                        </div>
                                    </div>
                                </form>

                                <a href="/register">Belum punya akun? Daftar disini sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
            
        <footer class="page-footer blue-grey lighten-5">
            <div class="container">
                <div class="row">
                    <div class="col s12 center-align">
                        <span class="grey-text">&copy; Copyright <?php echo date('Y'); ?> <a href="//kcdev.id">KCDEV</a> <br> Made with ❤️in Makassar, Indonesia</span>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>