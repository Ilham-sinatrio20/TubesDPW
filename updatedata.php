<?php 
    include "connector.php";

    $induk = $_GET['induk'];
    $nama = $_GET['nama'];
    $gender = $_GET['gender'];
    $tempatlahir = $_GET['tempatlahir'];
    $tgllahir = $_GET['tanggallahir'];
    $alamat = $_GET['alamat'];
    $kec = $_GET['kecamatan'];
    $kab_kota = $_GET['kab_kota'];
    $kelas = $_GET['kelas'];
    $jurusan = $_GET['jurusan'];
    $level = $_GET['level'];
    $prestasi = $_GET['prestasi'];

    $query = "UPDATE siswa SET nama_lengkap = '$nama', jenis_kelamin = '$gender', tempat_lahir = '$tempatlahir', tgl_lahir = '$tgllahir', alamat = '$alamat', kecamatan = '$kec', kab_kota = '$kab_kota', kelas = '$kelas', jurusan = '$jurusan', level = '$level', prestasi = '$prestasi' WHERE no_induk = '$induk'";
    $result = mysqli_query($connect, $query);
    function pop($message) {
        echo "<script>alert('$message');</script>";
    }
    if($result){
        pop("Data berhasil ditambah");
        header("Location: http://localhost/TubesDPW/adminpageupdate.html");
    } else {
        header("Location: http://localhost/TubesDPW/adminpageupdate.html?error=Data belum lengkap atau masih salah");
    }
?>