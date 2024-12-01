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
echo $HeroSlideshowTransport;
?> 

<div class="card">
  <div class="card-header">
    <h2>RV & Auto Transport Services</h2>
  </div>
  <div class="card-body">
    <p>Changing campsites? Bought an RV online? Need help transporting your vehicle during a move? Midnight Hour Moving & Storage is here to make your transport stress-free.</p>
    
    <div class="cost-section">
      <h3>What's the Cost?</h3>
      <p><strong>Minimum Charge:</strong> $200.00</p>
      <p><strong>Mileage Rate:</strong> $1.50/mile</p>
      <p><strong>Payment Method:</strong> Cash preferred (+3% fee for credit/debit cards)</p>
      <p><em>*Prices are cash-discounted. Mileage is calculated starting from our warehouse at 3600 Bell Drive, Hurst, TX 76053.</em></p>
    </div>

    <div class="charge-example">
        <h3>How the Charge Works</h3>
        <p>Here's an example of a move from McKinney to San Antonio:</p>
        <ul class="no-bullets">
            <li><strong>Warehouse to McKinney:</strong> 51 miles</li>
            <li><strong>McKinney to San Antonio:</strong> 306 miles</li>
            <li><strong>San Antonio back to Warehouse:</strong> 279 miles</li>
        </ul>
        <p><strong>Total Miles Driven:</strong> 636 miles</p>
        <p><strong>636 miles × $1.50/mile = Estimated Total Cost: $954.00</strong></p>
    </div>
  </div>
</div>


<section class="review-section">
    <h2>Why Customers Choose Our RV & Auto Transport</h2>
    <p>Here’s what some of our customers had to say about our reliable and professional transport services:</p>
    <div class="reviews-container">
        <div class="review-card">
            <h3>John Smith <span style="font-size:150%;color:yellow;margin-left: .5%;">★★★★★</span></h3>
            <p class="review-info">5 reviews &bull; 2 months ago</p>
            <p>Midnight Hour Moving helped us move our RV from one campsite to another with ease. The team was professional and punctual, and the cost was very reasonable. Highly recommended!</p>
        </div>

        <div class="review-card">
            <h3>Sarah J. <span style="font-size:150%;color:yellow;margin-left: .5%;">★★★★★</span></h3>
            <p class="review-info">3 reviews &bull; 6 months ago</p>
            <p>I had to move my car during a cross-country relocation, and MHM made it effortless. Great communication and excellent service from start to finish!</p>
        </div>

        <div class="review-card">
            <h3>John D. <span style="font-size:150%;color:yellow;margin-left: .5%;">★★★★★</span></h3>
            <p class="review-info">5 reviews &bull; 2 weeks ago</p>
            <p>We needed to transport our RV from California to Texas, and Midnight Hour Moving & Storage did an outstanding job. The team was professional, timely, and took great care of our RV during the move. Highly recommend their services!</p>
        </div>
    </div>
</section>

<?php
/////CTA/////
echo $ctaSection;
?> 

<section class="faq-section">
    <h2 class="faq-heading">Frequently Asked Questions About RV & Auto Transport</h2>
    <div class="accordion-container">
        <ul id="accordion">
            <li class="faq-item">
                <input type="radio" name="accordion" id="first" checked>
                <label for="first" class="faq-label">
                    <span class="question">Can you transport my RV to a new campsite?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Yes, we specialize in RV transportation and can move your vehicle to any location within our service area. Contact us to schedule your move today!</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="second">
                <label for="second" class="faq-label">
                    <span class="question">How do I calculate the mileage?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>We calculate mileage starting from our warehouse at 3600 Bell Drive, Hurst, TX 76053, to the pickup and delivery locations, then back to the warehouse.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="third">
                <label for="third" class="faq-label">
                    <span class="question">Can you move more than one car at a time?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Yes, we can transport multiple vehicles at once. Let us know your needs when you contact us for a quote.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="services-section">
    <h2>Other Services We Provide</h2>
    <div class="services-grid">
        <a href="packing.php" class="service-item">
            <img src="packing2.jpg" alt="Packing Supplies Image">
            <h3>Packing Help & Supplies</h3>
            <p>Comprehensive packing assistance and top-quality supplies to ensure your belongings are secure.</p>
        </a>
        <a href="storage.php" class="service-item">
            <img src="storage.jpg" alt="Warehouse Storage Image">
            <h3>Warehouse Storage</h3>
            <p>Secure and accessible warehouse storage for short or long-term needs.</p>
        </a>
        <a href="longdistance.php" class="service-item">
            <img src="longdistancemoving.jpg" alt="Long Distance Moving Image">
            <h3>Long Distance Moving</h3>
            <p>Reliable long-distance moving services to safely relocate you to your new home.</p>
        </a>
    </div>
</section>

<?php
/////FOOTER/////
echo $Footer;
?>
<script src="js/script.js"></script>
</body>
</html>
