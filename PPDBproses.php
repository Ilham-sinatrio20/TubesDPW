<?php 
    include "connector.php";

    $kegiatan = $_POST['kegiatan'];
    $date = $_POST['tanggal'];
    $place = $_POST['tempat'];
    $ket = $_POST['ket'];

    $sql = "INSERT INTO ppdb (kegiatan, tanggal, tempat, keterangan) VALUES ('$kegiatan', '$date', '$place', '$ket')";
    $result = mysqli_query($connect, $sql);
    function pop($message) {
        echo "<script>alert('$message');</script>";
    }
    if($result){
        pop("Data berhasil ditambah");
        header("Location: http://localhost/TubesDPW/editPPDB.html");
    } else {
        header("Location: http://localhost/TubesDPW/editPPDB.html?error=Data belum lengkap atau masih salah");
    }
?>
