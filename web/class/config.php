<?php
header("Cache-Control: private, max-age=10800, pre-check=10800");
header("Pragma: private");
header("Expires: " . date(DATE_RFC822,strtotime("+2 day")));
header('Content-Type: text/html; charset=utf-8');


session_start();
//$GLOBALS : $Item_count;
$host = "localhost";
$username = "root";
$password = "";
$dbName = "delivery";
$total_pages = $pageno =0;
$total_rows = 0;
$url = 'http://localhost/web';


date_default_timezone_set("Asia/Baghdad");

?>