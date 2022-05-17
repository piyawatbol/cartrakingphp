<?php

    require '../connect.php';

    $sql = "SELECT * FROM tb_map";
    $query = mysqli_query($condb,$sql);
    $result = array ();
    while($row = mysqli_fetch_assoc($query)){
        $result[] = $row;
    }
    echo json_encode($result);


?>