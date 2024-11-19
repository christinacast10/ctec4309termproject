<?php
include 'shared.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $Head ?>
<body>

<?php
/////NAV/////
echo $Nav;
?>

<?php
/////SLIDESHOW/////
echo $areasofserviceslideshow;
?> 

<?php
$page_title = "West DFW"; 
?>

    <section class="hero">
        <h1><?php echo $page_title; ?></h1>
        <p>Your reliable moving company for all your moving needs in <?php echo $page_title; ?> and beyond!</p>
    </section>

    <section class="targeted-areas">
    <h2>Areas We Serve in <?php echo $page_title; ?></h2>
    <p>We proudly provide moving services to the following areas within the <?php echo $page_title; ?> Metroplex:</p>
    <div class="areas-list">
    <ul>
        <li><span class="area-icon">&#x1F4CD;</span> Aledo</li>
        <li><span class="area-icon">&#x1F4CD;</span> Arlington</li>
        <li><span class="area-icon">&#x1F4CD;</span> Benbrook</li>
        <li><span class="area-icon">&#x1F4CD;</span> Burleson</li>
        <li><span class="area-icon">&#x1F4CD;</span> Crowley</li>
        <li><span class="area-icon">&#x1F4CD;</span> Fort Worth</li>
        <li><span class="area-icon">&#x1F4CD;</span> Granbury</li>
        <li><span class="area-icon">&#x1F4CD;</span> Haltom City</li>
        <li><span class="area-icon">&#x1F4CD;</span> Hudson Oaks</li>
        <li><span class="area-icon">&#x1F4CD;</span> Keller</li>
        <li><span class="area-icon">&#x1F4CD;</span> Weatherford</li>
        <li><span class="area-icon">&#x1F4CD;</span> White Settlement</li>
        <li><span class="area-icon">&#x1F4CD;</span> Willow Park</li>
    </ul>
    </div>
</section>

    <section class="about">
        <h2>Why Choose Us for Your Move to <?php echo $page_title; ?>?</h2>
        <p>At Midnight Hour Moving, we have been serving the <?php echo $page_title; ?> area for years, helping individuals, families, and businesses relocate with ease. Our team of professional movers is dedicated to making your move stress-free, no matter the size of your move.</p>
    </section>

    <section class="services-section">
    <h2>Our Moving Services</h2>
    <div class="services-grid">
        <div class="service-item">
            <span class="service-icon">📦</i>
            <h3>Packing Help & Supplies</h3>
            <p>Comprehensive packing assistance and top-quality supplies to secure your belongings.</p>
        </div>
        <div class="service-item">
            <span class="service-icon">🏠</span>
            <h3>Local DFW Moving</h3>
            <p>Expert local moving services throughout the DFW area, tailored to your needs.</p>
        </div>
        <div class="service-item">
            <span class="service-icon">🚚</span>
            <h3>Long Distance Moving</h3>
            <p>Reliable long-distance moving services to safely relocate you to your new home.</p>
        </div>
        <div class="service-item">
            <span class="service-icon">🏢</span>
            <h3>Warehouse Storage</h3>
            <p>Secure and accessible warehouse storage for short or long-term needs.</p>
        </div>
        <div class="service-item">
            <span class="service-icon">🗑️</span>
            <h3>Junk Removal</h3>
            <p>Quick and efficient junk removal services to help you declutter and reclaim space.</p>
        </div>
        <div class="service-item">
            <span class="service-icon">🚗</span>
            <h3>RV/Auto Transport</h3>
            <p>Specialized transportation services for RVs and autos across the region.</p>
        </div>
    </div>
</section>

    <section class="testimonials">
        <h2>What Our Customers Are Saying</h2>
        <p>"The team at Midnight Hour Moving made our move to <?php echo $page_title; ?> seamless. Highly recommend!" - <strong>Jane Doe</strong></p>
        <p>"Excellent service and professionalism. We couldn't have asked for a better moving experience in <?php echo $page_title; ?>." - <strong>John Smith</strong></p>
    </section>

    <section class="free-estimate">
    <h2>Get Your Free Estimate</h2>
    <p>Ready to move? Fill out the form below for a free moving estimate and get started with your relocation today.</p>
    <form class="contact-form" action="quote.php" method="POST">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

        <label for="move-date">Preferred Move Date</label>
        <input type="date" id="move-date" name="move_date" required>

        <label for="from-address">Starting Address</label>
        <input type="text" id="from-address" name="from_address" placeholder="Enter the starting address" required>

        <label for="to-address">Destination Address</label>
        <input type="text" id="to-address" name="to_address" placeholder="Enter the destination address" required>

        <label for="details">Additional Details</label>
        <textarea id="details" name="details" rows="5" placeholder="Provide any additional details about your move"></textarea>

        <button type="submit">Submit Request</button>
    </form>
</section>

<section class="why-choose-us">
    <h2>Why Choose Us?</h2>
    <ul class="aligned-list">
        <li><span class="star">&#9733;</span> <strong>24/7 Customer Service</strong></li>
        <li><span class="star">&#9733;</span> <strong>Transparent Pricing with No Hidden Fees</strong></li>
        <li><span class="star">&#9733;</span> <strong>Fully Insured and Licensed</strong></li>
        <li><span class="star">&#9733;</span> <strong>Professional Movers with Years of Experience</strong></li>
        <li><span class="star">&#9733;</span> <strong>Real, Unfiltered Customer Reviews</strong></li>
    </ul>
</section>

<?php
/////FOOTER/////
echo $Footer;
?>


</body>
</html>
