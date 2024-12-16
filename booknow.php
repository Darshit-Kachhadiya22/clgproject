<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <style>
        a {
            font-size:1rem;
            text-decoration : none;
        }
        ul li{
            list-style:none;
        }

        body{
            margin: 0;
            padding: 0;
            font-size: 1.3rem;
            
            background: linear-gradient(135deg, #348AC7, #7474BF, #E55D87);
        }
        .header {
        background-color: #fff;
        padding: 20px;
        text-align: center;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }

      .header h1 {
        margin: 10;
        color: #333;
        font-size: 36px;
      }

        .form-container{
           display: flex;
           flex-direction: column;
           align-items: center;
           padding: 30px;
           justify-content: center;
        
           background-repeat: no-repeat;
           background-position: center;
           background-size: 1350px;
        }        
        .form{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 100px;            
           
            background-color: white;
            border-radius:15px;
        }
       

        input[type="submit"] {
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

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #E55D87, #7474BF, #348AC7);
        }

    </style>
</head>

    <body id="booknow">
    <?php
  include 'header.php';
  ?>
    <div class="header">
      <h1>Safar Go - Book Now</h1>
    </div>

   <div class="form-container">

    

    

    <form method="POST"  class="form">

    <!-- No. of Travelers : <input type="number" name="nt">
    <br><br> -->
    <div>
            <label for="noOfTravelers">No. Of Travelers:</label>
        <input type="number" name="nt" id="noOfTravelers" min="1" max="20" required>
        <br/>
        <br/>
        </div>

    <!-- Travel Date: <input type="date" name="dt">
    <br><br> -->
    <div>
            <label for="traveldate">Travel Date:</label>
        <input type="date" name="dt" id="traveldate" required>
        <br/>
        <br/>
        </div>

    
<div>
            <label for="hotelstar">Preferred Hotel Star Category:</label>
        <select name="hs" id="hotelstar" >

            <option value="--select--" selected hidden disabled>--select--</option>
            <option value="5satr">5 Star</option>
            <option value="4star">4 Star</option>
            <option value="3star">3 Star</option>
            <option value="2star">2 Star</option>
            <option value="1star">1 Star</option>

        </select>
        <br><br>
        </div>

<!-- City: <input type="text" name="ct" >
        <br><br> -->

        <div>
            <label for="city">From City:</label>
        <input type="text" name="ct" id="city" placeholder="Enter city" required>
        <br><br>
        </div>

        <!-- Name: <input type="text" name="nm" >
        <br><br> -->

        <div>
            <label for="name">Name:</label>
        <input type="text" name="nm" id="name" placeholder="Enter Name" required>
        <br><br>
        </div>

        <!-- Phone No: <input type="tel" name="pn" >
        <br> <br> -->

        <div>
            <label for="number">Phone No:</label>
        <input type="number" name="pn" id="number" placeholder="Enter Phone No" required>
        <br><br>
        </div>


         <!-- Email : <input type="text" name="em" >
        <br><br> -->

        <div>
            <label for="email">Email ID:</label>
        <input type="email" name="em" id="email" placeholder="Enter Email" required>
        <br><br>
        </div>


        <!-- Destination: <input type="text" name="dst" >
        <br><br> -->

        <div>
            <label for="destination">Destination:</label>
        <input type="text" name="dst" id="destination" placeholder="Enter Destination" required>
        <br><br>
        </div>

       <!-- Password: <input type="password" name="pass">
        <br><br>   -->

        <div>
            <label for="password">Password:</label>
        <input type="password" name="pass" id="password" placeholder="Enter Password" required>
        <br><br>
        </div>

    <input type="submit"  value="submit" name="sb">

</form>
</div>
<?php

$con = mysqli_connect('localhost','root','','safar');
if(isset($_POST['sb']))
{
    $nooftravelers=$_POST['nt'];
    $traveldate=$_POST['dt'];
    $starcategory=$_POST['hs'];
    $city=$_POST['ct'];
    $name=$_POST['nm'];
    $phoneno=$_POST['pn'];
    $email=$_POST['em'];
    $destination=$_POST['dst'];
    $password=$_POST['pass'];


    $query= "INSERT INTO booknow(nooftravelers,traveldate,starcategory,city,name,phoneno,email,destination,password) VALUES
    ('$nooftravelers','$traveldate','$starcategory','$city','$name','$phoneno','$email','$destination','$password')";
    $run=mysqli_query($con,$query);
    
    
    if($con){
        ?>
        <script> 
         alert('your booking was sucessfull');
         </script>
         <?php
       }else{
        die('no connection'. mysqli_connect_error());
       }
      }
       ?>
      
  


</body>
</html>