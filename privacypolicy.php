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

<body>
    <main class="privacy-policy">
        <section class="faq-section">
            <h2 class="faq-heading">Privacy Policy</h2>
            <div class="accordion-container">
                <ul id="accordion">
                    <li class="faq-item">
                        <input type="radio" name="accordion" id="introduction" checked>
                        <label for="introduction" class="faq-label">
                            <span class="question">1. Introduction</span>
                            <span class="arrow">&#x3e;</span>
                        </label>
                        <div class="content">
                            <p>Midnight Hour Movers is committed to protecting your privacy. This policy explains how we collect, use, and safeguard your information when you use our services or website.</p>
                        </div>
                    </li>

                    <li class="faq-item">
                        <input type="radio" name="accordion" id="data-collection">
                        <label for="data-collection" class="faq-label">
                            <span class="question">2. Personal Data We Collect</span>
                            <span class="arrow">&#x3e;</span>
                        </label>
                        <div class="content">
                            <p>We may collect personal information such as your name, email address, phone number, and payment details. Additionally, we collect technical data like your IP address and browser type for analytics purposes.</p>
                        </div>
                    </li>

                    <li class="faq-item">
                        <input type="radio" name="accordion" id="cookie-policy">
                        <label for="cookie-policy" class="faq-label">
                            <span class="question">3. Cookie Policy</span>
                            <span class="arrow">&#x3e;</span>
                        </label>
                        <div class="content">
                            <p>We use cookies to enhance your browsing experience. You can manage your cookie preferences through your browser settings. For more information, refer to our cookie usage guidelines.</p>
                        </div>
                    </li>

                    <li class="faq-item">
                        <input type="radio" name="accordion" id="data-retention">
                        <label for="data-retention" class="faq-label">
                            <span class="question">4. Retention & Deletion</span>
                            <span class="arrow">&#x3e;</span>
                        </label>
                        <div class="content">
                            <p>We retain personal data for as long as necessary to provide our services and comply with legal obligations. Users can request data deletion at any time.</p>
                        </div>
                    </li>

                    <li class="faq-item">
                        <input type="radio" name="accordion" id="rights">
                        <label for="rights" class="faq-label">
                            <span class="question">5. Your Rights to Your Personal Data</span>
                            <span class="arrow">&#x3e;</span>
                        </label>
                        <div class="content">
                            <p>You have the right to access, update, delete, or restrict the use of your personal data. To exercise your rights, please contact us using the information below.</p>
                        </div>
                    </li>

                    <li class="faq-item">
                        <input type="radio" name="accordion" id="changes">
                        <label for="changes" class="faq-label">
                            <span class="question">6. Changes</span>
                            <span class="arrow">&#x3e;</span>
                        </label>
                        <div class="content">
                            <p>We may update this Privacy Policy from time to time. Changes will be reflected on this page with an updated effective date.</p>
                        </div>
                    </li>

                    <li class="faq-item">
                        <input type="radio" name="accordion" id="complaints">
                        <label for="complaints" class="faq-label">
                            <span class="question">7. Complaints</span>
                            <span class="arrow">&#x3e;</span>
                        </label>
                        <div class="content">
                            <p>If you believe we have mishandled your personal data, please contact us directly. You also have the right to lodge a complaint with your local data protection authority.</p>
                        </div>
                    </li>

                    <li class="faq-item">
                        <input type="radio" name="accordion" id="contact">
                        <label for="contact" class="faq-label">
                            <span class="question">8. Contact Us</span>
                            <span class="arrow">&#x3e;</span>
                        </label>
                        <div class="content">
                            <p>To request a copy of your information, unsubscribe from our email list, request data deletion, or ask a question about this policy, please contact us:</p>
                            <ul>
                                <li>Email: <a href="mailto:info@midnighthourmovers.com">info@midnighthourmovers.com</a></li>
                                <li>Phone: (817) 399-1300</li>
                            </ul>
                            <p>Alternatively, click the button below to make a data request:</p>
                            <button onclick="location.href='#contact'">Make a Data Request</button>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>
<?php
/////FOOTER/////
echo $Footer;
?>
</body>
</html>