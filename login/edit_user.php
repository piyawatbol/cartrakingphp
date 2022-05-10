<?php
    require '../connect.php';

    $user_id = $_POST['user_id'];
    $name = $_POST['user_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if($_FILES['img']['name']!=""&& $_FILES['img']['name']!=null){
        $img = $_FILES['img']['name'];
        $imagePath = '../images_user/'.$img;
        $tmp_name = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_name,$imagePath);
    
        $sql = "UPDATE tb_user SET name = '$name', phone = '$phone', email = '$email' , img = '$img' WHERE user_id = '$user_id'";
        $result = mysqli_query($condb,$sql);
    }
    
    $sql = "UPDATE tb_user SET name = '$name', phone = '$phone', email = '$email' WHERE user_id = '$user_id'";
    $result = mysqli_query($condb,$sql);
   

?>