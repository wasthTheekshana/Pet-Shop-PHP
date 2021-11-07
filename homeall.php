<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        $catar =$_SESSION["catr"];
        $to = $_GET["y"];
        
        $con = new mysqli("localhost","root","123","animalshop",3307);
        
        $table1 =$con->query("SELECT * FROM pet WHERE catr ='".$to."'");
        
        $count = mysqli_num_rows($table1);
        
        for ($index = 0; $index < $count; $index++) {
            $row = mysqli_fetch_assoc($table1);
           
            echo "<div class='d1'>";
            echo "<span>User Name :</span>";
            echo "<span>".$row["First_name"]."</span>";
            echo "<br/>";
            
            echo "<span>Name :</span>";
            echo "<span>".$row["name"]."</span>";
            echo "<br/>";
            
            echo "<span>Age :</span>";
            echo "<span>".$row["age"]."</span>";
            echo "<br/>";
            
            echo "<span>DOB :</span>";
            echo "<span>".$row["dob"]."</span>";
            echo "<br/>";
            
            echo "<span>Height :</span>";
            echo "<span>".$row["height"]."</span>";
            echo "<br/>";
            
            echo "<span>Weight :</span>";
            echo "<span>".$row["weight"]."</span>";
            echo "<br/>";
            
            echo "<span>gender :</span>";
            echo "<span>".$row["gender"]."</span>";
            echo "<br/>";
            
            echo "<span>Prize :</span>";
            echo "<span>".$row["prize"]."</span>";
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            echo "</div>";
             
            
        }
        ?>
    </body>
</html>
