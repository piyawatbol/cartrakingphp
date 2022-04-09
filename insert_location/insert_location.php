<?php
    require '../connect.php';
    $lati = $_POST['lati'];
    $longti = $_POST['longti'];
    $user_id = $_POST['user_id'];

    $sql = "UPDATE tb_user SET lati='$lati', longti='$longti' WHERE user_id = $user_id " ;
    $result = mysqli_query($condb,$sql);

    if($result){
        echo 'yes';
    }else{
        echo 'no';
    }



?>