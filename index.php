  <?php
include("connect.php");
if (isset($_POST['btn_register'])) {
     header("location:register.php");
}
if(isset($_REQUEST['btn_login']))
{
    $username=$_POST['txtname'];
    $password=$_POST['txtpass'];

 $res=mysqli_query($con,"select* from login where username='$username' && password='$password'");
    $insert=mysqli_fetch_array($res);
    if ($insert) {
        session_start();
        $_SESSION["username"]=$insert["username"];
        $_SESSION["password"]=$insert["password"];
    


      header("location:dashboard.php");
     echo "<script> alert('login successfully'); </script>";
 }
      else
      {
         echo "<script> alert(' username and password not valid..!'); </script>";
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login form</title>
     <link rel="stylesheet" type="text/css" href="css/index.css">
    
</head>
<body>


    <form method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username"  name="txtname">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password"  name="txtpass">
        <button name="btn_login">Login</button >
        <br>
        <button name="btn_register">Register</button >
       
    </form>
</body>
</html>
<?php
?>