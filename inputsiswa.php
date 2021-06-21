<?php 
    include "connector.php";

    $induk = $_POST['induk'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tempatlahir = $_POST['tempatlahir'];
    $tgllahir = $_POST['tanggallahir'];
    $alamat = $_POST['alamat'];
    $kec = $_POST['kecamatan'];
    $kab_kota = $_POST['kab_kota'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $level = $_POST['level'];
    $prestasi = $_POST['prestasi'];

    $query = "INSERT INTO siswa (no_induk, nama_lengkap, jenis_kelamin, tempat_lahir, tgl_lahir, alamat, kecamatan, kab_kota, kelas, jurusan, level, prestasi) 
    VALUES('$induk', '$nama', '$gender', '$tempatlahir', '$tgllahir', '$alamat', '$kec', '$kab_kota', '$kelas', '$jurusan', '$level', '$prestasi')";
    $result = mysqli_query($connect, $query);
    function pop($message) {
        echo "<script>alert('$message');</script>";
    }
    if($result){
        pop("Data berhasil ditambah");
        header("Location: http://localhost/TubesDPW/adminpagedefault.html");
    } else {
        header("Location: http://localhost/TubesDPW/adminpagedefault.html?error=Data belum lengkap atau masih salah");
    }
?>