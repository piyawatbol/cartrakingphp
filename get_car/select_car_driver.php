<?php
    require '../connect.php';

    $user_id = $_POST['user_id'];
    $car_id = $_POST['car_id'];

    $sql = "UPDATE tb_user SET car_id = '$car_id' WHERE user_id = '$user_id' ";
    $result = mysqli_query($condb,$sql);

    if($result){
        echo json_encode('yes');
    }else{
        echo json_encode('no');
    }

?>