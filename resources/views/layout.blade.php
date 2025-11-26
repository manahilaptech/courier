<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courier Management System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>



<script>
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.count');
    const speed = 200; // Speed of counting

    const startCounting = (counter) => {
        const target = +counter.parentElement.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(() => startCounting(counter), 15);
        } else {
            counter.innerText = target.toLocaleString();
        }
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.count');
                counters.forEach(counter => startCounting(counter));
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    const achievementSection = document.querySelector('.achievements');
    if (achievementSection) observer.observe(achievementSection);
});
</script>
<body>

    @include('layout.nav')

    <div class="content">
        @yield('content')
    </div>

    @include('layout.footer')

</body>
</html>