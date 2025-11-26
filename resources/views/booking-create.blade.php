@extends('layout')

@section('content')

<!-- ====== HEADER / VIDEO SECTION ====== -->
<div class="hero-section">
    <video autoplay muted loop id="heroVideo">
        <source src="{{ asset('videos/booking1.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="hero-text">
        <h1>🚚 Fast & Reliable Courier Service</h1>
        <p>Delivering with speed, safety, and satisfaction — every time!</p>
    </div>
</div>



@if (session('success'))
    <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        {{ session('success') }}
    </div>
@endif

<!-- ====== BOOKING FORM SECTION ====== -->
<div class="booking-wrapper">
    <div class="booking-container">
        <h2 class="text-center mb-4">📦 Book Your Courier</h2>

        <form action="{{ route('booking.store') }}" method="POST" class="booking-form">
            @csrf

            <div class="form-grid">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="example@gmail.com" required>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone" placeholder="03xx-xxxxxxx" required>
                </div>

                <div class="form-group">
                    <label>City</label>
                    <select id="city" name="city" onchange="updateMap()" required>
                        <option value="">-- Select City --</option>
                        <option>Karachi</option>
                        <option>Lahore</option>
                        <option>Islamabad</option>
                        <option>Rawalpindi</option>
                        <option>Faisalabad</option>
                        <option>Multan</option>
                        <option>Peshawar</option>
                        <option>Hyderabad</option>
                        <option>Sialkot</option>
                        <option>Quetta</option>
                    </select>
                </div>

                <div class="form-group full">
                    <label>Full Address</label>
                    <input type="text" name="address" placeholder="House #, Street #, Area" required>
                </div>

                <div class="form-group">
                    <label>Service Type</label>
                    <select name="service" required>
                        <option value="">Choose Service</option>
                        <option>Same Day Delivery</option>
                        <option>Overnight Delivery</option>
                        <option>International Courier</option>
                        <option>Bulk Shipment</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pickup Date</label>
                    <input type="date" name="date" required>
                </div>

                <div class="form-group full">
                    <label>Special Instructions (Optional)</label>
                    <textarea name="message" rows="3" placeholder="Any special instructions..."></textarea>
                </div>
            </div>

            <div class="form-submit text-center">
                <button type="submit" class="btn-submit">Submit Booking</button>
            </div>
        </form>
    </div>

    <div class="map-section mt-5">
        <h3 class="text-center mb-3">📍 City Preview</h3>
        <iframe id="cityMap" src="https://www.google.com/maps?q=Pakistan&output=embed" allowfullscreen loading="lazy"></iframe>
    </div>
</div>

<script>
function updateMap() {
    const city = document.getElementById('city').value;
    const map = document.getElementById('cityMap');
    map.src = city ? `https://www.google.com/maps?q=${encodeURIComponent(city)} Pakistan&output=embed`
                   : "https://www.google.com/maps?q=Pakistan&output=embed";
}
</script>





@endsection