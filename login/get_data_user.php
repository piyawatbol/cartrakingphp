<?php

    require '../connect.php';
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM tb_user WHERE user_id = '$user_id'";
    $query = mysqli_query($condb,$sql);
    $result = array ();
    while($row = mysqli_fetch_assoc($query)){
        $result[] = $row;
    }
    echo json_encode($result);

?>