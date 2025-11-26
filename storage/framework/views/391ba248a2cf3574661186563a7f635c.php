

<?php $__env->startSection('content'); ?>

<div class="about-page">

    <!-- Hero Section with Background -->
   <!-- Hero Section with Video -->
<section class="hero">
    <!-- Background Video -->
    <video class="hero-video" autoplay muted loop playsinline>
        <source src="<?php echo e(asset('videos/home.mp4')); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Light overlay -->
    <div class="hero-overlay"></div>

    <!-- Content -->
    <div class="hero-content">
        <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="Company Logo" class="hero-logo">
        <h1>Courier Management System</h1>
        <p>Delivering Excellence & Innovation in Every Delivery</p>
        <a href="#contact" class="hero-btn">Get in Touch</a>
    </div>
</section>
    <!-- Mission & Vision Section -->
    <!-- Highly Active Members Section -->
<section class="team-section">
    <div class="section-header">
        <h2>🌟 Our Highly Active Members</h2>
        <p>Meet the driving force behind our courier management system — dedicated, creative, and passionate professionals!</p>
    </div>

    <div class="team-container">
        <!-- Team Member 1 -->
        <div class="team-card">
            <div class="team-img">
                <img src="<?php echo e(asset('images/office.jpg')); ?>" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Sarah Ahmed</h3>
                <h4>Project Head</h4>
                <p>Leading our team with vision and strategy, Sarah ensures every delivery meets perfection.</p>
            </div>
        </div>

        <!-- Team Member 2 -->
        <div class="team-card">
            <div class="team-img">
                <img src="<?php echo e(asset('images/ali.jpg')); ?>" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Ali Khan</h3>
                <h4>Technical Lead</h4>
                <p>Ali is the brain behind the system architecture, ensuring flawless backend performance.</p>
            </div>
        </div>

        <!-- Team Member 3 -->
        <div class="team-card">
            <div class="team-img">
                <img src="<?php echo e(asset('images/maria.jpg')); ?>" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Maria Farooq</h3>
                <h4>UI/UX Designer</h4>
                <p>Designing user experiences that are both elegant and intuitive — Maria brings life to design.</p>
            </div>
        </div>

        <!-- Team Member 4 -->
        <div class="team-card">
            <div class="team-img">
                <img src="<?php echo e(asset('images/hassan.jpg')); ?>" alt="Team Member">
            </div>
            <div class="team-info">
                <h3>Hassan Raza</h3>
                <h4>Operations Manager</h4>
                <p>Coordinating daily tasks and ensuring efficiency across all logistics operations.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
<!-- Contact Section -->
<section class="contact">
    <div class="contact-container slide-up">
        <h2>Contact Us</h2>
        <p>Have any questions or want to work with us? Reach out!</p>
        <div class="contact-box">
            <div class="contact-info">
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <p>Email: <a href="mailto:info@courier.com">info@courier.com</a></p>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <p>Phone: <a href="tel:+1234567890">+123 456 7890</a></p>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Address: 123 Main Street, City, Country</p>
                </div>
            </div>

            <form class="contact-form">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="memberModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3 id="modalName"></h3>
        <h4 id="modalRole"></h4>
        <p id="modalDesc"></p>
    </div>
</div>



<!-- Achievements / Milestones Section -->
<!-- <section class="achievements" id="achievements">
    <div class="achievements-header" data-aos="fade-up">
        <h2>🏆 Our Achievements</h2>
        <p>We take pride in our accomplishments that reflect our dedication and excellence in courier management services.</p>
    </div>

    <div class="achievements-container"> -->
        <!-- Achievement 1 -->
        <!-- <div class="achievement-card" data-aos="fade-up" data-aos-delay="100">
            <div class="icon">📦</div>
            <h3 class="counter" data-target="12500">12,000+</h3>
            <p>Deliveries Completed</p>
        </div> -->

        <!-- Achievement 2 -->
        <!-- <div class="achievement-card" data-aos="fade-up" data-aos-delay="200">
            <div class="icon">👥</div>
            <h3 class="counter" data-target="4800">5,000</h3>
            <p>Active Users</p>
        </div> -->

        <!-- Achievement 3 -->
        <!-- <div class="achievement-card" data-aos="fade-up" data-aos-delay="300">
            <div class="icon">🌍</div>
            <h3 class="counter" data-target="35">50+</h3>
            <p>Cities Covered</p>
        </div> -->

        <!-- Achievement 4 -->
        <!-- <div class="achievement-card" data-aos="fade-up" data-aos-delay="400">
            <div class="icon">🏅</div>
            <h3 class="counter" data-target="12">3 Awards Won</h3>
            <p>Awards & Recognitions</p>
        </div>
    </div>
</section> -->









<section class="company-overview">
    <div class="overview-container">
        <h2 class="section-title">Our Story & Purpose</h2>
        <p class="overview-text">
            Founded with a vision to redefine <strong>speed</strong> and <strong>reliability</strong>,
            our Courier Management System blends <strong>innovation</strong> with <strong>trust</strong>.
            Every delivery tells a story of precision, passion, and purpose.
        </p>

        <div class="overview-stats">
            <div class="stat-card">
                <h3>12,000+</h3>
                <p>Deliveries Completed</p>
            </div>
            <div class="stat-card">
                <h3>5,000+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat-card">
                <h3>50+</h3>
                <p>Cities Served</p>
            </div>
            <div class="stat-card">
                <h3>3</h3>
                <p>Awards Won</p>
            </div>
        </div>
    </div>

</section>

<section class="testimonials">
  <h2>What Our Clients Say</h2>
  <div class="testimonial-boxes">
    <div class="t-box">
      <p>“The most reliable courier service I’ve used — fast and professional!”</p>
      <span>— Sarah Ahmed</span>
    </div>
    <div class="t-box">
      <p>“Their tracking system is brilliant. I always know where my parcel is.”</p>
      <span>— Ali Khan</span>
    </div>
  </div>
</section>







<!-- Scripts -->
<script>
function openModal(name, role, desc) {
    document.getElementById('modalName').innerText = name;
    document.getElementById('modalRole').innerText = role;
    document.getElementById('modalDesc').innerText = desc;
    document.getElementById('memberModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('memberModal').style.display = 'none';
}

// Close modal if clicked outside
window.onclick = function(event) {
    if(event.target == document.getElementById('memberModal')) {
        closeModal();
    }
}
</script>










<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ramee\OneDrive\Desktop\eproject\resources\views/about.blade.php ENDPATH**/ ?>