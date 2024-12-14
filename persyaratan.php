<?php
session_start();
require 'functions.php';
cekLogin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYPNS - SKNP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <!-- start sidebar -->
        <div class="sidebar">
            <div class="teks">
                <h1>PROFIL</h1>
            </div>

            <div class="sidebar-atas">
                <img src="icons/user.png" alt="">
                <h5><?php echo htmlspecialchars($_SESSION['nama']); ?></h5>
                <h5><?php echo htmlspecialchars($_SESSION['username']); ?></h5>
            </div>

            <div class="sidebar-tengah">
                <img src="image/logopns.png" alt="">
            </div>

            <div class="sidebar-bawah">
                <a href="dashboardUser.php">Home</a>
                <a href="persyaratan.php">Persyaratan</a>
                <a href="pengajuan.php">Pengajuan Kenaikan</a>
            </div>

            <div class="logo">
                <img src="image/bkn.png" alt="">
                <img src="image/bpjs.png" alt="">
            </div>
        </div>
        <!-- end sidebar -->

        <!-- start navbar -->
        <div class="main-wrapper">
            <div class="navbar">
                <h1>SYARAT/KETENTUAN KENAIKAN PANGKAT</h1>
                <a href="logout.php"><button class="logout">Logout</button></a>
            </div>
            <!-- end navbar -->
            <!-- start content -->
            <div class="main">
                <div class="dropdown-wrapper">
                    <div class="dropdown">
                        <button class="dropdown-btn">Peraturan 1 <img src="icons/dropdown.png" alt=""></button>
                        <div class="dropdown-content">
                            <p>Isi dari peraturan pertama. Pastikan untuk mematuhi ketentuan yang sudah ditetapkan.</p>
                        </div>
                    </div>
                </div>
                <a href="pengajuan.php"><button class="hreff">Ajukan Berkas</button></a>
            </div>
        </div>
        <!-- end content -->
    </div>

    <script>
        document.querySelectorAll('.dropdown-btn').forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.parentElement;
                dropdown.classList.toggle('active');
            });
        });
    </script>
</body>

</html>