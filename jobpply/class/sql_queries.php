<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 8/2/2019
 * Time: 8:52 PM
 */
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
    echo 'Connected successfully';

}
//==================================== Close Connection =====================
function Close_Connection()
{
    global $conn;
    $conn->close();
    echo 'disconnected successfully';
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

?>