<?php

include '../connect.php';





$queryResult = $condb->query("SELECT * FROM tb_car ");

	$result = array ();

while ($fetchData = $queryResult->fetch_assoc()) {
    $result[] = $fetchData;
}

echo json_encode($result);
?>