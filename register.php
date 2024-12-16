<?php 
    include('connect.php');
if(isset($_POST['btn_register']))
    {
    
    $fullname = $_POST['txtfname'];
    $username = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $password = $_POST['txtpass'];
    $confirmpassword = $_POST['txtcp'];
   

    $insert= "insert into login(fullname,username,email,password,confirmpassword) values('$fullname','$username','$email','$password','$confirmpassword')";
    if(mysqli_query($con,$insert))
    {
        echo "<script> alert('record inserted'); </script>";
        header("location:index.php");
      
    }
    else
    {
        echo "<script> alert('enter valid data!'); </script>";
    }
}
if(isset($_POST['btn_login'])) 
{
   
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>register form</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">


</head>
<body>
     <form method="Post">
        <h3>register here</h3>

       

        <label for="name">FullName</label>
        <input type="text" placeholder="fullname"  required="name" name="txtfname">

        <label for="username">Username</label>
        <input type="text" placeholder="username" id="username" required="username" name="txtname">

        <label for="e-mail">E-mail</label>
        <input type="Email" placeholder="Email" id="e-mail" required="Email" name="txtemail">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" required="password" name="txtpass">

        <label for="confirmpassword">Confirmpassword</label>
        <input type="password" placeholder="Password" id="password" required="password" name="txtcp">

       
        <button name="btn_register">Register</button >
        
    </form>
</body>
</html>
<?php 
?>