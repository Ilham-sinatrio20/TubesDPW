<?php 
    include "connector.php";

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $telp = $_POST['no_telp'];

    $query = "INSERT INTO admin VALUES('$email', '$nama', '$username', '$password', '$alamat', '$gender', '$telp')";
    $result = mysqli_query($connect, $query);

    if($result){
        header("Location: http://localhost/TubesDPW/addAdmin.html");
    } else {
        header("Location: http://localhost/TubesDPW/addAdmin.html?error=Data belum lengkap atau masih salah");
    }
?>