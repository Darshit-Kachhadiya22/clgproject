<?php
include 'connect.php';


// $con=mysqli_connect('localhost','root','','demo');
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $number=$_POST['number'];

    $sql= "INSERT INTO user(name,number)VALUES('$name','$number')";
    // $run=mysqli_query($con,$query);
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted sucessfully";
    }else{
        die(mysqli_error($con));
    }
}

?>
<html>
    <body>

    <form method="POST">


    <div>
            <label for="name">name:</label>
        <input type="text" name="name"  placeholder="Enter name" required>
        <br><br>
        </div>
    <div>
            <label for="number">number:</label>
        <input type="number" name="number"  placeholder="Enter Email" required>
        <br><br>
        </div>

        <button class="btn" name="btn">submit</button>
</form>
<?php


?>
</body>
</html>
