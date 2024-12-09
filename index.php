<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDE Services - Solar, CCTV, Home Network</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<header class="header">
    <h1>CDE SERVICES</h1>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#services">Services</a>
        <a href="#gallery">Gallery</a>
        <a href="contact.php">Contact Us</a>
        <a href="#reviews">Reviews</a>
    </nav>
</header>

<section id="home" class="hero">
    <div class="hero-content">
        <h1>Welcome to CDE Services</h1>
        <p>Your trusted partner for Solar, CCTV, and Home Network services.</p>
        <a href="#services" class="btn">Explore Services</a>
    </div>
</section>

<section id="about" class="about">
    <div class="container">
        <div class="about-content">
            <div class="about-image-container">
                <img src="images/sample.jpg" alt="About Us" class="about-img">
            </div>
            <div class="about-text">
                <h2>Our History</h2>
                <p>We provide top-notch solar, CCTV, and internet services tailored to meet your needs, ensuring excellent speed, reliability, and support for all our customers.</p>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services">
    <h2>Our Premium Services</h2>
    <p>Explore cutting-edge solutions tailored to your needs.</p>
    <div class="service-list">

        <div class='service-item'>
            <img src='./gallery/cctv1.jpg'>
            <h3>CCTV</h3>
            <p>Ensure your security with high-quality CCTV systems designed to protect your home or business, providing you with 24/7 peace of mind. </p>
            <a href='contact.php' class='btn'>Inquire Now</a>
        </div>

        <div class='service-item'>
            <img src='./gallery/network1.jpg'>
            <h3>NETWORK</h3>
            <p>Stay connected with reliable and efficient network setups tailored to your needs, whether for personal use or business operations. </p>
            <a href='contact.php' class='btn'>Inquire Now</a>
        </div>

        <div class='service-item'>
            <img src='./gallery/solar1.jpg'>
            <h3>SOLAR</h3>
            <p>Harness the power of the sun with our sustainable solar energy solutions, helping you save on energy costs while protecting the environment.</p>
            <a href='contact.php' class='btn'>Inquire Now</a>
        </div>
    </div>
</section>

<section id="gallery" class="gallery">
    <h2>Gallery</h2>
    <p>Take a look at some of our recent projects.</p>
    <div class="gallery-images">
        <div class="card">
            <img src="./images/project1.jpg" alt="">
            <p class="project-label">Project 1</p>
        </div>

        <div class="card">
            <img src="./images/project3.jpg" alt="">
            <p class="project-label">Project 2</p>
        </div>

        <div class="card">
            <img src="./images/project2.jpg" alt="">
            <p class="project-label">Solar</p>
        </div>

        <div class="card">
            <img src="./images/project4.jpg" alt="">
            <p class="project-label">Solar</p>
        </div>
    </div>
</section>

<section id="reviews" class="reviews">
    <h2>Testimonials</h2>
    <div class="review-list">
        <div class="testimonial">
            <p class="quote">"The installation was quick, and the system is easy to use. I can monitor my property anytime, anywhere, which gives me great peace of mind!"</p>
            <div class="client">
                <img src="./images/clients/c3.png" alt="">
                - Sophia R., Homeowner
            </div>
        </div>

        <div class="testimonial">
            <p class="quote">"Our office's internet connectivity has never been better! Their network solution was efficient and perfectly suited to our needs. Highly recommend their services!"</p>
            <div class="client">
                <img src="./images/clients/c2.png" alt="">
                - John D.
            </div>
        </div>

        <div class="testimonial">
            <p class="quote">"Switching to solar energy was the best decision we made this year. The installation was seamless, and we're already seeing savings on our bills. Great service!"</p>
            <div class="client">
                <img src="./images/clients/c1.png" alt="">
                - Emma L.,
            </div>
        </div>
    </div>
</section>

<section id="add-review" class="add-review">
    <h2>Add Your Review</h2>
    <form action="add_review.php" method="POST">
        <label for="client_name">Name:</label>
        <input type="text" id="client_name" name="client_name" required>

        <label for="review">Review:</label>
        <textarea id="review" name="review" rows="4" required></textarea>

        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
            <option value="0">Select a rating</option>
            <option value="5">5 - Excellent</option>
            <option value="4">4 - Very Good</option>
            <option value="3">3 - Good</option>
            <option value="2">2 - Fair</option>
            <option value="1">1 - Poor</option>
        </select>

        <input type="submit" value="submit" class="submit" id="submit">
    </form>
</section>

<script>
    function submitReview() {
        event.preventDefault();
    }
</script>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> CDE Services. All rights reserved.</p>
        <p>
            <a href="mailto:info@cdeservices.com">info@cdeservices.com</a> |
            <a href="tel:+639456789012">+63 945 678 9012</a>
        </p>
        <p>
            Follow us:
            <a href="#">Facebook</a> |
            <a href="#">Instagram</a> |
            <a href="#">Twitter</a>
        </p>
    </div>
</footer>

<script src="js/script.js"></script>
</body>

</html>