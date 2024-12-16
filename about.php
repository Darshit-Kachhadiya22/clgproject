<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Safar Go</title>
    <link rel="stylesheet" href="style.css">
    <style>
        a{
            text-decoration: none;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #348AC7, #7474BF, #E55D87);
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

        .about-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            text-align: center;
        }

        .about-container h2 {
            color: #E55D87;
            font-size: 28px;
        }

        .about-container p {
            color: #333;
            font-size: 18px;
            line-height: 1.6;
            margin: 20px 0;
        }

        .about-container ul {
            list-style-type: disc;
            text-align: left;
        }

        .about-container ul li {
            color: #777;
            font-size: 16px;
            margin: 10px 0;
        }

        .about-container p:last-child {
            margin-bottom: 0;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #348AC7, #7474BF, #E55D87);
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            transition: all 0.3s, transform 0.2s;
        }

        .btn:hover {
            background: linear-gradient(135deg, #E55D87, #7474BF, #348AC7);
            transform: scale(1.05);
        }

        
        .image-gallery {
            background-color: #fff;
            padding: 30px 0;
            text-align: center;
        }

        .image-gallery h2 {
            color: #E55D87;
            font-size: 28px;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .image-grid img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<?php
  include 'header.php';
  ?>
    <div class="header">
        <h1>Safar Go</h1>
        <p>Your Adventure Begins Here</p>
    </div>
    <div class="about-container">
        <h2>About Us</h2>
        <p>Welcome to Safar Go, your ultimate gateway to extraordinary journeys and unforgettable adventures.</p>
        <p>At Safar Go, we are more than just a travel company. We are a passionate team of explorers dedicated to making your travel dreams a reality.</p>
        <p>Why Choose Safar Go?</p>
        <ul>
            <li>We Explore Differently: Our unique approach to travel unlocks hidden gems and takes you off the beaten path.</li>
            <li>Personalized Adventures: We craft tailor-made experiences to match your interests and desires.</li>
            <li>Expert Guides: Our knowledgeable guides ensure every moment of your journey is enriching and safe.</li>
            <li>Unforgettable Memories: Safar Go is your partner in creating cherished memories that last a lifetime.</li>
        </ul>
        <p>Your adventure starts here. Join us and embark on a Safar Go experience like no other.</p>
        <button class="btn"><a href="./contact.php">Contact us</a></button>
    </div>

    <!-- Image Gallery Section -->
    <div class="image-gallery">
        <h2>Our Adventures in Pictures</h2>
        <div class="image-grid">
            <img src="./assets/about_1.avif" alt="Adventure Image 1">
            <img src="./assets/about_2.avif" alt="Adventure Image 2">
            <img src="./assets/about_3.avif" alt="Adventure Image 3">

            <img src="./assets/about_4.avif" alt="Adventure Image 4">
            <img src="./assets/about_5.avif" alt="Adventure Image 5">
            <img src="./assets/about_6.avif" alt="Adventure Image 6">
           
        </div>
    </div>
</body>
</html>
