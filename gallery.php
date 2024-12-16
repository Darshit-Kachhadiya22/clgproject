<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery - Safar Go</title>
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

      /* Image Gallery Section Styles */
      .image-gallery {
        padding: 30px;
        text-align: center;
        position: relative;
      }

      .image-gallery h2 {
        color: #e55d87;
        font-size: 28px;
      }

      .image-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
        gap: 30px;
        margin-top: 30px;
      }

      .image {
        position: relative;
      }

      .image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        transition: transform 0.5s;
        cursor: pointer;
      }

      .image img:hover {
        transform: scale(1.05);
      }

      .image-caption {
        position: absolute;
        bottom: 10px;
        left: 30%;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        color: #333;
        font-weight: bold;
        background-color: rgba(255, 255, 255, 0.8);
      }
    </style>
  </head>
  <body>

  <?php
  include 'header.php';
  ?>

    <div class="header">
      <h1>Safar Go - Gallery</h1>
    </div>

    <!-- Image Gallery Section -->
    <div class="image-gallery">
      <h2>Explore Our Adventures</h2>
      <div class="image-grid">
        <div class="image">
          <img src="./assets/gallery_1.avif" alt="Adventure Image" />
          <div class="image-caption">Rio de Janeiro, Brazil</div>
        </div>
        <div class="image">
          <img src="./assets/gallery_2.avif" alt="Adventure Image" />
          <div class="image-caption">Erbezzo, Erbezzo, Italia</div>
        </div>
        <div class="image">
          <img src="./assets/gallery_3.avif" alt="Adventure Image" />
          <div class="image-caption">City of Venice, Italy</div>
        </div>

        <div class="image">
          <img src="./assets/gallery_4.avif" alt="Adventure Image" />
          <div class="image-caption">Vatican City, Europe</div>
        </div>
        <div class="image">
          <img src="./assets/gallery_5.avif" alt="Adventure Image" />
          <div class="image-caption">New York, United States</div>
        </div>
        <div class="image">
          <img src="./assets/gallery_6.avif" alt="Adventure Image" />
          <div class="image-caption">Eiffel Tower, Paris, France</div>
        </div>

        <div class="image">
          <img src="./assets/gallery_7.avif" alt="Adventure Image 1" />
          <div class="image-caption">River in Camden, New Jersey</div>
        </div>
        <div class="image">
          <img src="./assets/gallery_8.avif" alt="Adventure Image 2" />
          <div class="image-caption">3013 AJ Rotterdam, Netherlands</div>
        </div>
        <div class="image">
          <img src="./assets/gallery_9.avif" alt="Adventure Image 3" />
          <div class="image-caption">Dubai, United Arab Emirates</div>
        </div>
      </div>
    </div>
  </body>
</html>
