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
echo $HeroSlideshowStorage;
?> 

<section class="review-section">
    <h2>Why Customers Love Our Warehouse Storage Services</h2>
    <p>At Midnight Hour Moving & Storage, we offer secure and accessible warehouse storage solutions for all your short-term and long-term needs.</p>
    <div class="reviews-container">

        <div class="review-card">
            <h3>Diedre Wilhite <span style="font-size:150%;color:yellow;margin-left: .5%;">★★★★★</span></h3>
            <p class="review-info">3 reviews &bull; a year ago</p>
            <p>Needed storage for my belongings while transitioning between homes, and Midnight Hour’s warehouse was perfect! The facility was clean, secure, and easy to access whenever I needed. Highly recommend for anyone looking for reliable storage options.</p>
        </div>

        <div class="review-card">
            <h3>Cindy Liu <span style="font-size:150%;color:yellow;margin-left: 30.5%;">★★★★★</span></h3>
            <p class="review-info">1 review &bull; 5 years ago</p>
            <p>Stored my furniture and household items during a renovation, and Midnight Hour Moving & Storage was fantastic. The staff was professional and took great care of everything. I felt confident that my items were safe and secure the entire time. Highly recommend!</p>
        </div>

        <div class="review-card">
            <h3>A H <span style="font-size:150%;color:yellow;margin-left: 13.5%;">★★★★★</span></h3>
            <p class="review-info">7 reviews &bull; 5 years ago</p>
            <p>Midnight Hour’s warehouse storage saved us during an unexpected delay in our move. The facility was well-organized, and the team went above and beyond to accommodate our last-minute request. Everything was stored securely and delivered in perfect condition. A+ service!</p>
        </div>
    </div>
</section>

<?php
/////CTA/////
echo $ctaSection;
?> 

<!--FAQ-->
<section class="faq-section">
    <h2 class="faq-heading">Frequently Asked Questions About Warehouse Storage Services</h2>
    <div class="accordion-container">
        <ul id="accordion">
            <li class="faq-item">
                <input type="radio" name="accordion" id="first" checked>
                <label for="first" class="faq-label">
                    <span class="question">What types of items can I store in your warehouse?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Our warehouse can accommodate a wide range of items, including furniture, household goods, office equipment, and specialty items like artwork or antiques. Please let us know if you have specific storage needs.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="second">
                <label for="second" class="faq-label">
                    <span class="question">Is your warehouse secure?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Yes! Our warehouse is equipped with advanced security features, including 24/7 surveillance, climate control, and restricted access to ensure your items are safe and well-protected.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="third">
                <label for="third" class="faq-label">
                    <span class="question">How do I arrange for my items to be placed in storage?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Simply contact our team to schedule a pickup or drop-off. We offer flexible storage solutions and can assist with transporting your items to our facility if needed.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth" class="faq-label">
                    <span class="question">What are your storage fees?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Storage fees are based on the size of your inventory, the duration of storage, and any additional services required. Contact us for a custom quote tailored to your needs.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="fifth">
                <label for="fifth" class="faq-label">
                    <span class="question">Do you offer short-term and long-term storage options?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Yes, we provide both short-term and long-term storage solutions to meet your needs. Whether you need a temporary spot during a move or extended storage, we have you covered.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="sixth">
                <label for="sixth" class="faq-label">
                    <span class="question">Can I access my stored items?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Yes, access to your items can be arranged with prior notice. Contact our team to schedule a convenient time to retrieve or view your belongings.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="seventh">
                <label for="seventh" class="faq-label">
                    <span class="question">Do you provide packing and transportation to storage?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Yes, we offer professional packing and transportation services to ensure your items are safely moved to our warehouse. Let us know your requirements, and we’ll handle the rest.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="eighth">
                <label for="eighth" class="faq-label">
                    <span class="question">Are climate-controlled storage units available?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>Yes, our climate-controlled storage ensures that temperature-sensitive items, like electronics, artwork, and antiques, are kept in optimal conditions to prevent damage.</p>
                </div>
            </li>

            <li class="faq-item">
                <input type="radio" name="accordion" id="ninth">
                <label for="ninth" class="faq-label">
                    <span class="question">What happens if I need to extend my storage period?</span>
                    <span class="arrow">&#x3e;</span>
                </label>
                <div class="content">
                    <p>No problem! Just contact us to discuss extending your storage term. We offer flexible options to adapt to your changing needs.</p>
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
        <a href="longdistance.php" class="service-item">
            <img src="longdistancemoving.jpg" alt="Long Distance Moving Image">
            <h3>Long Distance Moving</h3>
            <p>Reliable long-distance moving services to safely relocate you to your new home.</p>
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