<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 5/14/2019
 * Time: 4:14 PM
 */
include_once 'class/config.php';
include_once 'class/table.php';
header("Content-Type:application/json");
response();



function response()
{
    $response['order_id'] = "test";
    $response['data'] = 5;
    //$response['data'] = $_SESSION['data'];//[0]['id'];


    $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
    echo $json_response;

}
?>