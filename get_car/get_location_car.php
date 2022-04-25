<?php

include '../connect.php';

$car_id = $_GET['car_id'];
$queryResult = $condb->query("SELECT * FROM tb_car WHERE car_id = '$car_id' ");

	$result = array ();

while ($fetchData = $queryResult->fetch_assoc()) {
    $result[] = $fetchData;
}

echo json_encode($result);
?>