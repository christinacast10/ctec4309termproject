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

<!-- Review Submission Form -->
<div class="container">
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize and retrieve form data
            $name = htmlspecialchars($_POST['name']);
            $phone = htmlspecialchars($_POST['phone']);
            $rating = htmlspecialchars($_POST['rating']);
            $comments = htmlspecialchars($_POST['comments']);

            // Simulate submission and database storage
            if ($name && $rating && $comments) {
                // Simulate success message after submission
                echo "<div class='success'>";
                echo "<p>Thank you, <strong>$name</strong>, for your review!</p>";
                echo "<p>Your review has been submitted for staff review. We appreciate your feedback.</p>";
                echo "</div>";
            } else {
                // Simulate error message if something is missing
                echo "<div class='error'>";
                echo "<p>There was an error with your submission. Please make sure all required fields are filled out.</p>";
                echo "</div>";
            }
        }
    ?>
    <div class="contact-form">
        <h3>Submit Your Review</h3>
        <p>We'd love to hear about your experience! Please take a moment to submit your review.</p>
        
        <!-- Review Form -->
        <form action="reviews.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            
            <label for="phone">Phone Number (Optional)</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
            
            <label for="rating">Rating (1 to 5 stars)</label>
            <select id="rating" name="rating" required>
                <option value="">Select Rating</option>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
            
            <label for="comments">Comments</label>
            <textarea id="comments" name="comments" rows="5" placeholder="Write your comments here..." required></textarea>
            
            <button type="submit">Submit Review</button>
        </form>
    </div>
</div>

<?php
/////FOOTER/////
echo $Footer;
?>

<script src="js/script.js"></script>
</body>
</html>
