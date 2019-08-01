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


                <form action="#" class="p-5 bg-white">

                 <!--   <div class="row form-group">
                        <div class="col-md-12"><h3>وقت العمل</h3></div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-1">
                                <input type="radio" id="option-job-type-1" name="job-type"> 8 ساعات
                            </label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-2">
                                <input type="radio" id="option-job-type-2" name="job-type"> 6 ساعات
                            </label>
                        </div>

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-3">
                                <input type="radio" id="option-job-type-3" name="job-type"> 4 ساعة
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-4">
                                <input type="radio" id="option-job-type-4" name="job-type"> وقت حر
                            </label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-4">
                                <input type="radio" id="option-job-type-5" name="job-type"> اجر يومي
                            </label>
                        </div>

                    </div>   -->

                    <div class="row form-group">
                        <div class="col-md-4 "><h4>الاسم الثلاثي و اللقب</h4></div>
                        <div class="col-md-6 mb-1 mb-md-0">
                            <input type="text" id="fullname1" class="form-control" placeholder="ابراهيم محمد صالح العذاري">
                        </div>

                        <div class="col-md-4"><h4>تاريخ الولادة</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" id="fullname5" class="form-control" placeholder="20-5-1990">
                        </div>

                        <div class="col-md-4"><h3>عنوان السكن</h3></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" id="fullname2" class="form-control" placeholder="العراق - النجف الاشرف">
                        </div>

                        <div class="col-md-12"><h3>التحصيل الدراسي</h3></div>
                        <div class="col-md-1"><h4>1.</h4></div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <select name="" id="" class="form-control" placeholder="التحصيل الدراسي">
                                <option value="0" selected >اختر الشهادة</option>
                                <option value="1">ثانوي</option>
                                <option value="2">بكلوريوس</option>
                                <option value="3">ماجستير</option>
                                <option value="4">دكتورا</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="الاختصاص">
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="سنة التخرج">
                        </div>

                        <div class="col-md-12"></div>
                        <div class="col-md-1"><h4>2.</h4></div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <select name="" id="" class="form-control" placeholder="التحصيل الدراسي">
                                <option value="0" selected >اختر الشهادة</option>
                                <option value="1">ثانوي</option>
                                <option value="2">بكلوريوس</option>
                                <option value="3">ماجستير</option>
                                <option value="4">دكتورا</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="الاختصاص">
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="سنة التخرج">
                        </div>

                        <div class="col-md-12"><h3>كورسات اضافية</h3></div>
                        <div class="col-md-1"><h4>1.</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="الاختصاص">
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="سنة التخرج">
                        </div>

                        <div class="col-md-12"></div>
                        <div class="col-md-1"><h4>2.</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="الاختصاص">
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" class="form-control" placeholder="سنة التخرج">
                        </div>







                        <div class="col-md-12 " ><h3>تفاصيل اضافية</h3></div>
                        <div class="col-md-10 mb-3 mb-md-0">
                            <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
                        </div>
                    </div>


                </form>
            </div>

           <?php Company_info(); ?>
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