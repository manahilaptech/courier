<!-- <nav class="navbar">
    <div class="container">
        <h2 class="logo">Courier<span>System</span></h2>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/booking') }}">Book Courier</a></li>
            <li><a href="{{ url('/track') }}">Track Parcel</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li><a href="{{ url('/admin') }}">Admin</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
    </div>
</nav> -->




<nav class="navbar">
    <div class="container">
        <h2 class="logo">Courier<span>System</span></h2>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('booking') }}">Booking</a></li>
            <li><a href="{{ route('track') }}">Track</a></li>
            <!-- <li><a href="{{ route('admin') }}">Admin</a></li> -->
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </div>
</nav>