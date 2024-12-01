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
echo $HeroSlideshowServices;
?> 


<section class="services-section">
    <h2>Services We Provide</h2>
    <div class="services-grid">
        <a href="packing.php" class="service-item">
            <img src="packing2.jpg" alt="Packing Supplies Image">
            <h3>Packing Help & Supplies</h3>
            <p>Comprehensive packing assistance and top-quality supplies to ensure your belongings are secure.</p>
            <button class="cta-button">Learn More</button>
        </a>
        <a href="localmove.php" class="service-item">
            <img src="localmove.jpg" alt="Local Moving Image">
            <h3>Local DFW Moving</h3>
            <p>Expert local moving services throughout the DFW area, tailored to your needs.</p>
            <button class="cta-button">Learn More</button>
        </a>
        <a href="longdistance.php" class="service-item">
            <img src="longdistancemoving.jpg" alt="Long Distance Moving Image">
            <h3>Long Distance Moving</h3>
            <p>Reliable long-distance moving services to safely relocate you to your new home.</p>
            <button class="cta-button">Learn More</button>
        </a>
        <a href="storage.php" class="service-item">
            <img src="storage.jpg" alt="Warehouse Storage Image">
            <h3>Warehouse Storage</h3>
            <p>Secure and accessible warehouse storage for short or long-term needs.</p>
            <button class="cta-button">Learn More</button>
        </a>
        <a href="junkremoval.html" class="service-item">
            <img src="waste.jpg" alt="Junk Removal Image">
            <h3>Junk Removal</h3>
            <p>Quick and efficient junk removal services to help you declutter and reclaim your space.</p>
            <button class="cta-button">Learn More</button>
        </a>
        <a href="autotransport.php" class="service-item">
            <img src="tow.jpg" alt="Tow Image">
            <h3>RV/Auto Transport</h3>
            <p>Specialized transportation services for RVs and autos across the region.</p>
            <button class="cta-button">Learn More</button>
        </a>
    </div>
</section>

<?php
/////CTA/////
echo $ctaSection;
?> 

<?php
/////FOOTER/////
echo $Footer;
?>
<script src="js/script.js"></script>
</body>
</html>