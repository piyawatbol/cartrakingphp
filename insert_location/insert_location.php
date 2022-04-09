<?php
    require '../connect.php';
    $lati = $_POST['lati'];
    $longti = $_POST['longti'];

    $sql = "UPDATE tb_user SET lati='$lati', longti='$longti'" ;
    $result = mysqli_query($condb,$sql);

    if($result){
        echo 'yes';
    }else{
        echo 'no';
    }



?>