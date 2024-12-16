<?php

    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="select * from login where id=$id";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
    $username=$row['username'];
    $password=$row['password'];



    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="update login set  username='$username',password='$password'
        where id=$id";

        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Updated successfully";
            header('location:display.php');

        } else {
            die(mysqli_error($con));
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">

    <title>Crud operation</title>
  </head>
  <body>
    <!-- <h1>Hello world</h1> -->
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>userName</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="username" autocomplete="off" value=<?php echo $usersname;?>>    
  </div>

  
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off" value=<?php echo $password;?>>    
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  </body>
</html>
