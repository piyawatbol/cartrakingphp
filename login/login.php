<?php
    require '../connect.php';
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];
    $sql = "SELECT * FROM tb_user WHERE user_name = '".$user_name."' AND pass_word = '".$pass_word."' ";
    $result = mysqli_query($condb,$sql);
    $count = mysqli_num_rows($result);
    $resultt = array();
    if($count == 1){
        while($row=mysqli_fetch_assoc($result)){
            $resultt[]=$row;
        }
        echo json_encode($resultt);
    }else{
        echo json_encode("miss");
    }
    
?>