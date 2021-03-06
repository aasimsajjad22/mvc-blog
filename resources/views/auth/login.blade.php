@extends('layout.base')
@section('title', 'Login')

@section('content')
    <div class="mb-5 mt-5 text-center"><h2>Login</h2></div>

    @include('includes.message')
    <form action="" method="post">

        <div class="mb-3 form-group">
            <label class="form-label">email</label>
            <input type="text" name="email" class="form-control" value="{{ \App\Classes\Request::old('post', 'email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

@endsection