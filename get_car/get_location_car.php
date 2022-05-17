<?php

include '../connect.php';

$car_id = $_GET['car_id'];
$sql = "SELECT * FROM tb_car WHERE car_id = '$car_id'";
$query = mysqli_query($condb,$sql);
$result = array ();
while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}
echo json_encode($result);
?>