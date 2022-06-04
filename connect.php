<?php

$condb = mysqli_connect('localhost','root','','cartracking');

mysqli_set_charset($condb, 'utf8');
if(!$condb){
    echo 'no';
}
?>