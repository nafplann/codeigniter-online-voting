@extends('auth.master')

@section('title', 'Forgot Password')

@section('style')
@endsection

@section('content')
    <div class="card-content center-align">
        <form class="mb-15" id="form-forgot" action="">
            <div class="row">
                <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <button type="button" class="btn waves-effect waves-light submit full orange darken-4">Reset password saya</button>
                </div>
            </div>
        </form>

        <a href="/register">Sudah terdaftar? Login disini</a>
    </div>
@endsection

@section('script')
@endsection