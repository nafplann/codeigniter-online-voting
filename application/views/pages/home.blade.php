@extends('layouts.frontend.master')

@section('title', 'Home')

@section('style')
@endsection

@section('content')
    <section class="section z-depth-1" id="section-main">
        <div class="row container">
            <div class="col s12 l10">
                <h4 class="white-text title">
                    Aplikasi voting online pertama di lorong ku <br>
                </h4>
                <h5 class="white-text subtitle">Data pemilih menggunakan facebook Graph API</h5>
                <h5 class="white-text subtitle">Ayoo buat voting dan ajak semua teman untuk memilih.</h5>

                <br>
                <a href="{{ base_url('/login') }}" class="waves-effect waves-light btn grey darken-4">Masuk</a>
                <a href="{{ base_url('/register') }}"class="waves-effect waves-light btn grey darken-4">Daftar Sekarang</a>                
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h4 class="center-align">Pemilu 2019</h4>
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card hoverable">
                        <div class="card-image orange accent-3">
                            <img src="{{ base_url('uploads/avatars/zebra.png') }}">
                        </div>
                        <div class="card-content center-align">
                            <h5>Zebra</h5>
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
                            <img src="{{ base_url('uploads/avatars/monkey.png') }}">
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
                            <img src="{{ base_url('uploads/avatars/cat.png') }}">
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
                            <img src="{{ base_url('uploads/avatars/panda.png') }}">
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
                            <img class="img-chart" src="{{ base_url('assets/images/chart.png') }}" alt="">
                        </div>
                        <div class="col s12 m6">
                            <h5 class="white-text">Berdasarkan Gender</h5>
                            <p class="white-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus quidem corrupti fugiat odit rem optio eaque ab animi. Eius ex nemo magni repellat. Neque numquam optio fugiat dolor expedita enim?</p>
                        </div>
                    </div>

                    <div class="row valign-wrapper coblos-feature">
                        <div class="col s12 m6 ">
                            <h5 class="white-text">Berdasarkan Usia Pemilih</h5>
                            <p class="white-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus quidem corrupti fugiat odit rem optio eaque ab animi. Eius ex nemo magni repellat. Neque numquam optio fugiat dolor expedita enim?</p>
                        </div>
                        <div class="col s12 m6 center-align hide-on-small-only">
                            <img class="img-chart" src="{{ base_url('assets/images/chart-gender.png') }}" alt="">
                        </div>
                    </div>

                    <div class="row valign-wrapper coblos-feature">
                        <div class="col s12 m6 center-align hide-on-small-only">
                            <img class="img-chart" src="{{ base_url('assets/images/chart-location.png') }}" alt="">
                        </div>
                        <div class="col s12 m6">
                            <h5 class="white-text">Berdasarkan Lokasi</h5>
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
                            <a href="{{ base_url('register') }}">
                                <button class="btn grey darken-4">Daftar Sekarang</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection