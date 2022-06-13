@extends('layout.base')
@section('title', 'Register')

@section('content')

    <div class="mb-5 mt-5 text-center"><h2>Register</h2></div>

    <form action="" method="post">

        <div class="row justify-content-start">
            <div class="col-6">
                <div class="mb-3 form-group">
                    <label class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control" value="{{ $register->firstName }}" >
                </div>
                @if(is_string($register->getFirstError('firstName')))
                    <div class="alert alert-danger">{{ $register->getFirstError('firstName') }}</div>
                @endif
            </div>
            <div class="col-6">
                <div class="mb-3 form-group">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" value="{{ $register->lastName }}">
                </div>
                @if(is_string($register->getFirstError('lastName')))
                    <div class="alert alert-danger">{{ $register->getFirstError('lastName') }}</div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $register->email }}">
        </div>
        @if(is_string($register->getFirstError('email')))
            <div class="alert alert-danger">{{ $register->getFirstError('email') }}</div>
        @endif

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="{{ $register->password }}">
        </div>
        @if(is_string($register->getFirstError('password')))
            <div class="alert alert-danger">{{ $register->getFirstError('password') }}</div>
        @endif
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control" value="{{ $register->confirmPassword }}">
        </div>
        @if(is_string($register->getFirstError('confirmPassword')))
            <div class="alert alert-danger">{{ $register->getFirstError('confirmPassword') }}</div>
        @endif


        <button type="submit" class="btn btn-primary">Register</button>
    </form>

@endsection