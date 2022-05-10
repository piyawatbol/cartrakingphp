<?php

include '../connect.php';
$user_id = $_POST['user_id'];
$pass = $_POST['Pass'];

$reset = $condb->query("UPDATE tb_user set pass_word = '".$pass."' where user_id = '".$user_id."'");

echo json_encode("1");
?>