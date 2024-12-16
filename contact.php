<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <style>
  
        a {
            font-size:1rem;
            text-decoration : none;
        }
        ul li{
            list-style:none;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #348AC7, #7474BF, #E55D87);
           
        }

        .main-container{
            display: flex;           
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contact-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        .contact-container h2 {
            margin-top: 0;
            color: #333;
        }

        .contact-container p {
            color: #777;
            margin-bottom: 20px;
        }

        .contact-container input[type="text"],
        .contact-container input[type="email"],
        .contact-container textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .contact-container input[type="text"]:focus,
        .contact-container input[type="email"]:focus,
        .contact-container textarea:focus {
            border-color: #E55D87;
            outline: none;
        }

        .contact-container input[type="submit"] {
            background: linear-gradient(135deg, #348AC7, #7474BF, #E55D87);
            color: #fff;
            padding: 12px 40px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .contact-container input[type="submit"]:hover {
            background: linear-gradient(135deg, #E55D87, #7474BF, #348AC7);
        }
    </style>
</head>
<body>
<?php
  include 'header.php';
  ?>

   <div class="main-container">
   <div class="contact-container">
        <h2>Contact Us</h2>
        <p>Have questions or suggestions? Feel free to get in touch with us.</p>
        <form method="POST">
            <input type="text" placeholder="Name" name="nm" required>
            <input type="email" placeholder="Email" name="em" required>
            <textarea placeholder="Message" rows="4" name="ms" required></textarea>
            <input type="submit" value="Submit" name="sb">
        </form>
    </div>
   </div>

   <?php

$con = mysqli_connect('localhost','root','','safar');
if(isset($_POST['sb']))
{
    $name=$_POST['nm'];
    $email=$_POST['em'];
    $message=$_POST['ms'];
    

    $query= "INSERT INTO contctus(name,email,message) VALUES
    ('$name','$email','$message')";
    $run=mysqli_query($con,$query);
    
    
    if($con){
        ?>
        <script> 
         alert('Thanks for contacting us');
         
         </script>
         <?php
       }else{
        die('no connection'. mysqli_connect_error());
       }
      }
     
       ?>
</body>
</html>
