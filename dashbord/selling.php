<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="css..css"/>
    </head>
    <body>
        <div class="Sbox">
            <div class="signin2">
                <div class="grp">
        <form action="add.php" method="POST">
            <span class="spn2">User Name</span><br/>
            <input class="in1" type="text" name="Name"/><br/><br/>
            
            <span class="spn2">Pet name</span><br/>
            <input class="in1" type="text" name="PetName"/><br/><br/>
            
            <span class="spn2">Age</span><br/>
            <input class="in1" type="text" name="old"/><br/><br/>
            
            <span class="spn2">Birth</span><br/>
            <input class="in1" type="text" name="dob"/><br/><br/>
            
            <span class="spn2">Height</span><br/>
            <input class="in1" type="text" name="heigth"/><br/><br/>
            
            <span class="spn2">Weight</span><br/>
            <input class="in1" type="text" name="weight"/><br/><br/>
            
             <span class="spn2">Catargary</span><br/>
            <select class="in1 spn2" name="catargary">
                <option>Dog</option>
                <option>Cat</option>
                <option>Bird</option>
            </select><br/><br/>
            
            <span class="spn2">Gender</span><br/>
            <input type="radio" name="s" value="male"/>
            <span class="spn2">Male</span>
            
            <input type="radio" name="s" value="female"/>
            <span class="spn2">Female</span><br/><br/>
            
            <span class="spn2">Prize</span><br/>
            <input class="in1" type="text" name="prize"/><br/><br/>
            <!--<input type="file" name="pic"/><br/><br/>-->
            
            <input class="btn1" type="submit" value="add"/>
        </form>
            </div>
            </div>
        </div>
    </body>
</html>
