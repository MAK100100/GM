<?php
include_once 'class/config.php';
include_once 'class/table.php';
unset($_SESSION['auto_refresh']);
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['access']);
unset($_SESSION['fees']);
unset($_SESSION['data']);
unset($_SESSION['transaction']);
session_destroy();

header(sprintf("Location: %s/login.php", $url));
exit();
?>