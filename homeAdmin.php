<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Website Kami</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.ico">
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
            <p1>OFFICIAL WEBSITE OF SMAN NEGERI PULAKANDANG</p1>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="homeAdmin.php">SMARIPULANG</a></h1>
            <ul>
                <li class="active"><a href="homeAdmin.php"><b>HOME</b></a></li>
                <li><a href="servicedefault.php"><b>PELAYANAN</b></a></li>
                <li><a href="aboutAdmin.html"><b>ABOUT</b></a></li>
                <li><a href="contactAdmin.html"><b>CONTACT</b></a></li>
                <li><a href="loginform.html"><b>LOGOUT</b></a></li>
            </ul>
    </header>
    <!--banner-->
    <section class="banner">
        <h2>WELCOME TO OFFICIAL WEBSITE OF SMARIPULANG</h2>
    </section>

    <!---about--->
    <section class="about">
        <div class="container">
            <h3>ABOUT</h3>
            <p>SMA Negeri Pulakandang atau sering disebut <b>SMARIPULANG</b> merupakan salah satu SMA favorit di kabupaten Konoha. SMARIPULANG memiliki banyak presatasi dibidang akademik maupun non akademik. SMARIPULANG juga menyediakan sarana dan prasarana
                lengkap untuk memfasilitasi kegiatan siswa. Dengan sarana dan prasarana yang lengkap diharapkan siswa dapat mengoptimalkan kompetensi yang dimikinya baik disegi akademik maupun non akademik.</p>
        </div>
    </section>

    <!---Pelayanan--->
    <section class="service">
        <div class="container">
            <h3>PELAYANAN</h3>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><i class="fas fa-list"></i></div>
                    <a href="servicedefault.php">
                        <h4>LIST SISWA</h4>
                    </a>
                </div>
                <div class="col-4">
                    <div class="icon"><i class="far fa-calendar-alt"></i></div>
                    <a href="jadwalppdb.php">
                        <h4>CEK JADWAL PPDB</h4>
                    </a>
                </div>
                <div class="col-4">
                    <div class="icon"><i class="fas fa-award"></i></div>
                    <a href="servicesiswapres.php">
                        <h4>LIST SISWA BERPRESTASI</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br><br>
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
    <script src="BS/dist/js/bootstrap.min.js"></script>
</body>

</html>