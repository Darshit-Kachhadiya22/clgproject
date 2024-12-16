<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Packages - Safar Go</title>
    <link rel="stylesheet" href="style.css">
    <style>
      a {
        text-decoration: none;
      }

      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #8ec5fc;
        background-image: linear-gradient(62deg, #c3def9 0%, #dbcee7 100%);
        margin: 0;
        padding: 0;
      }

      .header {
        background-color: #fff;
        padding: 20px;
        text-align: center;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }

      .header h1 {
        margin: 0;
        color: #333;
        font-size: 36px;
      }

      /* Packages Section Styles */
      .packages {
        /* background-color: #fff; */
        padding: 30px;
        text-align: center;
        position: relative;
      }

      .packages h2 {
        color: #e55d87;
        font-size: 28px;
      }

      .package-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
        gap: 30px;
        margin-top: 30px;
      }

      .package {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
      }

      .package h3 {
        color: #e55d87;
        font-size: 24px;
        margin-bottom: 10px;
      }

      .package p {
        color: #333;
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
      }

      .package-details {
        color: #777;
        font-size: 16px;
        margin-bottom: 10px;
      }

      .package-price {
        color: #e55d87;
        font-size: 20px;
        font-weight: bold;
      }

      .contact-info {
        margin-top: 30px;
      }

      .contact-info p {
        color: #333;
        font-size: 16px;
        line-height: 1.6;
        cursor: pointer;
      }

      .contact-email {
        color: #e55d87;
        font-size: 18px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
  <?php
  include 'header.php';
  ?>
    <div class="header">
      <h1>Safar Go - Packages</h1>
    </div>

    <!-- Packages Section -->
    <div class="packages">
      <h2>Our Exciting Packages</h2>
      <div class="package-grid">
        <div class="package">
          <h3>Honeymoon Package</h3>
          <p>
            Experience a romantic getaway with our specially curated honeymoon
            package.
          </p>
          <div class="package-details">Duration: 7 Days / 6 Nights</div>
          <div class="package-price">₹1,99,999 per couple</div>
        </div>
        <div class="package">
          <h3>Family Package</h3>
          <p>
            Make unforgettable memories with your family through our
            family-friendly package.
          </p>
          <div class="package-details">Duration: 5 Days / 4 Nights</div>
          <div class="package-price">₹12,999 per person</div>
        </div>
        <div class="package">
          <h3>Weekend Getaway</h3>
          <p>
            Escape your daily routine with our exciting weekend getaway package.
          </p>
          <div class="package-details">Duration: 2 Days / 1 Night</div>
          <div class="package-price">₹4,999 per person</div>
        </div>
        <div class="package">
          <h3>Tracking Adventure</h3>
          <p>
            Embark on thrilling tracking adventures with our experienced guides.
          </p>
          <div class="package-details">Duration: 8 Days / 7 Nights</div>
          <div class="package-price">₹49,999 per person</div>
        </div>
        <div class="package">
          <h3>Beach Paradise</h3>
          <p>
            Relax and unwind on beautiful beaches with our beach paradise
            package.
          </p>
          <div class="package-details">Duration: 6 Days / 5 Nights</div>
          <div class="package-price">₹14,999 per person</div>
        </div>
        <div class="package">
          <h3>Adventure Escapade</h3>
          <p>
            Get your adrenaline pumping with our exciting adventure escapade
            package.
          </p>
          <div class="package-details">Duration: 7 Days / 6 Nights</div>
          <div class="package-price">₹21,999 per person</div>
        </div>
      </div>
      <!-- Contact Information -->
      <div class="contact-info">
        <p>For more details and inquiries, please contact us at:</p>
        <p class="contact-email">info@safargo.com</p>
      </div>
    </div>
  </body>
</html>
