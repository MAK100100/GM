<?php
/**
 * Created by PhpStorm.
 * User: Ghaith
 * Date: 2019-02-19
 * Time: 9:50 ص
 */
include_once 'class/config.php';
include_once 'class/table.php';
$_SESSION['auto_refresh']=1;
$bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg' ); // array of filenames

$i = rand(0, count($bg)-1); // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!DOCTYPE HTML>
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
<body class="login-bg" dir="rtl" style=" background:transparent url('bg/<?php echo $selectedBg; ?>') no-repeat center center /cover ">
<div class="login-body">
    <div class="login-heading" style="text-align: center;">
        <img src="images/logo-1.png" width="150px">
    </div>
    <div class="login-info">
        <form method="post" action="login.php" >
            <input id="username" name="username" type="text" class="user" placeholder="الأسم" required="">
            <input id="password" name="password" type="password"  class="lock" placeholder="رمز المرور">
            <!--<div class="forgot-top-grids">
                <div class="forgot-grid">
                    <ul>
                        <li>
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1"><span></span>Remember me</label>
                        </li>
                    </ul>
                </div>
                <div class="forgot">
                    <a href="#">Forgot password?</a>
                </div>
                <div class="clearfix"> </div>
            </div>-->
            <input type="submit" id="login" name="login" value="تسجيل الدخول">
            <!--<div class="signup-text">
                <a href="signup.html">Don't have an account? Create one now</a>
            </div>
            <hr>
            <h2>or login with</h2>
            <div class="login-icons">
                <ul>
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>-->
        </form>
    </div>
    <div>
        <?php
        if (isset($_POST['login']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            Create_conn();
            $result=User_Search("",$username,$password,"","");
            Close_conn();
            if($result!="")
            {
                foreach ( $result as $buf)
                {
                    $_SESSION['id']=$buf['id'];
                    $_SESSION['username']=$buf['username'];
                    $_SESSION['password']=$buf['password'];
                    $_SESSION['access']=$buf['access'];
                    $_SESSION['fees']=$buf['fees'];
                    if (($_SESSION['access']==1 ) or ($_SESSION['access']==2))
                        header(sprintf("Location: %s/home.php", $url));
                    else
                        header(sprintf("Location: %s/home.php", $url));
                }

            }
            else
                echo "<div class=\"alert alert-danger cen\" role=\"alert\">  خطأ في الأدخال  </div>";
        }
        ?>
    </div>
</div>

<div class="copyright login-copyright">
    <p> © 2019 Cabin Delivery . All Rights Reserved . </a></p>
</div>
</body>
</html>
