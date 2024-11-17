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
echo $HeroQuote;
?> 
<div class="container">
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize and retrieve form data
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $move_date = htmlspecialchars($_POST['move_date']);
            $from_address = htmlspecialchars($_POST['from_address']);
            $to_address = htmlspecialchars($_POST['to_address']);
            $details = htmlspecialchars($_POST['details']);

            $isSuccess = true;  // for mockup purposes, simulating success message
            if ($isSuccess) {
                echo "<div class='success'>";
                echo "<p>Thank you, <strong>$name</strong>! Your moving quote request has been received.</p>";
                echo "<p>We’ll contact you at <strong>$email</strong> or <strong>$phone</strong> soon.</p>";
                echo "</div>";
            } else {
                echo "<div class='error'>";
                echo "<p>Oops! Something went wrong. Please try again later.</p>";
                echo "</div>";
            }
        }
    ?>
</div>
<div class="container">
        <form class="contact-form" action="quote.php" method="POST">
        <h1>Request Your Free Moving Quote</h1>
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
</div>
        
    

<?php
/////FOOTER/////
echo $Footer;
?>
<script src="js/script.js"></script>
</body>
</html>