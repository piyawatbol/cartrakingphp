<?php

require '../connect.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$pass_word = $_POST['pass_word'];


$sql = "INSERT INTO tb_user (name,phone,email,user_name,pass_word)";

$sql .= " VALUES ('$name','$phone','$email','$user_name','$pass_word')";

$result = mysqli_query($condb,$sql);

if ($result) {
    echo json_encode('succes');
} else {
    echo "เกิดข้อผิดพลาด" . mysqli_error($condb);
}