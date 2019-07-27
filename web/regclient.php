<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 9/23/2018
 * Time: 3:25 PM
 */
ob_start();
include_once 'class/config.php';
include_once 'class/table.php';

if($_SESSION['username']=="")  header(sprintf("Location: %s/notification.php", $url));
header('Content-Type: text/html; charset=utf-8');
if(permission($_SESSION['access']))
{

}
else
    header(sprintf('Location: %s/access_denied.php', $url));


?>
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Cabin Delivery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!-- font CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- font-awesome icons -->
    <link href="css/all.min.css" type="text/css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- chart -->
    <script src="js/Chart.js"></script>
    <!-- //chart -->
    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push" dir="rtl">
<div class="main-content">
    <!--left-fixed -navigation-->
    <div class="sidebar" role="navigation">
        <div class="navbar-collapse">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar"
                 id="cbp-spmenu-s1">
                <div class="scrollbar scrollbar1">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="home.php"><i class="fa fa-home nav_icon"></i> الرئيسية </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users nav_icon"></i> المستخدمين <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="regclient.php" class="active p-right"> تسجيل جديد </a>
                                </li>
                                <li>
                                    <a href="users.php" class="p-right"> عرض المستخدمين </a>
                                </li>

                            </ul>
                            <!-- /nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-clipboard-list nav_icon"></i> الطلبات <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="request.php" class="p-right"> عرض الطلبات </a>
                                </li>
                                <li>
                                    <a href="new_req.php" class="p-right"> اضافة طلبية </a>
                                </li>

                            </ul>
                            <!-- /nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dollar-sign nav_icon"></i> الحسابات <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="transa_list.php" class="p-right"> عرض الحوالات المالية </a>
                                </li>
                                <li>
                                    <a href="balance.php" class="p-right"> عرض الأرصدة </a>
                                </li>

                            </ul>
                            <!-- /nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- //sidebar-collapse -->
            </nav>
        </div>
    </div>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class="sticky-header header-section ">
        <div class="header-right">
            <!--logo -->
            <div class="logo">
                <a href="home.php">
                    <ul>
                        <li><img src="images/wlogo.PNG" alt="" style="width: 75px"/></li>
                        <div class="clearfix"></div>
                    </ul>
                </a>
            </div>
            <!--//logo-->
        </div>
        <!--search-box
        <div class="search-box">
            <form class="input">
                <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
            </form>
        </div>
        //end-search-box-->
        <div class="header-right">
            <!--toggle button start-->
            <button id="showLeftPush"><i class="fa fa-bars"></i></button>
            <!--toggle button end-->
        </div>

        <!--notification menu end -->
        <div class="profile_details">
            <ul class="p-left">
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="images/a.png" alt=""> </span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu" style="text-align: right">
                        <li><a href="#" style="text-color: #176f6f"> <?php echo $_SESSION["username"]?> </a></li>
                        <div class="divider"></div>
                        <li> <a href="#"><i class="fa fa-cog"></i> الإعدادات </a> </li>
                        <li> <a href="#"><i class="fa fa-user"></i> الملف الشخصي </a> </li>
                        <li> <a href="login.php"><i class="fa fa-sign-out-alt"></i> تسجيل الخروج </a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
        <!-- register form -->
        <div class="panel panel-widget forms-panel">
            <div class="forms">
                <div class=" form-grids form-grids-right">
                    <div class="widget-shadow " data-example-id="basic-forms">
                        <div class="form-title">
                            <h4> تسجيل مستخدم جديد : </h4>
                        </div>
                        <div class="form-body">
                            <form method="post" action="regclient.php" class="form-horizontal validation-grids widget-shadow " data-toggle="validator"
                                  novalidate="true">
                                <div class="form-group valid-form">
                                    <label  class="col-sm-1 control-label">
                                        <strong> الأسم : </strong>
                                    </label>
                                    <div class="col-sm-3">
                                        <input id="username" name="username" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-1 control-label">
                                        <strong> رمز المرور : </strong>
                                    </label>
                                    <div class="col-sm-3">
                                        <input id="password" name="password" type="password" class="form-control" data-toggle="validator"
                                               data-minlength="6"  required>
                                        <span class="help-block">يمكنك إنشاء رمز المرور باستخدام 6 أحرف أو أكثر</span>
                                    </div>
                                    <label for="inputPassword2" class="col-sm-2 control-label" style="text-align: left">
                                        <strong> تأكيد رمز المرور : </strong>
                                    </label>
                                    <div class="col-sm-3">
                                        <input id="confirm_password" name="confirm_password" type="password" class="form-control" data-toggle="validator"
                                               data-minlength="6" data-match="#password"
                                               data-match-error="الرجاء التأكد من مطابقة رمز المرور" required>
                                        <span class="help-block with-errors"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 ">
                                        <input type="file" id="real-file" class="hidden"/>
                                        <div class="btn btn-default" id="custom-button" > تحميل العلامة التجارية</div>
                                        <span id="custom-text" style="padding-right: 15px"> لم يتم إختيار أي صورة </span>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">
                                        <strong> الصلاحية : </strong>
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="access" id="access" required="true" class="form-control">
                                            <option value="0" selected>عميل</option>
                                            <option value="1" >أدمن</option>
                                            <option value="2" >مشرف</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="cost" class="form-group">
                                    <label for="input_cost" class="col-sm-1 control-label">
                                        <strong> الكلفة : </strong>
                                    </label>
                                    <div class="col-sm-3">
                                        <input id="fees" name="fees" type="text" class="form-control" >
                                    </div>
                                </div>
                                <script>
                                    $("#access").change(function() {
                                        var control = $(this);

                                        if (control.val() == "0") {
                                            $("#cost").show();
                                            document.getElementById("fees").required = true;
1                                        }
                                        else{
                                            $("#cost").hide();
                                        }
                                    });
                                </script>
                                <br>
                                <div class="form-group">
                                    <div class="col-sm-2 ">
                                        <button type="submit" id="Register" name="Register" class="btn btn-default"> تسجيل</button>
                                    </div>
                                </div>
                                <div>
                                    <?php
                                    if (isset($_POST['Register']))
                                    {
                                        $username = $_POST['username'];
                                        $password = $_POST['password'];
                                        $confirm_password = $_POST['confirm_password'];
                                        $access = $_POST['access'];
                                        $fees = $_POST['fees'];
                                        if ($access>=1) $fees=0;
                                        Create_conn();
                                        if (($password == $confirm_password))
                                        {

                                            $result2 = User_Search("", $username, "", "", "");
                                            if ($result2 == "")     //**************check for username if it is already in DB
                                            {
                                                User_insert($username, $password, $access, $fees,0);
                                               // header(sprintf('Location: %s/users.php', $url));
                                            } else
                                                echo "<div class=\"alert alert-danger cen\" role=\"alert\">Username already registered.</div>";
                                        }
                                        else {
                                            echo "<div class=\"textfullwidth alert alert-danger\" role=\"alert\">Password not matching</div>";
                                        }
                                        Close_conn();
                                    }
                                    ob_end_flush();
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//register form -->
    </div>
    <!--footer-->
    <div class="dev-page">
        <!-- page footer -->
        <!-- dev-page-footer-closed dev-page-footer-fixed -->
        <div class="dev-page-footer dev-page-footer-fixed">
            <div class="container">
                <div class="copyright">
                    <p>© 2019 Cabin . All Rights Reserved </a></p>
                </div>
            </div>
        </div>
        <!-- /page footer -->
    </div>
    <!--//footer-->
</div>
<!-- Classie -->
<script src="js/classie.js"></script>
<script>
    var menuLeft = document.getElementById('cbp-spmenu-s1'),
        showLeftPush = document.getElementById('showLeftPush'),
        body = document.body;

    showLeftPush.onclick = function () {
        classie.toggle(this, 'active');
        classie.toggle(body, 'cbp-spmenu-push-toright');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
        disableOther('showLeftPush');
    };


    function disableOther(button) {
        if (button !== 'showLeftPush') {
            classie.toggle(showLeftPush, 'disabled');
        }
    }
</script>
<!-- Bootstrap Core JavaScript -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/dev-loaders.js"></script>
<script type="text/javascript" src="js/dev-layout-default.js"></script>
<script type="text/javascript" src="js/jquery.marquee.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- candlestick -->
<script type="text/javascript" src="js/jquery.jqcandlestick.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jqcandlestick.css"/>
<!-- //candlestick -->

<!--max-plugin-->
<script type="text/javascript" src="js/plugins.js"></script>
<!--//max-plugin-->

<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->

<!-- real-time-updates -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
<script type="text/javascript">

    $(function () {

        // We use an inline data source in the example, usually data would
        // be fetched from a server

        var data = [],
            totalPoints = 300;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk

            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res;
        }

        // Set up the control widget

        var updateInterval = 30;
        $("#updateInterval").val(updateInterval).change(function () {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1) {
                    updateInterval = 1;
                } else if (updateInterval > 2000) {
                    updateInterval = 2000;
                }
                $(this).val("" + updateInterval);
            }
        });

        var plot = $.plot("#placeholder", [getRandomData()], {
            series: {
                shadowSize: 0	// Drawing is faster without shadows
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            }
        });

        function update() {

            plot.setData([getRandomData()]);

            // Since the axes don't change, we don't need to call plot.setupGrid()

            plot.draw();
            setTimeout(update, updateInterval);
        }

        update();

        // Add the Flot version string to the footer

        $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    });

</script>
<!-- //real-time-updates -->
<!-- error-graph -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.errorbars.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.flot.navigate.js"></script>
<script type="text/javascript">
    $(function () {

        function drawArrow(ctx, x, y, radius) {
            ctx.beginPath();
            ctx.moveTo(x + radius, y + radius);
            ctx.lineTo(x, y);
            ctx.lineTo(x - radius, y + radius);
            ctx.stroke();
        }

        function drawSemiCircle(ctx, x, y, radius) {
            ctx.beginPath();
            ctx.arc(x, y, radius, 0, Math.PI, false);
            ctx.moveTo(x - radius, y);
            ctx.lineTo(x + radius, y);
            ctx.stroke();
        }

        var data1 = [
            [1, 1, .5, .1, .3],
            [2, 2, .3, .5, .2],
            [3, 3, .9, .5, .2],
            [1.5, -.05, .5, .1, .3],
            [3.15, 1., .5, .1, .3],
            [2.5, -1., .5, .1, .3]
        ];

        var data1_points = {
            show: true,
            radius: 5,
            fillColor: "blue",
            errorbars: "xy",
            xerr: {show: true, asymmetric: true, upperCap: "-", lowerCap: "-"},
            yerr: {show: true, color: "red", upperCap: "-"}
        };

        var data2 = [
            [.7, 3, .2, .4],
            [1.5, 2.2, .3, .4],
            [2.3, 1, .5, .2]
        ];

        var data2_points = {
            show: true,
            radius: 5,
            errorbars: "y",
            yerr: {show: true, asymmetric: true, upperCap: drawArrow, lowerCap: drawSemiCircle}
        };

        var data3 = [
            [1, 2, .4],
            [2, 0.5, .3],
            [2.7, 2, .5]
        ];

        var data3_points = {
            //do not show points
            radius: 0,
            errorbars: "y",
            yerr: {show: true, upperCap: "-", lowerCap: "-", radius: 5}
        };

        var data4 = [
            [1.3, 1],
            [1.75, 2.5],
            [2.5, 0.5]
        ];

        var data4_errors = [0.1, 0.4, 0.2];
        for (var i = 0; i < data4.length; i++) {
            data4_errors[i] = data4[i].concat(data4_errors[i])
        }

        var data = [
            {color: "blue", points: data1_points, data: data1, label: "data1"},
            {color: "red", points: data2_points, data: data2, label: "data2"},
            {color: "green", lines: {show: true}, points: data3_points, data: data3, label: "data3"},
            // bars with errors
            {color: "orange", bars: {show: true, align: "center", barWidth: 0.25}, data: data4, label: "data4"},
            {color: "orange", points: data3_points, data: data4_errors}
        ];

        $.plot($("#placeholder1"), data, {
            legend: {
                position: "sw",
                show: true
            },
            series: {
                lines: {
                    show: false
                }
            },
            xaxis: {
                min: 0.6,
                max: 3.1
            },
            yaxis: {
                min: 0,
                max: 3.5
            },
            zoom: {
                interactive: true
            },
            pan: {
                interactive: true
            }
        });

        // Add the Flot version string to the footer

        $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    });

</script>
<!-- //error-graph -->
<!-- Skills-graph -->
<script src="js/Chart.Core.js"></script>
<script src="js/Chart.Doughnut.js"></script>
<script>

    var doughnutData = [
        {
            value: 2,
            label: "One",
            color: "#99CC00"
        },
        {
            value: 3,
            label: "Two",
            color: "#FF3300"
        },
        {
            value: 3,
            label: "Three",
            color: "#944DDB"
        },
        {
            value: 4,
            label: "Four",
            color: "#3399FF"
        },
        {
            value: 5,
            label: "Five",
            color: "#FFC575"
        }

    ];

    window.onload = function () {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive: true});
    };

</script>
<!-- //Skills-graph -->
<!-- status -->
<script src="js/jquery.fn.gantt.js"></script>
<script>

    $(function () {

        "use strict";

        $(".gantt").gantt({
            source: [{
                name: "Sprint 0",
                desc: "Analysis",
                values: [{
                    from: "/Date(1320192000000)/",
                    to: "/Date(1322401600000)/",
                    label: "Requirement Gathering",
                    customClass: "ganttRed"
                }]
            }, {
                name: " ",
                desc: "Scoping",
                values: [{
                    from: "/Date(1322611200000)/",
                    to: "/Date(1323302400000)/",
                    label: "Scoping",
                    customClass: "ganttRed"
                }]
            }, {
                name: "Sprint 1",
                desc: "Development",
                values: [{
                    from: "/Date(1323802400000)/",
                    to: "/Date(1325685200000)/",
                    label: "Development",
                    customClass: "ganttGreen"
                }]
            }, {
                name: " ",
                desc: "Showcasing",
                values: [{
                    from: "/Date(1325685200000)/",
                    to: "/Date(1325695200000)/",
                    label: "Showcasing",
                    customClass: "ganttBlue"
                }]
            }, {
                name: "Sprint 2",
                desc: "Development",
                values: [{
                    from: "/Date(1326785200000)/",
                    to: "/Date(1325785200000)/",
                    label: "Development",
                    customClass: "ganttGreen"
                }]
            }, {
                name: " ",
                desc: "Showcasing",
                values: [{
                    from: "/Date(1328785200000)/",
                    to: "/Date(1328905200000)/",
                    label: "Showcasing",
                    customClass: "ganttBlue"
                }]
            }, {
                name: "Release Stage",
                desc: "Training",
                values: [{
                    from: "/Date(1330011200000)/",
                    to: "/Date(1336611200000)/",
                    label: "Training",
                    customClass: "ganttOrange"
                }]
            }, {
                name: " ",
                desc: "Deployment",
                values: [{
                    from: "/Date(1336611200000)/",
                    to: "/Date(1338711200000)/",
                    label: "Deployment",
                    customClass: "ganttOrange"
                }]
            }, {
                name: " ",
                desc: "Warranty Period",
                values: [{
                    from: "/Date(1336611200000)/",
                    to: "/Date(1349711200000)/",
                    label: "Warranty Period",
                    customClass: "ganttOrange"
                }]
            }],
            navigate: "scroll",
            scale: "weeks",
            maxScale: "months",
            minScale: "days",
            itemsPerPage: 10,
            onItemClick: function (data) {
                alert("Item clicked - show some details");
            },
            onAddClick: function (dt, rowId) {
                alert("Empty space clicked - add an item!");
            },
            onRender: function () {
                if (window.console && typeof console.log === "function") {
                    console.log("chart rendered");
                }
            }
        });

        $(".gantt").popover({
            selector: ".bar",
            title: "I'm a popover",
            content: "And I'm the content of said popover.",
            trigger: "hover"
        });

        prettyPrint();

    });

</script>
<!-- //status -->
<!-- input-forms -->
<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {

        // show Valida's version.
        $('#version').valida('version');

        // Exemple 1
        $('.valida').valida();

        // Exemple 2
        /*
        $('.valida').valida({

            // basic settings
            validate: 'novalidate',
            autocomplete: 'off',
            tag: 'p',

            // default messages
            messages: {
                submit: 'Wait ...',
                required: 'Este campo é obrigatório',
                invalid: 'Field with invalid data',
                textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
            },

            // filters & callbacks
            use_filter: true,

            // a callback function that will be called right before valida runs.
            // it must return a boolan value (true for good results and false for errors)
            before_validate: null,

            // a callback function that will be called right after valida runs.
            // it must return a boolan value (true for good results and false for errors)
            after_validate: null

        });
        */

        // setup the partial validation
        $('#partial-1').on('click', function (ev) {
            ev.preventDefault();
            $('#res-1').click(); // clear form error msgs
            $('form').valida('partial', '#field-1'); // validate only field-1
            $('form').valida('partial', '#field-1-3'); // validate only field-1-3
        });

    });

</script>
<!-- //input-forms -->
<!--validator js-->
<script src="js/validator.min.js"></script>
<!--//validator js-->

<!-- hide upload file -->
<script>
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function () {
        realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function () {
        if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.match(
                /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[1];
        } else {
            customTxt.innerHTML = "No file chosen, yet.";
        }
    });

</script>
<!-- //hide upload file -->

</body>
</html>
