<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 4/25/2019
 * Time: 2:15 PM
 */
include_once 'class/config.php';

for ($i=1;$i<=5;$i++)
    echo '<pre>' .($_SESSION['cv'][$i]['full_name']) . '</pre>';

echo $_SESSION['cv_count'];

//var_dump($_SESSION);
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
//echo print_r($_GET,true);



?>