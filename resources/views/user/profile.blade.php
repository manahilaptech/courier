@extends('layout')

@section('content')
<div class="profile-container">
    <div class="profile-box">
        <h2>My Profile</h2>

        {{-- Success message --}}
        @if (session('success'))
            <p style="color: green; text-align:center;">{{ session('success') }}</p>
        @endif

        {{-- Profile Picture --}}
        <div class="profile-pic-section">
            @if(Auth::user()->profile_picture)
                <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="profile-pic">
            @else
                <img src="{{ asset('images/default-avatar.png') }}" alt="Default Picture" class="profile-pic">
            @endif
        </div>

        {{-- Upload Form --}}
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Upload New Profile Picture:</label>
            <input type="file" name="profile_picture" accept="image/*" required>
            <button type="submit">Update</button>
        </form>

        <hr>

        {{-- Basic Info --}}
        <h3>Account Details</h3>
        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
    </div>
</div>

<style>
.profile-container {
    display: flex;
    justify-content: center;
    margin-top: 50px;
}
.profile-box {
    background: white;
    padding: 30px;
    border-radius: 10px;
    width: 450px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    text-align: center;
}
.profile-pic {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}
input[type="file"] {
    margin-top: 10px;
}
button {
    background: #0056b3;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    margin-top: 10px;
    cursor: pointer;
}
</style>
@endsection