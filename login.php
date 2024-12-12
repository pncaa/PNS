<?php
// Mock database (simulasi data dari database)
$users = [
    ['username' => 'admin', 'password' => '12345', 'role' => 'admin'],
    ['username' => 'user1', 'password' => 'password1', 'role' => 'user']
];

// Inisialisasi variabel untuk kontrol popup
$popupBerhasil = false;
$popupGagal = false;
$popupInput = false;
$userRole = null; // Untuk menyimpan role pengguna setelah login berhasil

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil input dari form
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Validasi input kosong
    if (empty($username) || empty($password)) {
        $popupInput = true; // Input kosong
    } else {
        // Simulasi pengecekan data user
        $isLoginSuccess = false;

        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $isLoginSuccess = true;
                $userRole = $user['role']; // Simpan role pengguna
                break;
            }
        }

        // Berikan status popup berdasarkan hasil login
        if ($isLoginSuccess) {
            $popupBerhasil = true;
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
                <button type="submit">LOGIN</button>
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