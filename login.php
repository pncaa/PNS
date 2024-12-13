<?php
session_start();
require 'koneksi.php';

$popupBerhasil = false;
$popupGagal = false;
$popupInput = false;
$userRole = null;

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        $popupInput = true;
    } else {
        $query = "SELECT u.*, 
                    d.nama, 
                    d.no_hp, 
                    d.username, 
                    d.jenis_kelamin, 
                    d.email, 
                    p.status
                FROM users u
                JOIN data_user d ON u.user_id = d.id
                LEFT JOIN data_pengajuan p ON d.id = p.data_user_id
                WHERE u.nip = '$username'
                ORDER BY p.id DESC
                LIMIT 1;
                ";
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            if ($user && password_verify($password, $user["password"])) {
                $_SESSION["username"] = $user["nip"];
                $_SESSION["role"] = $user["role"];
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION["nama"] = $user["nama"];
                $_SESSION["no_hp"] = $user["no_hp"];
                $_SESSION["usn"] = $user["username"]; 
                $_SESSION["jenis_kelamin"] = $user["jenis_kelamin"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["status"] = $user["status"];

                $popupBerhasil = true;
                $userRole = $user["role"];
            } else {
                $popupGagal = true;
            }
        } else {
            $popupGagal = true;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYPNS - LOGIN</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <!-- start nav -->
        <div class="nav">
            <div class="nav-mypns">
                <img src="image/logo.png" alt="">
            </div>
            <div class="nav-teks">
                <h1>LOGIN DENGAN AKUN</h1>
            </div>
            <div class="nav-pns">
                <img src="image/logopns.png" alt="">
            </div>
        </div>
        <!-- end nav -->
        <!-- start login -->
        <div class="login">
            <form action="" method="POST">
                <div class="login-username">
                    <span id="username">NIP/Username</span>
                    <input type="text" class="username" id="username" name="username">
                </div>
                <div class="login-password">
                    <span id="password">Password</span>
                    <input type="password" class="password" id="password" name="password">
                </div>
                <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
        <!-- end login -->

        <!-- start popup -->
        <div id="popup-berhasil" class="popup <?= $popupBerhasil ? '' : 'hidden' ?>">
            <div class="popup-konten">
                <h2 id="berhasil-pesan">LOGIN BERHASIL</h2>
                <p id="berhasil-pesan2">Selamat Anda Berhasil Login</p>
                <div class="button">
                    <button onclick="document.getElementById('popup-berhasil').classList.add('hidden');">Batal</button>
                    <button onclick="window.location.href='<?= $userRole == 'admin' ? 'dashboardAdmin.php' : 'dashboardUser.php' ?>'">Oke</button>
                </div>
            </div>
        </div>

        <div id="popup-gagal" class="popup <?= $popupGagal ? '' : 'hidden' ?>">
            <div class="popup-konten">
                <h2 id="gagal-pesan">LOGIN GAGAL</h2>
                <p id="gagal-pesan2">Akun Tidak Terdaftar!</p>
                <div class="button">
                    <button onclick="document.getElementById('popup-gagal').classList.add('hidden');">Oke</button>
                </div>
            </div>
        </div>

        <div id="popup-input" class="popup <?= $popupInput ? '' : 'hidden' ?>">
            <div class="popup-konten">
                <h2 id="input-pesan">LOGIN GAGAL</h2>
                <p id="input-pesan2">Inputkan Data Dengan Benar</p>
                <div class="button">
                    <button onclick="document.getElementById('popup-input').classList.add('hidden');">Oke</button>
                </div>
            </div>
        </div>
        <!-- end popup -->

        <!-- start footer -->
        <div class="footer">
            <div class="footer-kiri">
                <a href="homepage.php"><img src="icons/arrow.png" alt=""></a>
            </div>
            <div class="footer-tengah">
                <h1>JIKA ADA MASALAH AKUN, SEGERA HUBUNGI KAMI !</h1>
            </div>
            <div class="footer-kanan">
                <table>
                    <tr>
                        <td rowspan="2">Kontak Kami</td>
                        <td><img src="icons/call.png" alt=""> +62 812-3456-7890</td>
                    </tr>
                    <tr>
                        <td><img src="icons/mail.png" alt=""> mypns2024@gmail.com</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- end footer -->
    </div>
</body>

</html>