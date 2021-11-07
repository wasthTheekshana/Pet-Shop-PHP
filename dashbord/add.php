
<?php

$name = $_POST["Name"];
$pname = $_POST["PetName"];
$page = $_POST["old"];
$Pbirth = $_POST["dob"];
$pheight = $_POST["heigth"];
$pweight = $_POST["weight"];
$catagry = $_POST["catargary"];
$gender = $_POST["s"];
$prize = $_POST["prize"];
//$file = $_FILES["pic"];
//$tempath = $file["tmp_name"];
        
//$newpath = "profile_picture/".time()."png";
//move_uploaded_file($tempath, $newpath);

$con = new mysqli("localhost","root","123","animalshop",3307);
$con->query("INSERT INTO pet(`First_name`,`name`,`age`,`dob`,`height`,`weight`,`catr`,`gender`,`Prize`) VALUES('".$name."','".$pname."','".$page."','".$Pbirth."','".$pheight."','".$pweight."','".$catagry."','".$gender."','".$prize."')");
header("Location:selling.php");

?>