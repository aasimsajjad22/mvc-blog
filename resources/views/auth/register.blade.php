@extends('layout.base')
@section('title', 'Register')

@section('content')

    <div class="mb-5 mt-5 text-center"><h2>Register</h2></div>

    @include('includes.message')
    <form action="" method="post">

        <div class="row justify-content-start">
            <div class="col-6">
                <div class="mb-3 form-group">
                    <label class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control"value="{{ \App\Classes\Request::old('post', 'firstName') }}" >
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3 form-group">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" value="{{ \App\Classes\Request::old('post', 'lastName') }}">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ \App\Classes\Request::old('post', 'email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="{{ \App\Classes\Request::old('post', 'password') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control" value="{{ \App\Classes\Request::old('post', 'confirmPassword') }}">
        </div>
        <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

@endsection