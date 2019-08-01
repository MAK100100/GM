<?php

/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 7/31/2019
 * Time: 11:08 AM
 */
include_once "readyform/form.php"
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <title>Contact us</title>
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
                <h1 class="col-md-7 mb-1 bread">تواصل معنا</h1>
             </div>
        </div>
    </div>
</div>


<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row block-9">
            <div class="col-md-8 order-md-first d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="الاسم">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="البريد الالكتروني">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="الموضوع">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="الرسالة"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ارسال" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-4 order-md-last d-flex">
                <div id="map" class="bg-white p-5 contact-info">
                    <!-- الجزء المقابل معلومات الاميل -->
                </div>
            </div>
        </div>
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">معلومات الاتصال</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>العنوان:</span> العراق - النجف الاشرف</p>
            </div>
            <div class="col-md-3">
                <p><span>موبايل:</span> <a href="tel://1234567920">964-7800-000-0000</a></p>
            </div>
            <div class="col-md-3">
                <p><span>البريد الالكتروني:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
            <div class="col-md-3">
                <p><span>الموقع الالكتروني:</span> <a href="#">yoursite.com</a></p>
            </div>
        </div>
    </div>
</section>


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
