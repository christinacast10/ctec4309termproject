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

<!-- Educational Resources Section -->
<div class="container">
    <h2>Educational Resources</h2>
    <div class="resource-cards">
        <!-- Row 1 of Cards -->
        <div class="card">
            <h3>Packing Tips</h3>
            <p>Learn how to pack efficiently and safely for your move. Our expert packing tips will help protect your valuables.</p>
        </div>
        <div class="card">
            <h3>Storage Tips</h3>
            <p>Maximize your storage space with these easy-to-follow tips. Ideal for temporary or long-term storage needs.</p>
        </div>
        <div class="card">
            <h3>What to Know About Moving Companies</h3>
            <p>Everything you need to know before hiring a moving company. Get the inside scoop on choosing the right movers.</p>
        </div>

        <!-- Row 2 of Cards -->
        <div class="card">
            <h3>Moving to Dallas</h3>
            <p>Moving to Dallas? Check out our tips on settling in and making the transition smooth and easy.</p>
        </div>
        <div class="card">
            <h3>Moving Costs</h3>
            <p>Understand the costs involved in your move, from labor to transportation, and how to budget effectively.</p>
        </div>
        <div class="card">
            <h3>Moving Checklist</h3>
            <p>Stay on top of your moving plan with our comprehensive checklist, covering everything you need to do before, during, and after your move.</p>
        </div>
    </div>

    <!-- Newsletter Signup Section -->
    <div class="newsletter-signup">
        <h3>Sign Up for Our Quarterly Newsletter</h3>
        <p>Get more tips, discounts, and moving updates delivered straight to your inbox!</p>
        
        <!-- Newsletter Form -->
        <form action="resources.php" method="POST">
            <label for="email">Your Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = htmlspecialchars($_POST['email']);
            // Simulate storing the email (could be saved to database or email list here)
            echo "<div class='success'>";
            echo "<p>Thank you for subscribing! You'll receive the latest tips and discounts in your inbox soon.</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<?php
/////FOOTER/////
echo $Footer;
?>

<script src="js/script.js"></script>
</body>
</html>
