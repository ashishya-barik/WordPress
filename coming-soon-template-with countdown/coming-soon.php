<?php get_header(); /* Template Name: Coming Soon */ ?>

<style>
.comg-soon-wrapper {
    background: #d7b271;
    color: #fff;
    text-align: center;
    font-family: Arial, sans-serif;
    align-items: center;
    padding: 100px 0;
    justify-content: center;
}
.wrapper {
    max-width: 700px;
    margin: auto;
    padding: 20px;
}
.logo {
    font-size: 50px;
    color: #fdd835;
    margin-bottom: 20px;
}
.head-one {
    font-weight: 300;
    color: #fff;
    font-weight: 400;
    font-size: 27px;
}
.head-two {
    font-size: 50px;
    font-weight: bold;
    color: #dfdfdf;
}
.head-two span {
    color: #60313a;
}
.pgph {
    color: #fff;
    font-size: 17px;
    margin: 30px 0 0 0;
}
.countdown {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}
.time-box {
    margin: 0 10px;
    text-align: center;
}
.time-box h3 {
    font-size: 2rem;
    font-weight: bold;
}
.time-box p {
    margin: 0;
    font-size: 14px;
    color: #60313a;
}
@media (max-width: 576px) {
    h1 {
        font-size: 2rem;
    }
    .time-box h3 {
        font-size: 1.5rem;
    }
    .comg-soon-wrapper {
        padding: 100px 25px;
    }
}
.count-font-main {
    color: #60313a;
}
</style>

<div class="comg-soon-wrapper">
    <!-- Logo -->
    <div class="logo">⚙️</div>

    <!-- Heading -->
    <h2 class="head-one">We Are Tuning</h2>
    <h1 class="head-two">Our <span>Website.</span></h1>
    <p class="pgph">This page is currently under construction but we are working hard to bring you the new design.</p>

    <!-- Countdown -->
    <div class="countdown">
        <div class="time-box">
            <h3 id="days" class="count-font-main">00</h3>
            <p>Days</p>
        </div>
        <div class="time-box">
            <h3 id="hours" class="count-font-main">00</h3>
            <p>Hours</p>
        </div>
        <div class="time-box">
            <h3 id="minutes" class="count-font-main">00</h3>
            <p>Minutes</p>
        </div>
        <div class="time-box">
            <h3 id="seconds" class="count-font-main">00</h3>
            <p>Seconds</p>
        </div>
    </div>
</div>

<?php
// Get current WordPress server timestamp (in seconds)
$current_time = current_time('timestamp', true); // true = GMT
// Set countdown end date (15 days from now)
$end_time = strtotime("+15 days", $current_time);
?>

<!-- Countdown Script -->
<script>
(function(){
    let endTime = <?php echo (int)$end_time; ?> * 1000; // Convert to milliseconds

    function updateCountdown() {
        let now = new Date().getTime();
        let distance = endTime - now;

        if (distance < 0) {
            // Countdown ended
            document.getElementById("days").innerText = "00";
            document.getElementById("hours").innerText = "00";
            document.getElementById("minutes").innerText = "00";
            document.getElementById("seconds").innerText = "00";
            return;
        }

        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerText = String(days).padStart(2, "0");
        document.getElementById("hours").innerText = String(hours).padStart(2, "0");
        document.getElementById("minutes").innerText = String(minutes).padStart(2, "0");
        document.getElementById("seconds").innerText = String(seconds).padStart(2, "0");
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
})();
</script>

<?php get_footer(); ?>