<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <title>Make Payment</title>
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
         
         <br>
        <br>


        <div>
            <div class="container" id="info-container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center text-info">Payment Form</h2></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 site-form">
                        <form action="new_payment.php" method="POST">

                            <div class="form-group has-feedback">
                                <label class="control-label sr-only" for="firstname">First Name</label>
                                <input class="form-control" type="text" name="firstname" placeholder="First Name" autofocus="" id="firstname"><i class="form-control-feedback fa fa-user" aria-hidden="true"></i></div>

                            <div class="form-group has-feedback">
                                <label class="control-label sr-only" for="lastname">Last Name</label>
                                <input class="form-control" type="text" name="lastname" placeholder="Last Name" id="lastname"><i class="form-control-feedback fa fa-user" aria-hidden="true"></i></div>

                            <div class="form-group has-feedback">

                                <input class="form-control" type="text" name="nic"  placeholder="nic" id="nic"> </div>

                            <div class="form-group has-feedback">
                                <label class="control-label sr-only" for="text">Amount</label>
                                <input class="form-control" type="number" name="payment"  placeholder="Amount" id="mobile"> </div>

                            <div class="form-group has-feedback">
                                <input class="form-control" type="date"  name="date"/>
                            </div>

                            <a href =dashbord.php><button class="btn btn-default btn-lg" type="button" id="form-btn" style="background-color: #ff9933 ; width:200px ;font-size: 16px; margin-top: 30px">Back to Dashboard </button></a>
                            <button class="btn btn-default btn-lg" type="submit" id="form-btn" style="background-color: #9999ff ; width: 100px ;font-size: 16px; margin-left: 25px; margin-top: 30px">Submit </button>

                        </form>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </body>
</html>
