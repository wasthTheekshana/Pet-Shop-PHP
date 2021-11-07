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
        $name =$_SESSION["First_name"];
        $x =$_GET["to"];
        
        $con = new mysqli("localhost","root","123","animalshop",3307);
        
        $table = $con->query("SELECT * FROM pet WHERE catr ='".$x."'");
      
        $count = mysqli_num_rows($table);
        
        for ($index = 0; $index < $count; $index++) {
            $row = mysqli_fetch_assoc($table);
            if($name==$row["First_name"]){
            echo "<div class = 'd1'>";
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
            
            echo "<span>catargary :</span>";
            echo "<span>".$row["catr"]."</span>";
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
            
        }
        
        
        ?>
        
    </body>
</html>
