@extends('auth.master')

@section('title', 'Login')

@section('style')
@endsection

@section('content')
    <div class="card-content center-align">
        <form class="mb-15" id="form-login" action="">
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

        <a href="/register">Belum punya akun? Daftar disini sekarang</a> <br>
        <a href="/register">Lupa password?</a>
    </div>
@endsection

@section('script')
@endsection