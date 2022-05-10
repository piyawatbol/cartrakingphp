<?php
use PHPMailer\PHPMailer\PHPMailer;

include '../connect.php';
 $email = $_POST['email'];


$queryResult = $condb->query("SELECT * FROM tb_user where email='".$email."' ");
//echo $queryResult;
	$result = array ();
if(mysqli_num_rows($queryResult)> 0){
    while ($fetchData = $queryResult->fetch_assoc()) {
        $result[] = $fetchData;
    }
    $gen_otp = rand(100000,999999);
    $insertotp = $condb->query("UPDATE tb_user set otp = $gen_otp where email = '".$email."'");
    
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
    
        $mail = new PHPMailer();
    
        //smtp settings
        $mail->isSMTP();
        //$mail->SMTPDebug = 1;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "forgetpass0001@gmail.com";
        $mail->Password = '12345678zxcv';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        
    
        //email settings
        $mail->isHTML(true);
        $mail->setFrom($email, $result[0]['name']);
        $mail->addAddress("$email");
        $mail->Subject = ("$email OTP");
        $mail->Body = "OTP : $gen_otp";
    
        if($mail->send()){
            $status = "success";
            $response = "Email is sent!";
            echo json_encode("1");
        }
        else
        {
            $status = "failed";
            $response = "Something is wrong: <br>" . $mail->ErrorInfo;
            echo json_encode($response);
        }
        
}else{
    echo json_encode("0");
}


?>