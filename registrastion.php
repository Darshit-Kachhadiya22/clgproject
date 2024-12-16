<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(135deg, #348ac7, #7474bf, #e55d87);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      .registration-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        width: 350px;
        text-align: center;
      }

      .registration-container h2 {
        margin-top: 0;
        color: #333;
      }

      .registration-container p {
        color: #777;
      }

      .registration-container input[type="text"],
      .registration-container input[type="email"],
      .registration-container input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.3s;
      }

      .registration-container input[type="text"]:focus,
      .registration-container input[type="email"]:focus,
      .registration-container input[type="password"]:focus {
        border-color: #e55d87;
        outline: none;
      }

      .registration-container input[type="submit"] {
        background: linear-gradient(135deg, #348ac7, #7474bf, #e55d87);
        color: #fff;
        padding: 12px 40px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        transition: all 0.3s;
      }

      .registration-container input[type="submit"]:hover {
        background: linear-gradient(135deg, #e55d87, #7474bf, #348ac7);
      }

      .registration-container .login-link {
        margin-top: 10px;
        font-size: 14px;
      }

      .registration-container .login-link a {
        color: #333;
        text-decoration: underline;
      }

      .social-icons {
        margin-top: 20px;
      }

      .social-icons a {
        display: inline-block;
        margin: 0 10px;
        font-size: 24px;
        color: #333;
      }
    </style>
  </head>
  <body>
 
    <div class="registration-container">
      <h2>Register for Safar Go</h2>
      <p>Create a new account to get started.</p>
      <form method="POST">
        <input type="text" placeholder="Full Name" name="fn" required />
         <input type="email" placeholder="Email" name="em" required />
       <input type="password" placeholder="Password" name="pass" required />
        <input type="password" placeholder="Confirm Password" name="cp" required />
        <input type="submit" value="Register" name="sb" />
      </form>
      <p class="login-link">
        Already have an account?
        <a href="./index.php">Login</a>
      </p>

      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
      </div>
    </div>

    <script
      src="https://kit.fontawesome.com/76a79fb4e9.js"
      crossorigin="anonymous"
    ></script>

    <?php
$con = mysqli_connect('localhost','root','','signup');
if(isset($_POST['sb']))
{
  $fullname=$_POST['fn'];
  $email=$_POST['em'];
  $password=$_POST['pass'];
  $confirmpassword=$_POST['cp'];


  $query= "INSERT INTO register(fullname,email,password,confirmpassword) VALUES
  ('$fullname','$email','$password','$confirmpassword')";
  $run=mysqli_query($con,$query);


  if($con){
    ?>
    <script> 
     alert('registration sucessfully');
     </script>
     <?php
   }else{
    die('no connection'. mysqli_connect_error());
   }
  }
?>


  </body>
</html>
