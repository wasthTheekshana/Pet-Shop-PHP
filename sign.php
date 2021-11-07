<?php

$umail = $_POST["em"];
$upswrd = $_POST["ps"];

$con = new mysqli("localhost","root","123","animalshop",3307);
$resultSet=$con->query("SELECT * FROM users WHERE Email='".$umail."' AND Password='".$upswrd."';");

if(mysqli_num_rows($resultSet)>0){
    $row = mysqli_fetch_assoc($resultSet);
    $fname = $row["First_name"];
    $ctar = $row["catr"];
    
    session_start();
    $_SESSION["First_name"] = $fname;
    $_SESSION["catr"] = $ctar;
    header("Location:dashbord/dashbord.php");
}else{
     header("Location:signIn.php");
}

?>