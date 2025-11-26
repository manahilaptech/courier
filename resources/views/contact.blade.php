@extends('layout')

@section('content')

<!-- ====== HERO SECTION ====== -->
<section class="contact-hero">
    <div class="overlay"></div>
    <div class="hero-text">
        <h1>📬 Let’s Get in Touch</h1>
        <p>We’d love to hear from you — whether it’s a question, feedback, or just a friendly hello!</p>
    </div>
</section>

<!-- ====== MAIN CONTACT CONTENT ====== -->
<section class="contact-wrapper">
    <div class="contact-info">
        <div class="info-box">
            <img src="{{ asset('images/contactus.jpg') }}" alt="Phone">
            <h3>Call Us</h3>
            <p>+92 300 1234567</p>
        </div>

        <div class="info-box">
            <img src="{{ asset('images/email.jpg') }}" alt="Email">
            <h3>Email Us</h3>
            <p>Business.courierworldwide@gmail.com</p>
        </div>

        <div class="info-box">
            <img src="{{ asset('images/location.jpg') }}" alt="Location">
            <h3>Visit Us</h3>
            <p>Karachi, Pakistan</p>
        </div>
    </div>

    <div class="contact-container">
        <h2>Send Us a Message</h2>

        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<!-- ====== MAP SECTION ====== -->
<section class="map-section">
    <h3>Find Us Here</h3>
    <iframe
        src="https://www.google.com/maps?q=Karachi,%20Pakistan&output=embed"
    
        allowfullscreen
        loading="lazy">
    </iframe>
</section>

@endsection