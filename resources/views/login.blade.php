@extends('layout')

@section('content')
<div class="auth-container">
    <div class="auth-box">
        <h2>Login</h2>

        @if (session('success'))
            <p style="color: green; text-align:center;">{{ session('success') }}</p>
        @endif

        @if (session('error'))
            <p style="color: red; text-align:center;">{{ session('error') }}</p>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </div>
</div>
@endsection