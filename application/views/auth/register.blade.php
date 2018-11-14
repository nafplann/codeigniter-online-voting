@extends('auth.master')

@section('title', 'Registrasi')

@section('style')
@endsection

@section('content')
    <div class="card-content center-align">
        <form class="mb-15" id="form-register" action="">
            <div class="row">
                <div class="input-field col s12">
                    <input name="name" id="name" type="text" class="validate">
                    <label for="name">Nama Lengkap</label>
                </div>
                <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input name="password" id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s12">
                    <input name="password_confirmation" id="password_confirmation" type="password" class="validate">
                    <label for="password_confirmation">Konfirmasi Password</label>
                </div>
                <div class="input-field col s12">
                    <button type="button" class="btn waves-effect waves-light submit full orange darken-4">Daftar Sekarang</button>
                </div>
            </div>
        </form>

        <a href="/login">Sudah terdaftar? Login disini</a>
    </div>
@endsection

@section('script')
@endsection
                       