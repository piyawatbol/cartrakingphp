<?php
    require '../connect.php';

    $car_id = $_POST['car_id']; 
    $lo_driver_lati = $_POST['lo_driver_lati'];
    $lo_driver_longti = $_POST['lo_driver_longti'];
    echo json_encode($lo_driver_lati);
    echo json_encode($lo_driver_longti)
    // $sql = "UPDATE tb_car SET lo_driver_lati='$lo_driver_lati', lo_driver_longti='$lo_driver_longti' WHERE car_id = '$car_id' " ;
    // $result = mysqli_query($condb,$sql);

    // if($result){
    //     echo 'yes';
    // }else{
    //     echo 'no';
    // }
?>