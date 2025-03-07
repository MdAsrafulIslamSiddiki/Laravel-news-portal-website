@extends('layouts.app')
@section('title','Reset Password')

@section('content')
    <h2>Reset Your Password</h2>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email"  value="{{ $email ?? old('email') }}" required>
        </div>

        <div class="form-group">
            <label>New Password:</label>
            <input type="password" name="password" required>
        </div>
        
        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit" class="axil-btn btn-bg-primary submit-btn">Reset Password</button>
    </form>

    @if ($errors->any())
        <p>{{ $errors->first() }}</p>
    @endif
@endsection
