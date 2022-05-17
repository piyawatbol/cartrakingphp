<?php

        require '../connect.php';

        $car_id = $_POST['car_id'];
        $user_id = $_POST['user_id'];
        
        $sql = "SELECT * FROM tb_car WHERE car_id = '".$car_id."' ";
        $query = mysqli_query($condb,$sql);

        while($row = mysqli_fetch_assoc($query)){
          if($row['seat_1'] == $user_id || $row['seat_2'] == $user_id || $row['seat_3'] == $user_id  || $row['seat_4'] == $user_id  || $row['seat_5'] == $user_id  || $row['seat_6'] == $user_id  || $row['seat_7'] == $user_id  || $row['seat_8'] == $user_id  || $row['seat_9'] == $user_id){  
            echo json_encode('you_sit_seat');
          }else{
            if($row['seat_1'] == 'empty'){
              $sql1 = "UPDATE tb_car SET seat_1 = '$user_id' WHERE car_id = '$car_id'";
              $seat1 = mysqli_query($condb,$sql1);
              echo json_encode('yes1');    
            }else if($row['seat_2'] == 'empty'){
              $sql2 = "UPDATE tb_car SET seat_2 = '$user_id' WHERE car_id = '$car_id'";
              $seat2 = mysqli_query($condb,$sql2);
              echo json_encode('yes2');
            }else if($row['seat_3'] == 'empty'){
              $sql3 = "UPDATE tb_car SET seat_3 = '$user_id' WHERE car_id = '$car_id'";
              $seat3 = mysqli_query($condb,$sql3);
              echo json_encode('yes3');
            }else if($row['seat_4'] == 'empty'){
              $sql4 = "UPDATE tb_car SET seat_4 = '$user_id' WHERE car_id = '$car_id'";
              $seat4 = mysqli_query($condb,$sql4);
              echo json_encode('yes4');
            }else if($row['seat_5'] == 'empty'){
              $sql5 = "UPDATE tb_car SET seat_5 = '$user_id' WHERE car_id = '$car_id'";
              $seat5 = mysqli_query($condb,$sql5);
              echo json_encode('yes5');
            }else if($row['seat_6'] == 'empty'){
              $sql6 = "UPDATE tb_car SET seat_6 = '$user_id' WHERE car_id = '$car_id'";
              $seat6 = mysqli_query($condb,$sql6);
              echo json_encode('yes6');
            }else if($row['seat_7'] == 'empty'){
              $sql7 = "UPDATE tb_car SET seat_7 = '$user_id' WHERE car_id = '$car_id'";
              $seat7 = mysqli_query($condb,$sql7);
              echo json_encode('yes7');
            }else if($row['seat_8'] == 'empty'){
              $sql8 = "UPDATE tb_car SET seat_8 = '$user_id' WHERE car_id = '$car_id'";
              $seat8 = mysqli_query($condb,$sql8);
              echo json_encode('yes8');
            }else if($row['seat_9'] == 'empty'){
              $sql9 = "UPDATE tb_car SET seat_9 = '$user_id' WHERE car_id = '$car_id'";
              $seat9 = mysqli_query($condb,$sql9);
              echo json_encode('yes9');
            }else{
              echo json_encode('full');
            }

          }
           
          
          
          
          
          
          
    
          








        }  
?>