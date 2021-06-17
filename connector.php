<?php 
    $servername = "localhost";
    $username = "root";
    $password = "ZeroTwo02";
    $database = "tugas_besar_dpw";

    $connect = new mysqli($servername, $username, $password, $database);

    if($connect -> connect_error){
        die("Connection failed  : ". $connect->connect_error);
    }
?>