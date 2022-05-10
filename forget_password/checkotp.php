<?php

include '../connect.php';
$email = $_POST['email'];
$otp = $_POST['otp'];

$queryResult = $condb->query("SELECT * FROM tb_user where email='".$email."' AND otp='".$otp."' AND otp != 0");

	$result = array ();

    if(mysqli_num_rows($queryResult)> 0){
        while ($fetchData = $queryResult->fetch_assoc()) {
            $result[] = $fetchData;
        }
        $clearotp = $condb->query("UPDATE tb_user set otp = 0 where email = '".$email."'");
        echo json_encode($result);
    }else{
        echo json_encode("error");
    }
?>