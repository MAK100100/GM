<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 4/25/2019
 * Time: 2:15 PM
 */

include_once 'class/config.php';
include_once 'class/table.php';
for ($i=1;$i<=15;$i++)
    echo ($_SESSION['transaction'][$i]['id']) ;
//var_dump($_SESSION);
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
//echo print_r($_GET,true);



?>