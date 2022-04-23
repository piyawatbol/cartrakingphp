<?php
    require '../connect.php';
    $lati = $_POST['lati'];
    $longti = $_POST['longti'];
    $user_id = $_POST['user_id'];
    $car_id = $_POST['car_id'];

    $sql = "UPDATE tb_user SET lati='$lati', longti='$longti' WHERE user_id = '$user_id' " ;
    $result = mysqli_query($condb,$sql);

    if($result){
        $sql = "UPDATE tb_car SET lo_driver_lati ='$lati',lo_driver_longti ='$longti' WHERE car_id = '$car_id'";
        $result = mysqli_query($condb,$sql);
    }else{
        echo 'no';
    }



?>