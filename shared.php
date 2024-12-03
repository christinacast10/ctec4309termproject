<?php
// CTEC 4309 Term Project Manuel Arellano and Christina Castillo
/////HEADER/////
$Head = "
<head>
    <title>Midnight Hour Movers - Professional Moving & Storage Services</title>
    <meta name='description' content='Midnight Hour Movers offers reliable moving and storage services, including local and out-of-state moves, packing, and more. Contact us today!'>
    <meta name='keywords' content='moving company, storage services, local movers, out-of-state moves, packing services, Dallas movers, reliable moving company'>
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

$areasofserviceslideshow = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='dallas.jpg' alt='Dallas Skyline'>
            <div class='hero-text'>
                <h1>Areas We Serve</h1>
                <p>From Dallas to surrounding cities, we’ve got your move covered.</p>
                <a href='services.php' class='hero-button'>Explore Our Services</a>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>";

$HeroSlideshowTransport = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='tow.jpg' alt='Reliable RV Transport'>
            <div class='hero-text'>
                <h1>Reliable RV & Auto Transport Services</h1>
                <p>From campsites to new homes, we’ve got you covered.</p>
                <a href='quote.php' class='hero-button'>Get a Quote Today</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='tow.jpg' alt='Professional Vehicle Moving'>
            <div class='hero-text'>
                <h1>Professional Vehicle Moving</h1>
                <p>Safe and efficient transport for your RVs and vehicles.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='tow.jpg' alt='Affordable RV Transport Services'>
            <div class='hero-text'>
                <h1>Transparent Pricing, No Surprises</h1>
                <p>Starting at $1.50/mile. Get your customized estimate today!</p>
                <a href='quote.php' class='hero-button'>Request Your Quote</a>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>
";

$HeroSlideshowTransport = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='tow.jpg' alt='Reliable RV Transport'>
            <div class='hero-text'>
                <h1>Reliable RV & Auto Transport Services</h1>
                <p>From campsites to new homes, we’ve got you covered.</p>
                <a href='quote.php' class='hero-button'>Get a Quote Today</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='tow.jpg' alt='Professional Vehicle Moving'>
            <div class='hero-text'>
                <h1>Professional Vehicle Moving</h1>
                <p>Safe and efficient transport for your RVs and vehicles.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='tow.jpg' alt='Affordable RV Transport Services'>
            <div class='hero-text'>
                <h1>Transparent Pricing, No Surprises</h1>
                <p>Starting at $1.50/mile. Get your customized estimate today!</p>
                <a href='quote.php' class='hero-button'>Request Your Quote</a>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>
";

$HeroSlideshowPacking = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='packing2.jpg' alt='Packing Services Slideshow 1'>
            <div class='hero-text'>
                <h1>Professional Packing Services for Your Move</h1>
                <p>Let our experts handle your packing for a smooth, stress-free relocation!</p>
                <a href='quote.php' class='hero-button'>Get a Quote for Packing</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='packing2.jpg' alt='Packing Services Slideshow 2'>
            <div class='hero-text'>
                <h1>Careful Packing for Fragile Items</h1>
                <p>Your delicate items will be carefully packed to ensure they arrive safely.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='packing2.jpg' alt='Packing Services Slideshow 3'>
            <div class='hero-text'>
                <h1>Reliable Packing for Long-Distance Moves</h1>
                <p>Our professional packing team ensures your items are well-protected for the journey ahead.</p>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>
";

$HeroSlideshowLocal = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='localmove.jpg' alt='Packing Services Slideshow 1'>
            <div class='hero-text'>
                <h1>Expert Packing Services for Your Local Move</h1>
                <p>Let our professionals handle your packing to ensure a smooth, stress-free local relocation!</p>
                <a href='quote.php' class='hero-button'>Get a Local Moving Quote</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='localmove.jpg' alt='Packing Services Slideshow 2'>
            <div class='hero-text'>
                <h1>Careful Packing for Your Fragile Items</h1>
                <p>We take extra care with your delicate items to make sure they stay safe during your local move.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='localmove.jpg' alt='Packing Services Slideshow 3'>
            <div class='hero-text'>
                <h1>Efficient Packing for Quick Local Moves</h1>
                <p>Our professional packing team ensures your belongings are quickly and securely packed for your local move.</p>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>
";

$HeroSlideshowLong = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='longdistancemoving.jpg' alt='Long Distance Moving Services 1'>
            <div class='hero-text'>
                <h1>Expert Packing Services for Your Long-Distance Move</h1>
                <p>Let our professionals handle your packing to ensure a smooth, stress-free relocation across the miles!</p>
                <a href='quote.php' class='hero-button'>Get a Long-Distance Moving Quote</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='longdistancemoving.jpg' alt='Long Distance Moving Services 2'>
            <div class='hero-text'>
                <h1>Careful Packing for Your Fragile Items</h1>
                <p>We take extra care with your delicate items to ensure they stay safe during the long journey.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='longdistancemoving.jpg' alt='Long Distance Moving Services 3'>
            <div class='hero-text'>
                <h1>Efficient Packing for Long-Distance Moves</h1>
                <p>Our professional packing team ensures your belongings are securely packed for a safe and reliable journey.</p>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>
";

$HeroSlideshowStorage = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='storage.jpg' alt='Secure Warehouse Storage 1'>
            <div class='hero-text'>
                <h1>Secure Warehouse Storage Solutions</h1>
                <p>Store your belongings with confidence in our safe, climate-controlled facility designed for your peace of mind.</p>
                <a href='quote.php' class='hero-button'>Get a Storage Quote</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='storage.jpg' alt='Flexible Storage Options'>
            <div class='hero-text'>
                <h1>Flexible Short and Long-Term Storage</h1>
                <p>Whether you need storage for a few weeks or several months, our flexible plans can accommodate your needs.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='storage.jpg' alt='Climate-Controlled Storage 3'>
            <div class='hero-text'>
                <h1>Climate-Controlled Storage for Delicate Items</h1>
                <p>Protect your sensitive belongings with our state-of-the-art climate-controlled storage solutions.</p>
            </div>
        </div>
    </div>
    <a class='prev' onclick='nextSlide(-1)'>&#10094;</a>
    <a class='next' onclick='nextSlide(1)'>&#10095;</a>
</div>
";

$HeroSlideshowJunkRemoval = "
<div class='hero-slideshow'>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='waste.jpg' alt='Junk Removal Services 1'>
            <div class='hero-text'>
                <h1>Fast and Reliable Junk Removal</h1>
                <p>Our professional team is ready to clear out unwanted junk from your home or office quickly and efficiently.</p>
                <a href='quote.php' class='hero-button'>Get a Junk Removal Quote</a>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='waste.jpg' alt='Junk Removal Services 2'>
            <div class='hero-text'>
                <h1>Eco-Friendly Junk Disposal</h1>
                <p>We prioritize environmentally responsible disposal, ensuring that your unwanted items are recycled or donated whenever possible.</p>
            </div>
        </div>
    </div>
    <div class='hero-slide'>
        <div class='hero-image-wrapper'>
            <img src='waste.jpg' alt='Junk Removal Services 3'>
            <div class='hero-text'>
                <h1>Clutter-Free Spaces in No Time</h1>
                <p>From garages to offices, we help you reclaim your space by removing unwanted items fast and hassle-free.</p>
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
        <a href="quote.php" class="cta-button">Get a Free Quote</a>
    </div>
</section>
';

/////NAV/////
$Nav = "
<nav class='navbar'> 
    <ul>
        <li class='logo'><a href='index.php'><img src='midnightnewlogow.png' alt='Midnight Hour Moving Logo'></a></li>
        <li><a href='index.php'>Home</a></li>
        <li class='dropdown'>
            <a href='services.php'>Services</a>
            <ul class='dropdown-content'>
                <li><a href='packing.php'>Packing Help & Supplies</a></li>
                <li><a href='localdistance.php'>Local DFW Moving</a></li>
                <li><a href='longdistance.php'>Long Distance Moving</a></li>
                <li><a href='storage.php'>Warehouse Storage</a></li>
                <li><a href='junkremoval.php'>Junk Removal</a></li>
                <li><a href='autotransport.php'>RV/Auto Transport</a></li>
            </ul>
        </li>
        <li><a href='resources.php'>Resources</a></li>
        <li><a href='about.php'>About Us</a></li>
        <li><a href='contact.php'>Contact Us</a></li>
        <li class='dropdown'>
            <a href='#'>Areas of Service</a>
            <ul class='dropdown-content'>
                <li><a href='northdfw.php'>North DFW Metroplex</a></li>
                <li><a href='centraldfw.php'>Central DFW Metroplex</a></li>
                <li><a href='westdfw.php'>West DFW Metroplex</a></li>
                <li><a href='eastdfw.php'>East DFW Metroplex</a></li>
                <li><a href='southdfw.php'>South DFW Metroplex</a></li>
                <li><a href='dentondfw.php'>Denton County</a></li>
                <li><a href='tarrantdfw.php'>Tarrant County</a></li>
                <li><a href='ellisdfw.php'>Ellis County</a></li>
                <li><a href='otherdfw.php'>Other Areas</a></li>
            </ul>
        </li>
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
        <p><a href='admin.php' target='_blank'>Admin Login</a> | <a href='reviews.php'>Submit A Review</a> | <a href='privacypolicy.php'>Privacy Policy</a></p>
    </div>
</footer>
";