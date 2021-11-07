<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$nic = $_POST["nic"];
$amount = $_POST["payment"];
$date = $_POST["date"];

$con = new mysqli("localhost","root","123","animalshop",3307);
$con->query("INSERT INTO payment(fname,lname,nic,amount,date) VALUES('" . $firstname . "','" . $lastname . "','" . $nic . "','" . $amount . "','" . $date . "')");
header("Location:dashbord.php");

?>