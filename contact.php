<?php require_once 'header.php'; ?>

<section id="contact-hero" class="page-hero">
    <div class="hero-content">
        <h1>Contact Us</h1>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Get in Touch</h2>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Our Office</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Law Street, Suite 400<br>New York, NY 10001</p>
                <h3>Email Us</h3>
                <p><i class="fas fa-envelope"></i> contact@specterassociates.com</p>
                <h3>Call Us</h3>
                <p><i class="fas fa-phone"></i> (212) 555-0176</p>
            </div>
            <div class="contact-form">
                <form id="contact-form" action="contact_handler.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>