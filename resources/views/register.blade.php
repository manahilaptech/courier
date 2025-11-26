




@extends('layout')

@section('content')
<div class="auth-container">
    <div class="auth-box">
        <h2>Register</h2>

        @if(session('success'))
            <p style="color: green; text-align:center;">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul style="color: red; text-align:center;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>

        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>
@endsection