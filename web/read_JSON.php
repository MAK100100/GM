<?php

$url = "http://localhost/web/api.php";

$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);

$result = json_decode($response);

echo "<table>";
echo "<tr><td>Order ID:</td><td>$result->order_id</td></tr>";
echo "<tr><td>data:</td><td>$result->data</td></tr>";
/*
echo "<tr><td>Response Code:</td><td>$result->response_code</td></tr>";
echo "<tr><td>Response Desc:</td><td>$result->response_desc</td></tr>";
*/
echo "</table>";
?>
<html>
<head>
<body>
<form method="post" action="read_JSON.php">

    Order number  <input type="text" value="<?php echo $result->order_id;?>"><br>
    Value  <input type="text" value="<?php echo $result->data;?>">
</form>
</body>
</head>
</html>
