@extends('layouts.app')

@section('content')

    <h3 class="title">Sign in to news 24 admin panel</h3>
    <p class="b2 mb--55">Enter your detail below</p>
    <form action="{{ route('login') }}" method="POST" class="singin-form">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <button type="submit" class="axil-btn btn-bg-primary submit-btn">Login</button>
            <a href="{{ route('password.request') }}" class="forgot-btn">Forget password?</a>
        </div>
    </form>


@endsection