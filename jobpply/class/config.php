<?php
header("Cache-Control: private, max-age=10800, pre-check=10800");
header("Pragma: private");
header("Expires: " . date(DATE_RFC822,strtotime("+2 day")));
header('Content-Type: text/html; charset=utf-8');


session_start();
$_SESSION['limit']=9;
$url = 'http://localhost/myfile/jobpply';


date_default_timezone_set("Asia/Baghdad");

?>