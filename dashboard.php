<?php
  include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Safar Go</title>
    <link rel="shortcut icon" href="./assets/favicon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaquery.css" />
  </head>
  <body>

    <main>
      <!-- hero section(main part)  -->
      <section>
        <div class="main-section">
          <div class="main-left">
            <h1>Safar Go</h1>
            <p>LET'S PLAN YOUR SWEET HOLIDAYS</p>
            <a
              href="./registrastion.php"
              class="secondary-button"
              
              >Make A Registration</a
            >
          </div>
          <div class="main-right">
            <!-- slider saction  -->
            <div class="slideshow-container">
              <div class="mySlides fade">
                <img src="./assets/slider_1.jpeg" />
              </div>

              <div class="mySlides fade">
                <img src="./assets/slider_2.avif" />
              </div>

              <div class="mySlides fade">
                <img src="./assets/slider_3.avif" />
              </div>

              <div class="mySlides fade">
                <img src="./assets/slider_4.avif" />
              </div>

              <div class="mySlides fade">
                <img src="./assets/slider_5.avif" />
              </div>

              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <!-- slider end -->
          </div>
        </div>
      </section>

      <!-- Special Offers Section -->
      <section class="special-offers">
        <h2>Special Offers</h2>

        <div class="offer">
          <h3>Summer Adventure</h3>
          <p>Save 15% on summer adventure packages. Limited time offer!</p>
          <button class="btn">
            <a href="./packages.php" >View offer</a>
          </button>
        </div>

        <div class="offer">
          <h3>Family Getaway</h3>
          <p>
            Plan a memorable family vacation with our exclusive family packages.
          </p>
          <button class="btn">
            <a href="./packages.php" >View offer</a>
          </button>
        </div>

        <div class="offer">
          <h3>Tracking Adventure</h3>
          <p>
            Experience the magic of winter with our special discounts on
            Adventure.
          </p>
          <button class="btn">
            <a href="./packages.php" >View offer</a>
          </button>
        </div>
      </section>

      <!-- Travel blog section -->
      <section>
        <div class="blog-header">
          <h2>Safar Go - Travel Blog</h2>
        </div>
        <div class="blog-container">
          <div class="blog-post">
            <h3 class="blog-title">Exploring the Beauty of Bali</h3>
            <p class="blog-meta">Posted by John Doe | June 15, 2023</p>
            <p class="blog-content">
              Bali, known as the Island of the Gods, is a true paradise on
              earth. From pristine beaches to lush rice terraces and vibrant
              culture, Bali has it all. In this blog post, we'll take you on a
              journey through the breathtaking landscapes and rich traditions of
              Bali. Don't miss the chance to experience this magical island!
            </p>
          </div>
          <div class="blog-post">
            <h3 class="blog-title">Hiking the Inca Trail in Peru</h3>
            <p class="blog-meta">Posted by Jane Smith | July 10, 2023</p>
            <p class="blog-content">
              The Inca Trail in Peru is a trek of a lifetime. This ancient path
              leads you through stunning mountain scenery, dense forests, and
              ancient ruins. Follow our adventure as we hike to the majestic
              Machu Picchu and uncover the secrets of the Inca civilization. Get
              ready to be amazed by the breathtaking views and history that
              surrounds you.
            </p>
          </div>

          <div class="blog-post">
            <h3 class="blog-title">A Safari Adventure in Africa</h3>
            <p class="blog-meta">Posted by Emily Johnson | August 20, 2023</p>
            <p class="blog-content">
              Embark on a thrilling safari adventure in the heart of Africa.
              Witness the incredible wildlife, including lions, elephants, and
              giraffes, in their natural habitat. Our journey takes you to the
              Serengeti National Park and Maasai Mara Reserve, where you'll
              experience the wonder of the animal kingdom up close. Prepare for
              breathtaking encounters and unforgettable moments on this safari
              of a lifetime.
            </p>
          </div>
          <div class="blog-post">
            <h3 class="blog-title">Exploring the Greek Islands</h3>
            <p class="blog-meta">Posted by Alex Turner | September 5, 2023</p>
            <p class="blog-content">
              The Greek Islands are a Mediterranean paradise waiting to be
              explored. From the white-washed buildings of Santorini to the
              historic streets of Athens, this destination offers a blend of
              history, culture, and natural beauty. Join us as we island-hop
              through this enchanting archipelago, savoring Greek cuisine, and
              discovering hidden gems along the way. Get ready for a sun-soaked
              adventure you'll never forget.
            </p>
          </div>
        </div>
      </section>

      <!-- Testimonials Section -->
      <section>
        <div class="testimonials">
          <h2>What Our Customers Say</h2>
          <div class="testimonial">
            <img src="./assets/customer_1.avif" alt="Customer 1" />
            <p>
              "Safar Go made our honeymoon unforgettable. The attention to
              detail and personalized service were exceptional. We can't wait to
              book our next adventure!"
            </p>
            <p class="customer-name">Suresh and Priya</p>
          </div>
          <div class="testimonial">
            <img src="./assets/customer_2.avif" alt="Customer 2" />
            <p>
              "Our family trip with Safar Go was fantastic. From the
              accommodations to the activities, everything was well-planned. We
              created beautiful memories together."
            </p>
            <p class="customer-name">The Smith Family</p>
          </div>
          <div class="testimonial">
            <img src="./assets/customer_3.avif" alt="Customer 3" />
            <p>
              "I'm a solo traveler, and Safar Go made me feel safe and taken
              care of during my adventure. Their guides were knowledgeable, and
              I met amazing people along the way."
            </p>
            <p class="customer-name">Jaydeep</p>
          </div>
        </div>
      </section>
    </main>

    <!-- footer box -->
    <footer class="footer">
      <div class="container">
        <div class="footer-content">
          <div class="footer-logo">
            <a href="#"
              ><img src="./assets/asset 0.jpeg" alt="Safar Go Logo"
            /></a>
          </div>
          <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="./gallery.php" >Gallery</a></li>
              <li><a href="./packages.php" >Packages</a></li>              
              <li><a href="./booknow.php" >Book Now</a></li>
              <li><a href="./about.php" >About us</a></li>
              <li><a href="./contact.php" >Contact us</a></li>
            </ul>
          </div>
          <div class="footer-contact">
            <h4>Contact Us</h4>
            <p>Email: info@safargo.com</p>
            <p>Phone: +91 9558658108</p>
          </div>
        </div>
        <hr class="footer-divider" />
        <div class="footer-bottom">
          <p>&copy; 2023 Safar Go - All Rights Reserved</p>
          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <script src="script.js"></script>
    <script
      src="https://kit.fontawesome.com/76a79fb4e9.js"
      crossorigin="anonymous"
    ></script>

    <!-- javascript code for slider -->
    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
  </body>
</html>
