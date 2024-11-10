<?php
include 'shared.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Midnight Hour Movers</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
/////NAV/////
echo $Nav;
?>


<section class="contact-section">
    <h2 class="contact-heading">Contact Us</h2>

    <div class="contact-info">
        <div class="contact-item">
            <h3>Customer Service</h3>
            <p><a href="mailto:Info@MidnightHourMoving.com">Info@MidnightHourMoving.com</a></p>
            <p><strong>Phone:</strong> <a href="tel:+18173991300">817-399-1300</a></p>
            <p><strong>Text Only:</strong> <a href="tel:+18179886942">817-988-6942</a></p>
        </div>

        <div class="contact-item">
            <h3>Owner</h3>
            <p><a href="mailto:Marcus@MidnightHourMoving.com">Marcus@MidnightHourMoving.com</a></p>
        </div>

        <div class="contact-item">
            <h3>Operations Manager</h3>
            <p><a href="mailto:Steven@MidnightHourMoving.com">Steven@MidnightHourMoving.com</a></p>
        </div>

        <div class="contact-item">
            <h3>Claims Department</h3>
            <p><a href="mailto:Claims@MidnightHourMoving.com">Claims@MidnightHourMoving.com</a></p>
        </div>

        <div class="contact-item">
            <h3>Location</h3>
            <p><strong>Midnight Hour Moving</strong></p>
            <p>3600 Bell Dr Ste A, Hurst, TX 76053</p>
        </div>
    </div>

    <form action="process_form.php" method="POST" class="contact-form">
    <h3>Contact Us</h3>
    
    <label for="name">Name (Required):</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email (Required):</label>
    <input type="email" id="email" name="email" required>
    
    <label for="phone">Phone (Optional):</label>
    <input type="text" id="phone" name="phone">
    
    <label for="inquiry_type">Inquiry Type (Required):</label>
    <select id="inquiry_type" name="inquiry_type" required>
        <option value="General Inquiry">General Inquiry</option>
        <option value="Moving Quote">Moving Quote</option>
        <option value="Feedback">Feedback</option>
        <option value="Job Inquiry">Job Inquiry</option>
        <option value="Support">Support</option>
    </select>
    
    <label for="message">Message (Required):</label>
    <textarea id="message" name="message" required></textarea>
    
    <button type="submit">Submit</button>
</form>

    <!-- Local Reviews -->
    <div class="reviews-section">
        <h3>Local Reviews</h3>
        <div class="reviews-container">
            <div class="review-item">
                <p>"Great moving company! Professional, quick, and affordable. Highly recommend!" - John D.</p>
            </div>
            <div class="review-item">
                <p>"The team was fantastic! They made our move easy and stress-free. 5 stars!" - Sarah T.</p>
            </div>
            <div class="review-item">
                <p>"Super friendly and efficient. The crew took excellent care of our belongings!" - Jason M.</p>
            </div>
            <div class="review-item">
                <p>"Awesome experience! Will definitely use them again for our next move." - Emily S.</p>
            </div>
            <div class="review-item">
                <p>"Top-notch service from start to finish. Professional and courteous staff!" - Mark L.</p>
            </div>
        </div>
    </div>

    <!-- Long Distance Reviews -->
    <div class="reviews-section">
        <h3>Long Distance Reviews</h3>
        <div class="reviews-container">
            <div class="review-item">
                <p>"Made our cross-country move seamless. Highly recommend them for long-distance moving!" - Robert H.</p>
            </div>
            <div class="review-item">
                <p>"Professional movers who really care about the safety of your belongings. Very impressed!" - Megan W.</p>
            </div>
            <div class="review-item">
                <p>"Great company for long-distance moves. On time, friendly, and efficient!" - Anna P.</p>
            </div>
        </div>
    </div>

    <!-- Video Review Section -->
    <div class="video-review">
        <h3>Watch Our Client Video Reviews</h3>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_URL_HERE" title="Video Review" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <!-- Google Storefront Linked -->
    <div class="google-storefront">
        <h3>Check Our Google Storefront</h3>
        <p><a href="https://g.co/kgs/AZQ43V9" target="_blank">View our reviews on Google</a></p>
    </div>

    <!-- Social Media Links -->
    <div class="contact-social">
        <h3>Follow Us</h3>
        <p>Stay connected with us on social media:</p>
        <div class="social-icons">
            <a href="https://facebook.com/YourPage" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/YourHandle" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/YourHandle" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://linkedin.com/company/YourCompany" class="social-icon"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

</section>
<?php
/////FOOTER/////
echo $Footer;
?>
<script src="js/script.js"></script>
</body>
</html>