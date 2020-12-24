@extends('layouts.auth')
@section('head_title', 'Login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <h4 class="text-center">Laravel Customized Sample Login</h4>
            <form method="POST" action="{{ route('login') }}" id="login">
                @csrf
                <div class="form-group has-feedback" style="margin-bottom: 10px;">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group has-feedback" style="margin-bottom: 10px;">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
                    @error('password')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-block sign-in">
                            <i class="loading fa"></i>
                            Sign In
                        </button>
                    </div>
                </div>
            </form>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <span class="text-danger">Note:</span>
                    <p>Please do migration and database seeder to create dummy credentials by using faker factory.</p>
                    <p>The password is "secret".</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
