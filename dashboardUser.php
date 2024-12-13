<?php
session_start();
require 'koneksi.php';
require 'functions.php';
ceckLogin();

$userId = $_SESSION['user_id'];
$statusPengajuan = statusTerakhir($userId, $koneksi);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYPNS - DASHBOARD USERS</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <!-- start navbar -->
    <div class="navbar">
        <div class="navbar-logo">
            <img src="image/logopns.png" alt="">
        </div>
        <div class="navbar-nav">
            <div class="teks">
                <h1>SELAMAT DATANG</h1>
            </div>
            <div class="nav-main">
                <a href="dashboardUser.php">Home</a>
                <a href="persyaratan.php">Persyaratan</a>
                <a href="pengajuan.php">Pengajuan Kenaikan</a>
            </div>
            <a href="logout.php"><button class="logout">Logout</button></a>
        </div>
    </div>
    <!-- end navbar -->

    <!-- start utama-->
    <div class="container">
        <!-- start sidbar-profil -->
        <div class="sidebar">
            <div class="profil">
                <div class="teks">
                    <h2>Profile Akun</h2>
                </div>
                <div class="biodata">
                    <table>
                        <tr>
                            <td colspan="3"><img src="icons/user-black.png" alt=""></td>
                        </tr>
                        <tr>
                            <td colspan="3"><?php echo htmlspecialchars($_SESSION['nama']); ?></td>
                        </tr>
                        <tr>
                            <td class="td1">No. HP</td>
                            <td class="td2">:</td>
                            <td class="td3"><?php echo htmlspecialchars($_SESSION['no_hp']); ?></td>
                        </tr>
                        <tr>
                            <td class="td1">Username</td>
                            <td class="td2">:</td>
                            <td class="td3"><?php echo htmlspecialchars($_SESSION['usn']); ?></td>
                        </tr>
                        <tr>
                            <td class="td1">Jenis Kelamin</td>
                            <td class="td2">:</td>
                            <td class="td3"><?php echo htmlspecialchars($_SESSION['jenis_kelamin']); ?></td>
                        </tr>
                        <tr>
                            <td class="td1">Email</td>
                            <td class="td2">:</td>
                            <td class="td3"><?php echo htmlspecialchars($_SESSION['email']); ?></td>
                        </tr>
                        <tr>
                            <td class="td1">Status</td>
                            <td class="td2">:</td>
                            <td class="td3"><?php echo htmlspecialchars($statusPengajuan); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- end sidbar-profil -->

        <!-- start utama-utama -->
        <div class="utama">
            <!-- start foto-->
            <div class="utama-foto">
                <div class="foto-wrapper">
                    <div class="foto">
                        <img id="slide-1" src="image/Pangkat.jpg" alt="">
                        <img id="slide-2" src="image/periode.png" alt="">
                    </div>
                    <div class="slider">
                        <a href="#slide-1"></a>
                        <a href="#slide-2"></a>
                    </div>
                </div>
            </div>
            <!-- end foto-->
            <!-- start tabel pengajuan-->
            <div class="utama-tabel">

            </div>
            <!-- end tabel pengajuan-->
        </div>
        <!-- end utama-utama -->

    </div>
    <!-- end utama-->
</body>
<?php

?>
</html>