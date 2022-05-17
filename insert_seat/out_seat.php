 <?php

        require '../connect.php';
        $user_id = $_POST['user_id'];
        $car_id = $_POST['car_id'];
        $empty = 'empty';
          
        $sql1 = "SELECT * FROM tb_car WHERE seat_1 = '".$user_id."' ";
        $query1 = mysqli_query($condb,$sql1);

        while($row = mysqli_fetch_assoc($query1)){
            if($row['seat_1'] == $user_id){
                $sql = "UPDATE tb_car SET seat_1 = '$empty' WHERE  car_id = '$car_id' ";
                $query = mysqli_query($condb,$sql);
                
            }
        }
        $sql2 = "SELECT * FROM tb_car WHERE seat_2 = '".$user_id."' ";
        $query2 = mysqli_query($condb,$sql2);

        while($row = mysqli_fetch_assoc($query2)){
            if($row['seat_2'] == $user_id){
                $sql2 = "UPDATE tb_car SET seat_2 = '$empty' WHERE car_id = '$car_id' ";
                $query2 = mysqli_query($condb,$sql2);
                
            }
        }
        $sql3 = "SELECT * FROM tb_car WHERE seat_3 = '".$user_id."' ";
        $query3 = mysqli_query($condb,$sql3);

        while($row = mysqli_fetch_assoc($query3)){
            if($row['seat_3'] == $user_id){
                $sql3 = "UPDATE tb_car SET seat_3 = '$empty' WHERE  car_id = '$car_id' ";
                $query3 = mysqli_query($condb,$sql3);
                
            }
        }
        $sql4 = "SELECT * FROM tb_car WHERE seat_4 = '".$user_id."' ";
        $query4 = mysqli_query($condb,$sql4);

        while($row = mysqli_fetch_assoc($query4)){
            if($row['seat_4'] == $user_id){
                $sql4 = "UPDATE tb_car SET seat_4 = '$empty' WHERE  car_id = '$car_id' ";
                $query4 = mysqli_query($condb,$sql4);
                
            }
        }
        $sql5 = "SELECT * FROM tb_car WHERE seat_5 = '".$user_id."' ";
        $query5 = mysqli_query($condb,$sql5);

        while($row = mysqli_fetch_assoc($query5)){
            if($row['seat_5'] == $user_id){
                $sql5 = "UPDATE tb_car SET seat_5 = '$empty' WHERE  car_id = '$car_id' ";
                $query5 = mysqli_query($condb,$sql5);
               
            }
        }
        $sql6 = "SELECT * FROM tb_car WHERE seat_6 = '".$user_id."' ";
        $query6 = mysqli_query($condb,$sql6);

        while($row = mysqli_fetch_assoc($query6)){
            if($row['seat_6'] == $user_id){
                $sql6 = "UPDATE tb_car SET seat_6 = '$empty' WHERE  car_id = '$car_id' ";
                $query6 = mysqli_query($condb,$sql6);
               
            }
        }
        $sql7 = "SELECT * FROM tb_car WHERE seat_7 = '".$user_id."' ";
        $query7 = mysqli_query($condb,$sql7);

        while($row = mysqli_fetch_assoc($query7)){
            if($row['seat_7'] == $user_id){
                $sql7 = "UPDATE tb_car SET seat_7 = '$empty' WHERE  car_id = '$car_id' ";
                $query7 = mysqli_query($condb,$sql7);
                
            }
        }
        $sql8 = "SELECT * FROM tb_car WHERE seat_8 = '".$user_id."' ";
        $query8 = mysqli_query($condb,$sql8);

        while($row = mysqli_fetch_assoc($query8)){
            if($row['seat_8'] == $user_id){
                $sql8 = "UPDATE tb_car SET seat_8 = '$empty' WHERE  car_id = '$car_id' ";
                $query8 = mysqli_query($condb,$sql8);
                
            }
        }
        $sql9 = "SELECT * FROM tb_car WHERE seat_9 = '".$user_id."' ";
        $query9 = mysqli_query($condb,$sql9);

        while($row = mysqli_fetch_assoc($query9)){
            if($row['seat_9'] == $user_id){
                $sql9 = "UPDATE tb_car SET seat_9 = '$empty' WHERE  car_id = '$car_id' ";
                $query9 = mysqli_query($condb,$sql9);
               
            }
        }
       echo json_encode('out');
      
     

        

        

       
?> 