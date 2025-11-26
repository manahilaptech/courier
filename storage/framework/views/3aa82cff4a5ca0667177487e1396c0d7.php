

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<!-- <section class="hero">
    <div class="container">
        <h1>Fast & Reliable Courier Services</h1>
        <p>We deliver your packages safely and on time. Trusted by thousands of customers every day.</p>
        <a href="<?php echo e(route('booking')); ?>" class="btn">Book a Courier</a>
    </div>
</section> -->



<section class="hero">
    <video autoplay muted loop id="hero-video">
        <source src="<?php echo e(asset('videos/aeroplanevideo.mp4')); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="container hero-content">
        <h1>Fast & Reliable Courier Services</h1>
        <p>We deliver your packages safely and on time. Trusted by thousands of customers every day.</p>
        <a href="<?php echo e(route('booking')); ?>" class="btn">Book a Courier</a>
    </div>
</section>


<!-- Features Section -->
<!-- <section class="features">
    <div class="container">
        <h2>Our Key Features</h2>
        <div class="feature-cards">
            <div class="card">
                <img src="<?php echo e(asset('images/fast.jpg')); ?>" alt="Fast Delivery">
                <h3>Fast Delivery</h3>
                <p>Time-bound delivery ensures your parcels reach safely and quickly.</p>
            </div>
            <div class="card">
                <img src="<?php echo e(asset('images/fast.jpg')); ?>" alt="Secure Handling">
                <h3>Secure Handling</h3>
                <p>Packages are handled with care and tracked at every step.</p>
            </div>
            <div class="card">
                <img src="<?php echo e(asset('images/support.png')); ?>" alt="24/7 Support">
                <h3>24/7 Support</h3>
                <p>Our customer service team is alws ready to help you.</p>
            </div>
            <div class="card">
                <img src="<?php echo e(asset('images/tracking.png')); ?>" alt="Real-Time Tracking">
                <h3>Real-Time Tracking</h3>
                <p>Monitor your shipment in real-time from pickup to delivery.</p>
            </div>
        </div>
    </div>
</section> -->








<!-- Decorative Divider -->
<div class="section-divider">
    <svg viewBox="0 0 1200 100" preserveAspectRatio="none">
        <path d="M0,0 C600,100 600,0 1200,100 L1200,0 L0,0 Z" fill="#003366"></path>
    </svg>
</div>
<!-- How We Deliver Section -->
<section class="delivery-steps">
    <div class="container">
        <h2>How We Deliver</h2>
        <p>Experience a seamless courier journey from booking to delivery.</p>
        <div class="steps">
            <div class="step-card">
                <img src="<?php echo e(asset('images/fast.jpg')); ?>" alt="Book a Courier">
                <h3>Book a Courier</h3>
                <p>Schedule your pickup online in just a few clicks.</p>
            </div>
            <div class="step-card">
                <img src="<?php echo e(asset('images/pickup.jpg')); ?>" alt="Pickup">
                <h3>Pickup</h3>
                <p>Our professional team collects your parcel safely.</p>
            </div>
            <div class="step-card">
                <img src="<?php echo e(asset('images/transport.jpg')); ?>" alt="Transport">
                <h3>Transport</h3>
                <p>Secure and fast transportation to the destination city.</p>
            </div>
            <div class="step-card">
                <img src="<?php echo e(asset('images/delivery.jpg')); ?>" alt="Delivery">
                <h3>Delivery</h3>
                <p>Parcel delivered on time with real-time tracking updates.</p>
            </div>
        </div>
    </div>
</section>





<!-- About Section -->
<section class="about">
    <div class="container">
        <h2>About Our Courier Service</h2>
        <p>We provide fast, secure, and reliable courier services across the city and beyond. Our mission is to make every delivery a seamless experience for our clients. Whether it's personal parcels or business shipments, we ensure timely delivery and excellent service.</p>
        <p>Our advanced tracking systems and experienced staff make us the most trusted courier company in the region.</p>
        <img src="<?php echo e(asset('images/fast.jpg')); ?>" alt="About Us Image">
    </div>
</section>





<!-- Video Section -->
<!-- <section class="promo-video">
    <div class="container">
        <h2>Watch How We Operate</h2>
        <video controls>
            <source src="<?php echo e(asset('videos/home.mp4')); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <p>From booking to delivery, see our professional process in action.</p>
    </div>
</section> -->

<!-- About Section -->
<!-- <section class="about">
    <div class="container">
        <h2>About Our Courier Service</h2>
        <p>We provide fast, secure, and reliable courier services across the city and beyond. Our mission is to make every delivery a seamless experience for our clients. Whether it's personal parcels or business shipments, we ensure timely delivery and excellent service.</p>
        <p>Our advanced tracking systems and experienced staff make us the most trusted courier company in the region.</p>
        <img src="<?php echo e(asset('images/about-us.jpg')); ?>" alt="About Us Image">
    </div>
</section> -->

<section class="video-hero">
    <video autoplay muted loop id="hero-video">
        <source src="<?php echo e(asset('videos/home.mp4')); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="container hero-content">
        <h1>Fast & Reliable Courier Services</h1>
        <p>From booking to delivery, we handle your parcels safely and on time.</p>
        <a href="<?php echo e(route('booking')); ?>" class="btn">Book a Courier</a>
    </div>
</section>






<!-- Testimonials Section -->
<section class="testimonials">
    <div class="container">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <p>"Excellent service! My parcels always arrive on time. Highly recommend."</p>
                <h4>- Sarah J.</h4>
            </div>
            <div class="testimonial-card">
                <p>"Professional staff and real-time tracking made my deliveries worry-free."</p>
                <h4>- Ahmed K.</h4>
            </div>
            <div class="testimonial-card">
                <p>"Very reliable courier service. They care about every package."</p>
                <h4>- Maria T.</h4>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta">
    <div class="container">
        <h2>Ready to Ship Your Package?</h2>
        <p>Book your courier now and experience fast, secure, and reliable delivery service.</p>
        <a href="<?php echo e(route('booking')); ?>" class="btn">Book Now</a>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ramee\OneDrive\Desktop\eproject\resources\views/home.blade.php ENDPATH**/ ?>