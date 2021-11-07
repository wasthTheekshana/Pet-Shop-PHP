<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="css..css"/>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
        <link rel="stylesheet" href="assets/fonts/material-icons.css">
        <link rel="stylesheet" href="assets/css/Features-Boxed.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <link rel="stylesheet" href="assets/css/nav-sticky-top.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
         <div></div>
        <nav class="navbar navbar-default navbar-fixed-top navigation-clean-button">
            <div class="container">
                <div class="navbar-header">
                    <a href="dashbord.php" class="navbar-brand navbar-link"> Dashboard</a>
                    <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav nav-right">

                        <li class="dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle">Pet </a>
                            <ul role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="AN_Employee.php">Add My Pet</a></li>
                                <li role="presentation"><a href="UE_Employee.php">Update My Pet </a></li>

                            </ul>
                        </li>
                        
                        <li class="dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle">Payments </a>
                            <ul role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="make_payment.php">Make A Payment</a></li>
                                <li role="presentation"><a href="Review_payment.php">Review Payment</a></li>

                            </ul>
                        </li>
<!--                        <li class="dropdown"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle">Others </a>
                            <ul role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="Notifiacations.php">Notifications</a></li>
                                

                            </ul>
                        </li>-->

                    </ul>
                    <form action="PHP/Signout.php" method="POST">
                        <input class="signout" type="submit" name="logout" value="Sign out" style="width: 100px ; height: 38px; float: right ; margin-top:  10px; color: black; background-color: rgba(255,255,255,0.30); border-top-color: #999999 ; border-left-color:#999999 ; border-right-color: #999999;border-bottom-color: #999999 ">

                    </form>
                </div>
            </div>
        </nav>
        <div class="grp1">
            <span class="spn3">WELCOM</span>&nbsp;&nbsp;&nbsp;
        <?php
        echo"<span class='spn3'>".$_SESSION["First_name"]."</span>";
        ?>
        
        
        <form action="selling.php" method="POST">
            <input class="btn1 btn4" type="submit" value="add"/><br/>
        </form>

            <div class="sbox">
         <select class="in1 spn2"s id="sear" name="see">
                <option>Dog</option>
                <option>Cat</option>
                <option>Bird</option>
            </select>
                <button class="btn1" onclick="search();" id="btn">Search</button>
            </div>  <br/><br/>  
        <div id="box">
            
        </div>
        </div>
       
        <script type="text/javascript" src="search.js"></script>
    </body>
</html>
