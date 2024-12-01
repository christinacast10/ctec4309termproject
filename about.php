
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
echo $HeroSlideshow;
?> 
<body>
    <section class="about-section">
        <div class="about-image">
            <img src="team.JPG" alt="Our Team at Midnight Hour Moving">
        </div>
        <div class="about-content">
            <h1>About Us</h1>
            <p>
                At Midnight Hour Moving, we specialize in providing exceptional moving services tailored to meet your unique needs. 
                Our dedicated team of professionals has years of experience ensuring your belongings are safely transported, whether 
                it’s a local move or a long-distance journey. We pride ourselves on reliability, efficiency, and customer satisfaction.
            </p>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <h1>Locally Owned, Community Trusted</h1>
            <p>
            At Midnight Hour Moving, we are proud to be a locally owned and operated business serving Arlington, TX, and the surrounding 
            areas since 2005. Our deep roots in the community have allowed us to build lasting relationships with our customers, 
            earning their trust and loyalty through personalized service and a commitment to excellence. We understand the unique 
            needs of our neighbors because we’re more than just a moving company—we’re a part of the community.
            </p>
            <p>With nearly two decades of experience, we’ve built a reputation for reliability, professionalism, and care. 
                From local moves to long-distance relocations, our skilled team handles your belongings as if they were our own. 
                We strive to take the stress out of moving by offering transparent pricing, flexible scheduling, and a customer-first approach.
            </p>
            <p>Choosing Midnight Hour Moving means choosing a company that values integrity, quality, and your peace of mind. 
                Whether you’re moving your family, your business, or just a few cherished items, you can count on us to deliver a seamless 
                and stress-free experience every time. Let us show you why so many Texans trust us with their moves.</p>
        </div>
        <div class="about-image">
            <img src="team2.jpg" alt="Our Team at Midnight Hour Moving">
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
