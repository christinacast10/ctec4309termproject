<?php
/////HEADER/////
$Head = "
<head>
    <title>Midnight Hour Movers</title>
    <link rel='stylesheet' href='style.css' type='text/css'>
</head>
";
$HeroSlideshow = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow1.jpg' alt='Slideshow1'>
            <div class='hero-text'>
                <h1>Midnight Hour Movers</h1>
                <p>Moving Made Easy in Dallas, TX – Trusted Local Movers Near You!</p>
                <a href='quote.php' class='hero-button'>Get a Quote Today</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow2.jpg' alt='Slideshow2'>
            <div class='hero-text'>
                <h1>Fast & Reliable Service</h1>
                <p>We handle your move with care and efficiency.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow3.jpg' alt='Slideshow3'>
            <div class='hero-text'>
                <h1>Get Your Free Quote Today!</h1>
                <p>Contact us for a fast and free moving estimate.</p>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>

";

$HeroSlideshowDistance = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow1.jpg' alt='Slideshow1'>
            <div class='hero-text'>
                <h1>Reliable Long-Distance Moving Services</h1>
                <p>Let us take the stress out of your long-distance move!</p>
                <a href='quote.php' class='hero-button'>Get a Quote Today</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow2.jpg' alt='Slideshow2'>
            <div class='hero-text'>
                <h1>Fast & Reliable Service</h1>
                <p>We handle your move with care and efficiency.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow3.jpg' alt='Slideshow3'>
            <div class='hero-text'>
                <h1>Get Your Free Quote Today!</h1>
                <p>Contact us for a fast and free moving estimate.</p>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>

";

$HeroSlideshowServices = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow2.jpg' alt='Slideshow1'>
            <div class='hero-text'>
                <h1>Professional Moving & Storage Services in Dallas, TX</h1>
                <p>Our skilled movers and packers are dedicated to providing an exceptional moving experience, whether you’re relocating locally or across the country.</p>
                <a href='quote.php' class='hero-button'>Get a Quote Today</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow2.jpg' alt='Slideshow2'>
            <div class='hero-text'>
                <h1>Fast & Reliable Service</h1>
                <p>We handle your move with care and efficiency.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow3.jpg' alt='Slideshow3'>
            <div class='hero-text'>
                <h1>Get Your Free Quote Today!</h1>
                <p>Contact us for a fast and free moving estimate.</p>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>

";

$HeroQuote = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='Slideshow3.jpg' alt='Slideshow1'>
            <div class='hero-text'>
                <h1>Get Your Free Moving Quote Today!</h1>
                <p>Moving made simple, whether it's across the street or across the state. Start with a free, no-obligation quote and let us handle the rest.</p>
            </div>
        </div>
    </div>
</div>

";
///// CTA /////
$ctaSection = '
<section class="cta-section">
    <div class="cta-content">
        <h2>Get Your Free Moving Quote Today!</h2>
        <p>Whether you\'re moving locally or long-distance, we\'re here to make your move stress-free. Get in touch now and let us provide you with an accurate, no-obligation quote tailored to your needs.</p>
        <a href="contact.php" class="cta-button">Get a Free Quote</a>
    </div>
</section>
';

/////NAV/////
$Nav = "
<nav class='navbar'> 
    <ul>
        <li class='logo'><a href='index.php'><img src='midnightnewlogow.png' alt='Midnight Hour Moving Logo'></a></li>
        <li><a href='index.php'>Home</a></li>
        <li><a href='services.php'>Services</a></li>
        <li><a href='resources.php'>Resources</a></li>
        <li><a href='about.php'>About Us</a></li>
        <li><a href='contact.php'>Contact Us</a></li>
    </ul>
</nav>
";

// Admin Area Navigation
$admin_nav = "
<nav id='admin'>
    <ul>
        <li><a href='admin_home.php'>Contact Form Submissions</a></li>
        <li><a href='form_submission.php'>Add New Customer</a></li>
        <li id='logout'><a href='admin.php?logout'>Log out</a></li>
    </ul>
</nav>
";
/////FOOTER/////
$Footer = "
<footer class='footer'>
    <div>
        <p>&copy; " . date("Y") . " Midnight Hour Movers. All rights reserved.</p>
        <p>This website was created as a term project for CTEC 4309 at UT Arlington.</p>
        <p>Contact us: <a href='mailto:info@midnighthourmovers.com'>info@midnighthourmovers.com</a> | Phone: (817) 399-1300</p>
        <p><a href='admin.php' target='_blank'>Admin Login</a> | <a href='reviews.php'> Submit A Review</a></p>
    </div>
</footer>
";

