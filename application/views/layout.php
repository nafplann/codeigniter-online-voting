<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Coblos App</title>
   
        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Rubik|Margarine" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">

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
        <header class="navbar-fixed">
            <nav class="z-depth-3 white">
                <div class="nav-wrapper container">
                    <a href="#" class="brand-logo orange-text text-darken-2"><b>coblos.in</b></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a class="grey-text">Pemilu 2018</a></li>
                        <li><a class="grey-text">Polling Terbaru</a></li>
                        <!-- <li><a class="grey-text">Buat Polling</a></li>
                        <li><a class="grey-text">Masuk</a></li>
                        <li><a class="waves-effect waves-light btn orange darken-2">Daftar Sekarang</a></li> -->
                    </ul>
                </div>
            </nav>
        </header>
        
        <main>
            <section class="section z-depth-1" id="section-main">
                <div class="row container">
                    <div class="col s12 l10">
                        <h4 class="white-text title">
                            Aplikasi voting online pertama di lorong ku <br>
                        </h4>
                        <h5 class="white-text subtitle">Data pemilih menggunakan facebook Graph API</h5>
                        <h5 class="white-text subtitle">Ayoo buat voting dan ajak semua teman untuk memilih.</h5>

                        <br>
                        <a href="<?php echo base_url('/login'); ?>" class="waves-effect waves-light btn grey darken-4">Masuk</a>                
                        <a class="waves-effect waves-light btn grey darken-4">Daftar Sekarang</a>                
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <h4 class="center-align">Pemilu 2018</h4>

                    <div class="row">
                        <div class="col s12 m6 l3">
                            <div class="card hoverable">
                                <div class="card-image orange accent-3">
                                    <img src="<?php echo base_url('uploads/avatars/rooster.png'); ?>">
                                </div>
                                <div class="card-content center-align">
                                    <h5>Rooster</h5>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a class="btn btn-coblos waves-effect waves-light color-facebook"><i class="zmdi zmdi-facebook left"></i> Coblos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card hoverable">
                                <div class="card-image orange accent-3">
                                    <img src="<?php echo base_url('uploads/avatars/elephant.png'); ?>">
                                </div>
                                <div class="card-content center-align">
                                    <h5>Elephant</h5>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a class="btn btn-coblos waves-effect waves-light color-facebook"><i class="zmdi zmdi-facebook left"></i> Coblos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card hoverable">
                                <div class="card-image orange accent-3">
                                    <img src="<?php echo base_url('uploads/avatars/cat.png'); ?>">
                                </div>
                                <div class="card-content center-align">
                                    <h5>Cat</h5>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a class="btn btn-coblos waves-effect waves-light color-facebook"><i class="zmdi zmdi-facebook left"></i> Coblos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card hoverable">
                                <div class="card-image orange accent-3">
                                    <img src="<?php echo base_url('uploads/avatars/panda.png'); ?>">
                                </div>
                                <div class="card-content center-align">
                                    <h5>Panda</h5>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                    I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a class="btn btn-coblos waves-effect waves-light color-facebook"><i class="zmdi zmdi-facebook left"></i> Coblos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section grey darken-4">
                <h4 class="center-align white-text" style="">Lihat Hasil Voting Secara Realtime</h4>
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row valign-wrapper coblos-feature">
                                <div class="col s12 m6 center-align hide-on-small-only">
                                    <img class="img-chart" src="<?php echo base_url('assets/images/chart.png'); ?>" alt="">
                                </div>
                                <div class="col s12 m6">
                                    <h5 class="white-text">Berdasarkan Gender</h5>
                                    <p class="white-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus quidem corrupti fugiat odit rem optio eaque ab animi. Eius ex nemo magni repellat. Neque numquam optio fugiat dolor expedita enim?</p>
                                </div>
                            </div>

                            <div class="row valign-wrapper coblos-feature">
                                <div class="col s12 m6 ">
                                    <h5 class="white-text">Berdasarkan Lokasi</h5>
                                    <p class="white-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus quidem corrupti fugiat odit rem optio eaque ab animi. Eius ex nemo magni repellat. Neque numquam optio fugiat dolor expedita enim?</p>
                                </div>
                                <div class="col s12 m6 center-align hide-on-small-only">
                                    <img class="img-chart" src="<?php echo base_url('assets/images/chart-gender.png'); ?>" alt="">
                                </div>
                            </div>

                            <div class="row valign-wrapper coblos-feature">
                                <div class="col s12 m6 center-align hide-on-small-only">
                                    <img class="img-chart" src="<?php echo base_url('assets/images/chart-location.png'); ?>" alt="">
                                </div>
                                <div class="col s12 m6">
                                    <h5 class="white-text">Berdasarkan Usia Pemilih</h5>
                                    <p class="white-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus quidem corrupti fugiat odit rem optio eaque ab animi. Eius ex nemo magni repellat. Neque numquam optio fugiat dolor expedita enim?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section orange">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 offset-m3">
                            <div class="card hoverable register-now">
                                <div class="card-content white-text center-align">
                                    <h5 class="black-text">Buat Polling Hari Ini Juga!</h5><br>
                                    <button class="btn grey darken-4">Daftar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="page-footer white">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4">
                        <span class="grey-text">© Copyright <?php echo date('Y'); ?> KCDEV</span>
                    </div>
                    <div class="col s12 m4">
                        <span class="grey-text">Made with ❤️in Makassar, Indonesia</span>
                    </div>
                    <div class="col s12 m4 center-align">
                        <span class="grey-text">Find Us: &nbsp;</span>
                        <a href="https://www.facebook.com/kacedev/" target="__blank" class="btn-floating btn-small social-button waves-effect waves-light color-facebook"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="https://www.instagram.com/kacedev/" target="__blank" class="btn-floating btn-small social-button waves-effect waves-light color-instagram"><i class="zmdi zmdi-instagram"></i></a>
                        <a href="https://twitter.com/kcdev_id" target="__blank" class="btn-floating btn-small social-button waves-effect waves-light color-twitter"><i class="zmdi zmdi-twitter"></i></a>
                        <a href="mailto:kacedev.id@gmail.com" target="__blank" class="btn-floating btn-small social-button waves-effect waves-light red"><i class="zmdi zmdi-email"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>