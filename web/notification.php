<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 3/9/2019
 * Time: 8:54 PM
 */
include_once 'class/config.php';
include_once 'class/table.php';
?>
<html>
<head>
    <title>Cabin Delivery Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Baxster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <!-- font-awesome icons -->
    <link href="css/all.min.css" type="text/css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
</head>
<body dir="rtl" class="login-bg" style="background: rgb(23,111,111);
background: linear-gradient(0deg, rgba(23,111,111,0.5) 16%, rgba(45,145,145,0.6978992280505952) 35%, rgba(23,111,111,0.3) 100%); ">

        <div class="form-body centered">

        <form action="login.php" method="post" class="form-horizontal validation-grids widget-shadow">
            <div class="form-group text-center">
            <img src="images/stop.gif" width="250px"/>
            </div>
            <div class="form-group text-center">
                <div>
                    <h2 style="color: #f5f5ff; margin-bottom: 3%;">
                        عذراً ... انت لم تقم بتسجيل الدخول !!
                    </h2>
                </div>
                <input type="submit" class="btn btn-success" name="Go_to_login" id="Go_to_login"
                       value="تسجيل الدخول" style="width: 10%; font-size: 12pt;" />
            </div>
        </form>
    </div>
</body>
</html>
