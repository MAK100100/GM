<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 8/2/2019
 * Time: 8:52 PM
 */
include_once 'class/config.php';
$host = "localhost";
$username = "root";
$password= "";
$dbName = "job";
$conn="";
//==================================== Create connection =====================================
function Open_Connection()
{
    global $host,$username,$password,$dbName,$conn;
    $conn = new mysqli( $host, $username, $password, $dbName);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    //echo 'Connected successfully';

}
//==================================== Close Connection =====================
function Close_Connection()
{
    global $conn;
    $conn->close();
    //echo 'disconnected successfully';
}
//=================================================Insert to CV table======================================
function Insert_CV( $full_name,$birthday,$mobile,$email,$address,$certificate_1,$specialty_1,$date_1,$certificate_2,$specialty_2,$date_2,$course_1,$date_3,$course_2,$date_4,$details)
{
    global $conn;
    $sql = "INSERT INTO 
                       cv (full_name,birthday,mobile,email,address,certificate_1,specialty_1,date_1,certificate_2,specialty_2,date_2,course_1,date_3,course_2,date_4,details) 
                 VALUES 
                       ('".$full_name. "','" .$birthday. "','" .$mobile. "','".$email. "','". $address. "','"  .$certificate_1. "','" .$specialty_1. "','" .$date_1. "','".$certificate_2. "','" .$specialty_2. "','".$date_2. "','" .$course_1. "','" .$date_3."','" .$course_2. "','".$date_4. "','" .$details ."')";
   // echo $full_name;
   // echo $sql;
 if ( $conn->query($sql)=== TRUE)
    {
        echo "تم اضافة السيرة الذاتية بنجاح";
              // GetLastIndex();
    }
    else
    {
      echo "فشلت العملية". '   '. $conn->error ;
    }
}
//================================= Select query : display CV======
function Read_CV()
{
    global $conn;
    //Check user access to display request
    //if($_SESSION['access']==0)
        //limited access
       // $sql = "SELECT * FROM request WHERE place='".$_SESSION['username']."' ORDER BY id DESC;";
    //else//fill access
        $sql = "SELECT * FROM cv ORDER BY id DESC;";
    $result = $conn->query($sql);
    $_SESSION['cv_count']=$result->num_rows;
    if ($result->num_rows > 0)
    {
        return ($result);
    }
}
//==========================full Session======================
function Full_Session($result)//transfer data to session variable
{
    foreach ($result as $buf)
    {
        $buf2[]=$buf;
    }
    $_SESSION['cv']=$buf2;
}
//==========================PRINT CVs+++++++++++++++++++++++++
function Print_CV($result)
{
    echo "
    <section class=\"ftco-section bg-light\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-9 pr-lg-5\">
						<div class=\"row justify-content-center pb-3\">
		          <div class=\"col-md-12 heading-section ftco-animate\">
		          	<span class=\"subheading\">عرض اخر السير الذاتية</span>
		            <h2 class=\"mb-4\">السيرة الذاتية</h2>
		          </div>
		        </div>
				<div class=\"row\">
		        ";

    foreach ($result as $array)
    {
    echo"
        <div class=\"col-md-12 ftco-animate\">
		            <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
		              <div class=\"one-third mb-4 mb-md-0\">
		                <div class=\"job-post-item-header d-flex align-items-center\">
		                  <h2 class=\"mr-3 text-black\"><a href=\"#\">".$array['full_name']."</a></h2>
		                  <div class=\"badge-wrap\">
		                   <span class=\"bg-info text-white badge py-2 px-3\">".$array['certificate_1']." ".$array['specialty_2']."</span>
		                  </div>
		                </div>
		                <div class=\"job-post-item-body d-block d-md-flex\">
		                  <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">".$array['course_1']."</a></div>
		                  <div><span class=\"icon-my_location\"></span> <span>".$array['address']."</span></div>
		                </div>
		              </div>

		              <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
		              	<div>
			                <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
			                	<span class=\"icon-heart\"></span>
			                </a>
		                </div>
		                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">السيرة الذاتية</a>
		              </div>
		            </div>
		          </div><!-- end -->
		 ";
	}

	echo"	
	 </div>
			</div>";
	Adv();
	echo"
				</div>
			</div>
		</section>";
}
//==================================================
function Adv()
{
    echo "
    <div class=\"col-lg-3 sidebar\">
		        <div class=\"row justify-content-center pb-3\">
		          <div class=\"col-md-12 heading-section ftco-animate\">
		          	<span class=\"subheading\">Recruitment agencies</span>
		            <h2 class=\"mb-4\">Top Recruitments</h2>
		          </div>
		        </div>
		        <div class=\"sidebar-box ftco-animate\">
		        	<div class=\"border\">
			        	<a href=\"#\" class=\"company-wrap\"><img src=\"images/company-1.jpg\" class=\"img-fluid\" alt=\"Colorlib Free Template\"></a>
			        	<div class=\"text p-3\">
			        		<h3><a href=\"#\">Google Company</a></h3>
			        		<p><span class=\"number\">500</span> <span>Open position</span></p>
			        	</div>
		        	</div>
		        </div>
		        <div class=\"sidebar-box ftco-animate\">
		        	<div class=\"border\">
			        	<a href=\"#\" class=\"company-wrap\"><img src=\"images/company-2.jpg\" class=\"img-fluid\" alt=\"Colorlib Free Template\"></a>
			        	<div class=\"text p-3\">
			        		<h3><a href=\"#\">Facebook Company</a></h3>
			        		<p><span class=\"number\">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		        <div class=\"sidebar-box ftco-animate\">
		        	<div class=\"border\">
			        	<a href=\"#\" class=\"company-wrap\"><img src=\"images/company-3.jpg\" class=\"img-fluid\" alt=\"Colorlib Free Template\"></a>
			        	<div class=\"text p-3\">
			        		<h3><a href=\"#\">IT Programming INC</a></h3>
			        		<p><span class=\"number\">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		      </div>
    ";
}
//==========================PRINT CVs+++++++++++++++++++++++++
function Print_cv_page($page)
{
    echo "
    <section class=\"ftco-section bg-light\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-9 pr-lg-5\">
						<div class=\"row justify-content-center pb-3\">
		          <div class=\"col-md-12 heading-section ftco-animate\">
		          	<span class=\"subheading\">عرض اخر السير الذاتية</span>
		            <h2 class=\"mb-4\">السيرة الذاتية</h2>
		          </div>
		        </div>
				<div class=\"row\">
		        ";

    for ($i=($_SESSION['limit']*$page)-8;$i<=$_SESSION['limit']*$page;$i++)
    {
        if ($i>($_SESSION['cv_count']-1)) break;
        echo"
        <div class=\"col-md-12 ftco-animate\">
		            <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
		              <div class=\"one-third mb-4 mb-md-0\">
		                <div class=\"job-post-item-header d-flex align-items-center\">
		                  <h2 class=\"mr-3 text-black\"><a href=\"#\">".$_SESSION['cv'][$i]['full_name']."</a></h2>
		                  <div class=\"badge-wrap\">
		                   <span class=\"bg-info text-white badge py-2 px-3\">".$_SESSION['cv'][$i]['certificate_1']." ".$_SESSION['cv'][$i]['specialty_2']."</span>
		                  </div>
		                </div>
		                <div class=\"job-post-item-body d-block d-md-flex\">
		                  <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">".$_SESSION['cv'][$i]['course_1']."</a></div>
		                  <div><span class=\"icon-my_location\"></span> <span>".$_SESSION['cv'][$i]['address']."</span></div>
		                </div>
		              </div>

		              <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
		              	<div>
			                <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
			                	<span class=\"icon-heart\"></span>
			                </a>
		                </div>
		                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">السيرة الذاتية</a>
		              </div>
		            </div>
		          </div><!-- end -->
		 ";
    }

    echo"	
	 </div>
			</div>";
    Adv();
    echo"
				</div>
			</div>
		</section>";
}
//========================== Pagination Bar========================
function Pagination_Bar($page)
{

    $Page_No=intdiv($_SESSION['cv_count'],$_SESSION['limit']);
    $temp=$_SESSION['cv_count']%$_SESSION['limit'];
    if ($temp>0) $Page_No+=1;

    echo"<div align='center'>
	          <div class=\"col text-center text-md-center\">
	            <div class=\"block-27\">
	              <ul>
	                <li><a href='display_cv.php'>البداية</a></li>";
    for ($i=1;$i<$page;$i++)
        echo"           <li><a href='display_cv.php?page=".$i."'>".$i."</a></li>";
    echo"               <li class=\"active\"><span>".$page."</span></li>";
    for ($j=$page +1;$j<=$Page_No;$j++)
        echo"            <li><a href='display_cv.php?page=".$j."'>".$j."</a></li>";
    echo"
                    <li><a href='display_cv.php?page=".$Page_No."'>النهاية</a></li>
                </ul>
	           </div>
	          </div>
	        </div>";
}


?>