<?php
    require '../connect.php';
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];

    $sql = "SELECT * FORM tb_user WHERE username = '".$user_name."'AND pass_word  = '".$pass_word."'  ";
    $result = mysqli_query($condb,$sql);
    if($result){
        echo json_encode('login');
    }else{
        echo json_encode('miss');
    }
?>