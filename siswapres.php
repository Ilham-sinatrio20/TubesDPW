<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa Berprestasi</title>
    <link href="BS/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/Logo SMANSA.ico">
</head>

<body>

    <!--loader-->
    <div class="bg-loader">
        <div class="loader">

        </div>
    </div>
    <!--header-->
    <div class="namapanjang">
        <div class="container">
            <p1>OFFICIAL WEBSITE OF SMAN 1 KESAMBEN</p1>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.html">SMAN 1 KESAMBEN</a></h1>
            <ul>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li class="active"><a href="listSiswa.php"><b>PELAYANAN</b></a></li>
                <li><a href="about.html"><b>ABOUT</b></a></li>
                <li><a href="contact.html"><b>CONTACT</b></a></li>
                <li><a href="loginform.html"><b>LOGIN</b></a></li>
            </ul>
    </header>
    <section class="label" style="height: 37px; margin-top: -17px;">
        <div class="container">
            <p style="position: absolute;">Home / Pelayanan</p>
        </div>
    </section>
    <!--service-->
    <section>
        <div class="container" id="header2">
            <ul>
                <li><a href="listSiswa.php">LIST SISWA</a></li>
                <li><a href="ppdb.php">JADWAL PPDB</a></li>
                <li class="active-service"><a href="siswapres.php">SISWA BERPRESTASI</a></li>
            </ul>
            <h3 id="daftar">DAFTAR SISWA BERPRESTASI SMAN 1 KESAMBEN</h3>
            <table class="table table-striped" style="font-size: 12px;">
                <thead class="text-center">
                    <tr>
                    <th scope="col">No Induk</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Prestasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "connector.php";
                        $query = "SELECT * FROM siswa WHERE level = '2' ORDER BY kelas ASC";
                        $sql = mysqli_query($connect, $query);
                        if(mysqli_num_rows($sql)>0){
                            while($row = mysqli_fetch_array($sql)){
                    ?>
                    <tr class="text-center">
                        <th scope="row" class="text-center"><?php echo  $row["no_induk"]?></td>
                        <td><?php echo  $row["nama_lengkap"]?></td>
                        <td><?php echo  $row["jenis_kelamin"]?></td>
                        <td><?php echo  $row["alamat"]?></td>
                        <td><?php echo  $row["kelas"]?></td>
                        <td><?php echo  $row["jurusan"]?></td>
                        <td><?php echo  $row["prestasi"]?></td>
                    <?php 
                    }
                }
                else {
                    echo "0 result";
                }
            ?>
            </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!--footer-->
    <footer>
        <div class="container">
            <small>Copryright &copy 2021 All Right Reserved</small>
        </div>
    </footer>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".bg-loader").hide();
        })
    </script>
</body>

</html>