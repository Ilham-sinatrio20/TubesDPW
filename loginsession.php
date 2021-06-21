<?php 
    include "connector.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($result);

    if($cek>0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
            header("Location: http://localhost/TubesDPW/homeAdmin.php");
    }
    else {
        $_SESSION['error']=true;
            header("Location: http://localhost/TubesDPW/loginform.html?error=Username atau Password anda salah");
    }
?>