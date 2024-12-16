<?php
    include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light" style="text-decoration:none">Add user</a>
        </button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">UserName</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>      
    </tr>
  </thead>

  <tbody>

    <?php

        $sql="Select * from login";
        $result=mysqli_query($con,$sql);

        if($result){
            
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $username=$row['username'];
                $password=$row['password'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$username.'</td>
            
                <td>'.$password.'</td>
                <td>
                <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light" style="text-decoration:none">Update</a></button>

                <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light" style="text-decoration:none">Delete</a></button>
              </td>
              </tr>';
            }
        }
    ?>

       

  </tbody>
</table>

    </div>
</body>
</html>