<?php

$condb = mysqli_connect('localhost','root','12345678','cartracking');

mysqli_set_charset($condb, 'utf8');
if(!$condb){
    echo 'no';
}
?>