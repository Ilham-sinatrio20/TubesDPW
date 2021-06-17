<?php 
    include "connector.php";

    $email = $_GET['email'];
    $nama = $_GET['nama'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $alamat = $_GET['alamat'];
    $kota = $_GET['kota'];
    $gender = $_GET['gender'];
    $telp = $_GET['no_telp'];

    $query = "INSERT INTO admin VALUES('$email', '$nama', '$username', '$password', '$alamat', '$kota', '$gender', '$telp')";
    $result = mysqli_query($connect, $query);

    if($result){
        echo "Data berhasil ditambahkan";
    }
?>