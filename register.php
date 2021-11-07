
<?php
$first = $_POST["fname"];
$last = $_POST["lname"];
$emailA = $_POST["Umail"];
$passW = $_POST["Upassword"];
$tele = $_POST["number"];
$town = $_POST["city"];

$con = new mysqli("localhost","root","123","animalshop",3307);
$con->query("INSERT INTO users(First_name,Last_name,Email,Password,Contac_number,City) VALUES('".$first."','".$last."','".$emailA."','".$passW."','".$tele."','".$town."');");
header("Location:signIn.php");
?>