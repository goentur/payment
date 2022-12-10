@extends('auth.base')
@section('title','Login')
@section('content')
<p class="mb-4">Please sign-in to your account and start</p>
<form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label> <a href="javascript:void(0)"> <small>Forgot Password?</small> </a>
        </div>
        <div class="input-group input-group-merge">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password" aria-describedby="password" />
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3"> <button class="btn btn-primary btn-block" type="submit">Sign in</button> </div>
</form>
@endsection