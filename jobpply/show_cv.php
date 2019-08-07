<?php

/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 7/31/2019
 * Time: 11:08 AM
 */
include_once "readyform/form.php";
include_once "class/sql_queries.php";
if(isset($_GET['id']) && isset($_GET['id']))
{
    Open_Connection();
    $result=CV_Search($_GET['id'],$_GET['full_name'],"","");
    foreach ($result as $array)
    {
        $full_name=$array['full_name'];
        $birthday=$array['birthday'];
        $mobile=$array['mobile'];
        $email=$array['email'];
        $address=$array['address'];
        $certificate_1=$array['certificate_1'];
        $specialty_1=$array['specialty_1'];
        $date_1=$array['date_1'];
        $certificate_2=$array['certificate_2'];
        $specialty_2=$array['specialty_2'];
        $date_2=$array['date_2'];
        $course_1=$array['course_1'];
        $date_3=$array['date_3'];
        $course_2=$array['course_2'];
        $date_4=$array['date_4'];
        $details=$array['details'];
    }
    Close_Connection();
}

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>New Job Offer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet"> -->

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php header_1(); // HEADER?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');"  data-stellar-background-ratio="0.5">
    <div class="overla"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                <h1 class="col-md-7 mb-1 bread">اضافة سيرة ذاتية</h1>
            </div>
        </div>
    </div>
</div>
<h1 align="center" style="font-size: 75px;"></h1>
<div class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <form method="POST" action="show_cv.php" class="p-5 bg-white">
                    <div class="row form-group">
                        <div class="col-md-4 "><h4>الاسم الثلاثي و اللقب</h4></div>
                        <div class="col-md-6 mb-1 mb-md-0">
                            <label  class="form-control" ><?php echo $full_name; ?></label >
                        </div>
                        <div class="col-md-4"><h4>تاريخ الولادة</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $birthday; ?></label >
                        </div>
                        <div class="col-md-4"><h4>رقم الهاتف</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $mobile;//"078XXXXXXXX"; ?></label >
                        </div>

                        <div class="col-md-4"><h4>البريد الالكترني</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $email;//"XXXXXX@domain.com"; ?></label >
                        </div>
                        <div class="col-md-4"><h3>عنوان السكن</h3></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $address; ?></label >
                        </div>
                        <div class="col-md-12"><h3>التحصيل الدراسي</h3></div>
                        <div class="col-md-1"><h4>1.</h4></div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $certificate_1; ?></label >
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $specialty_1; ?></label >
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                           <label  class="form-control" ><?php echo $date_1; ?></label >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-1"><h4>2.</h4></div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $certificate_2; ?></label >
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $specialty_2; ?></label >
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $date_2; ?></label >
                        </div>
                        <div class="col-md-12"><h3>كورسات اضافية</h3></div>
                        <div class="col-md-1"><h4>1.</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $course_1; ?> </label >
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $date_3; ?></label >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-1"><h4>2.</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label  class="form-control" ><?php  echo $course_2;  ?> </label >
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label  class="form-control" ><?php echo $date_4; ?></label >
                        </div>
                        <div class="col-md-12 " ><h3>تفاصيل اضافية</h3></div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label  style="white-space: pre-line; height: 100% ; width: 100%"><?php echo $details; ?></label >
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" name="contact" value="تواصل معي" class="btn btn-primary  py-2 px-5">
                        </div>

                    </div>


                </form>
            </div>

            <?php Adv(); ?>
        </div>

    </div>
</div>



<?php
    News_letter();           //NEWS LETTER
    footer_1();             //FOOTER
?>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
