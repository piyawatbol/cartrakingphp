<?php
    require '../connect.php';
    $lati = $_POST['lati'];
    $longti = $_POST['longti'];
    $car_id = $_POST['car_id'];


    $sql = "UPDATE tb_car SET lo_driver_lati ='$lati',lo_driver_longti ='$longti' WHERE car_id = '$car_id'";
    $result = mysqli_query($condb,$sql);

?>