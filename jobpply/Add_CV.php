<?php

/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 7/31/2019
 * Time: 11:08 AM
 */
include_once "readyform/form.php";
include_once "class/sql_queries.php"

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
                <form method="POST" action="add_cv.php" class="p-5 bg-white">
                    <div class="row form-group">
                        <div class="col-md-4 "><h4>الاسم الثلاثي و اللقب</h4></div>
                        <div class="col-md-6 mb-1 mb-md-0">
                            <input type="text" name="full_name" class="form-control"  placeholder="ابراهيم محمد صالح العذاري" required>
                        </div>
                        <div class="col-md-4"><h4>تاريخ الولادة</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="number" name="birthday" class="form-control" required placeholder="1990" required max="2001" min="1950" >
                        </div>
                        <div class="col-md-4"><h4>رقم الهاتف</h4></div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <input type="text" name="mobile2" class="form-control" required placeholder="رقم الهاتف" maxlength="8" minlength="8" pattern="[0-9]+" required>
                        </div>
                        <div class="col-md-2 mb-3 mb-md-0">
                            <select  name="mobile1" class="form-control" placeholder="شركة الاتصال" required>
                                <option value="9">079</option>
                                <option value="8" selected>078</option>
                                <option value="7">077</option>
                                <option value="6">076</option>
                                <option value="5">075</option>
                                <option value="4">074</option>
                                <option value="3">073</option>
                                <option value="2">072</option>
                            </select>
                        </div>
                        <div class="col-md-4"><h4>البريد الالكترني</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="email" name="email" class="form-control" required placeholder="unkown@email.com"  size="30" >
                        </div>
                        <div class="col-md-4"><h3>عنوان السكن</h3></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" name="address" required class="form-control" placeholder="العراق - النجف الاشرف" required>
                        </div>
                        <div class="col-md-12"><h3>التحصيل الدراسي</h3></div>
                        <div class="col-md-1"><h4>1.</h4></div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <select  name="certificate_1" class="form-control" placeholder="التحصيل الدراسي" required >
                                <option value="1" selected>ثانوي</option>
                                <option value="2">معهد</option>
                                <option value="3">بكلوريوس</option>
                                <option value="4">ماجستير</option>
                                <option value="5">دكتورا</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" name="specialty_1" class="form-control" placeholder="الاختصاص" required>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" name="date_1" class="form-control" placeholder="سنة التخرج"  required max="2019" min="1900" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-1"><h4>2.</h4></div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <select  name="certificate_2" class="form-control" placeholder="التحصيل الدراسي" required>
                                <option value="1" selected>ثانوي</option>
                                <option value="2">معهد</option>
                                <option value="3">بكلوريوس</option>
                                <option value="4">ماجستير</option>
                                <option value="5">دكتورا</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" name="specialty_2" class="form-control" placeholder="الاختصاص" >
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" name="date_2" class="form-control" placeholder="سنة التخرج"  max="2019" min="1900" >
                        </div>
                        <div class="col-md-12"><h3>كورسات اضافية</h3></div>
                        <div class="col-md-1"><h4>1.</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" name="course_1" class="form-control" placeholder="الاختصاص">
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" name="date_3" class="form-control" placeholder="سنة التخرج"  max="2019" min="1900" >
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-1"><h4>2.</h4></div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <input type="text" name="course_2" class="form-control" placeholder="الاختصاص">
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <input type="text" name="date_4" class="form-control" placeholder="سنة التخرج">
                        </div>
                        <div class="col-md-12 " ><h3>تفاصيل اضافية</h3></div>
                        <div class="col-md-10 mb-3 mb-md-0">
                            <textarea name="details" class="form-control" name="" cols="30" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" name="save" value="Post" class="btn btn-primary  py-2 px-5">
                        </div>
                        <?php
                        if (isset($_POST['save']))
                        {
                            $date_2=0;
                            $certificate_2="";
                            $specialty_2="";
                            $course_1="";
                            $date_3=0;
                            $course_2="";
                            $date_4=0;
                            $mobile=To_Mobile($_POST['mobile1'],$_POST['mobile2']);
                            $certificate_1=To_Certificate($_POST['certificate_1']);
                            $certificate_2=To_Certificate($_POST['certificate_2']);
                            //if the second certificate info. missing ignore all data
                            if(($_POST['certificate_2']=="")||($_POST['specialty_2']=="")||($_POST['date_2']==""))
                            {
                                $date_2=0;
                                $certificate_2="";
                                $specialty_2="";
                            }
                            else
                            {
                                //$certificate_2=$_POST['certificate_2'];
                                $specialty_2=$_POST['specialty_2'];
                                $date_2=$_POST['date_2'];
                            }
                            //if the first course info. missing ignore all data
                            if(($_POST['course_1']=="")||($_POST['date_3']==""))
                            {
                              $course_1="";
                              $date_3=0;
                            }
                            else
                            {
                                $course_1=$_POST['course_1'];
                                $date_3=$_POST['date_3'];
                            }
                            //if the second course info. missing ignore all data
                            if(($_POST['course_2']=="")||($_POST['date_4']==""))
                            {
                                $course_2="";
                                $date_4=0;
                            }
                            else
                            {
                                $course_2=$_POST['course_2'];
                                $date_4=$_POST['date_4'];
                            }


                            Open_Connection();
                            Insert_CV($_POST['full_name'],$_POST['birthday'],$mobile,$_POST['email'],$_POST['address'],$certificate_1,$_POST['specialty_1'],$_POST['date_1'],$certificate_2,$specialty_2,$date_2,$course_1,$date_3,$course_2,$date_4,$_POST['details']);
                            Close_Connection();
                            //ob_end_flush();
                           // echo $_POST['full_name'];
                        }


                        ?>
                    </div>


                </form>
            </div>

            <?php Adv();
            ?>
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
