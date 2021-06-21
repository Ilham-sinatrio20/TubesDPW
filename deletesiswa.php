<?php 
    include "connector.php";

    $induk = $_GET['induk'];

    $query = "DELETE FROM siswa WHERE no_induk = '$induk'";
    $result = mysqli_query($connect, $query);
    function pop($message) {
        echo "<script>alert('$message');</script>";
    }
    if($result){
        pop("Data berhasil ditambah");
        header("Location: http://localhost/TubesDPW/adminpagedelete.html");
    } else {
        header("Location: http://localhost/TubesDPW/adminpagedelete.html?error=Data belum lengkap atau masih salah");
    }
?>