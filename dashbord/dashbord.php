<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
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
       
        <?php
        session_start();
//        if (!isset($_COOKIE['rem'])) {
//            header("Location:../Client_side_view/login.php");
//        }else if (!isset($_COOKIE['rem'])) {
//            header("Location:../Client_side_view/login.php");
//        }else {
//           
//            
//        }
        ?>
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
                                <li role="presentation"><a href="makePayment.php">Make A Payment</a></li>

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
        <div class="features-boxed">
            <div class="container">
                <div class="intro"></div>
            </div>
        </div>
        <div class="features-boxed">
            <div class="container">
                <div class="intro"></div>
                <div class="row features" data-aos="fade-up">
                    <div class="col-md-4 col-sm-6 item">

                        <a href = selling.php>
                            <div class="box"><i class="material-icons icon">people</i>
                                <h3 class="name">Add My Pet </h3></div>
                        </a>
                        
<!--                        
                        <a href = Notifiacations.php>
                            <div class="box"><i class="material-icons icon">people</i>
                                <h3 class="name">Notifications </h3></div>
                        </a>-->
                        


                    </div>
                    <div class="col-md-4 col-sm-6 item">
                        <a href = profile.php>
                            <div class="box"><i class="material-icons icon">people</i>
                                <h3 class="name">Update My Pet </h3></div>
                        </a>

                    </div>
                    <div class="col-md-4 col-sm-6 item">
                        <a href = "makePayment.php">
                            <div class="box"><i class="material-icons icon">attach_money</i>
                                <h3 class="name">Make A Payment</h3></div>
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-animation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    </body>
</html>
