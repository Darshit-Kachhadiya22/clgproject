<?php
include 'connect.php'
?>
<html>

<head>

<style>

    .container{
        margin: 10px;
        
    }
    </style>

</head>

<body>

<div class="container">
<button class="btn" ><a href="index.php"
class="text.light" >Add user </a>
</button>
</div>

<table class="table">
    <tr>
        <th>name</th>
        <th>email</th>
</tr>

<?php
$sql="select * from 'login'";
$result=mysqli_query($con,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    echo $row['fullname'];
}


?>


</body>
</html>