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
echo $HeroSlideshowJunkRemoval;
?> 

<section class="review-section">
    <h2>Why Customers Love Our Junk Removal Services</h2>
    <p>From clearing out your garage to hauling away old furniture, Midnight Hour Junk Removal is committed to providing fast, affordable, and eco-friendly services.</p>
    <div class="reviews-container">

        <div class="review-card">
            <h3>Diedre Wilhite <span style="font-size:150%;color:yellow;margin-left: .5%;">★★★★★</span></h3>
            <p class="review-info">3 reviews &bull; a year ago</p>
            <p>We needed help clearing out a lot of old furniture, and Midnight Hour Junk Removal was incredible! The team was efficient, courteous, and got the job done quickly. Highly recommend for a stress-free junk removal experience!</p>
        </div>

        <div class="review-card">
            <h3>Cindy Liu <span style="font-size:150%;color:yellow;margin-left: 30.5%;">★★★★★</span></h3>
            <p class="review-info">1 review &bull; 5 years ago</p>
            <p>Used Midnight Hour Junk Removal for clearing out a storage unit before moving. They were on time, professional, and very thorough. Everything was handled with care, and they made sure to dispose of everything responsibly. Highly recommend!</p>
        </div>

        <div class="review-card">
            <h3>A H <span style="font-size:150%;color:yellow;margin-left: 13.5%;">★★★★★</span></h3>
            <p class="review-info">7 reviews &bull; 5 years ago</p>
            <p>Had a huge garage cleanout, and Midnight Hour Junk Removal was amazing. The team was fast, friendly, and made sure everything was removed without any hassle. Highly recommend them for anyone looking to declutter!</p>
        </div>
    </div>
</section>


<?php
/////CTA/////
echo $ctaSection;
?> 

<section class="faq-section">
    <h2 class="faq-heading">Frequently Asked Questions About Junk Removal</h2>
    <div class="accordion-container">
        <ul id="accordion">
            <li class="faq-item">
                <input type="radio" name="accordion" id="first" checked>
                <label for="first" class="faq-label">
                    <span class="question">How do I get a quote for junk removal?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>To get a quote, simply contact Midnight Hour Junk Removal. We’ll assess your junk removal needs and provide a free, upfront estimate.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="second">
                <label for="second" class="faq-label">
                    <span class="question">How far in advance should I schedule junk removal?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>We recommend scheduling your junk removal at least a few days in advance. For larger cleanouts, we suggest booking at least a week in advance to ensure availability.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="third">
                <label for="third" class="faq-label">
                    <span class="question">Do you remove hazardous materials?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>No, we cannot remove hazardous materials such as chemicals, asbestos, or medical waste. We recommend contacting a specialized service for these items.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth" class="faq-label">
                    <span class="question">What forms of payment do you accept?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>We accept Cash, Credit Cards, and Debit Cards. A 3% convenience fee applies to card payments, which you can avoid by paying in cash.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="fifth">
                <label for="fifth" class="faq-label">
                    <span class="question">How do I prepare for junk removal?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Simply have the junk you want to remove easily accessible. Our team will handle the heavy lifting and ensure everything is cleared out efficiently.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="sixth">
                <label for="sixth" class="faq-label">
                    <span class="question">Do you offer same-day junk removal?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Yes! We offer same-day junk removal services based on availability. Contact us early in the day to ensure we can accommodate your request.</p>
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
        <a href="autotransport.php" class="service-item">
            <img src="tow.jpg" alt="Tow Image">
            <h3>RV/Auto Transport</h3>
            <p>Specialized transportation services for RVs and autos across the region.</p>
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