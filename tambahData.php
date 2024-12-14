<?php
session_start();
require 'koneksi.php';
require 'functions.php';
cekLogin();

if (isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('User berhasil ditambahkan!');
              </script>";
    } else {
        echo "<script>
                alert('User gagal ditambahkan!');
              </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYPNS - TAMBAH DATA</title>

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
                <h5>ADMIN</h5>
            </div>

            <div class="sidebar-tengah">
                <img src="image/logopns.png" alt="">
            </div>

            <div class="sidebar-bawah">
                <a href="dashboardAdmin.php">Home</a>
                <a href="kelola.php">Kelola Pengajuan</a>
                <a href="tambahData.php">Tambah Data</a>
            </div>

            <div class="logo">
                <img src="image/bkn.png" alt="">
                <img src="image/bpjs.png" alt="">
            </div>
        </div>
        <!-- end sidebar -->

        <div class="main-wrapper">
            <!-- start navbar -->
            <div class="navbar">
                <h1>FORM TAMBAH DATA</h1>
                <a href="logout.php"><button class="logout">Logout</button></a>
            </div>
            <!-- end navbar -->
            <!-- start content -->
            <div class="main">
                <div class="form-wrapper">
                    <form action="" method="post">
                        <div class="form">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" required>
                        </div>
                        <div class="form">
                            <label for="nip">Nip</label>
                            <input type="text" id="nip" name="nip" required>
                        </div>
                        <div class="form">
                            <label for="usn">Username</label>
                            <input type="text" id="usn" name="usn" required>
                        </div>
                        <div class="form">
                            <label for="no_hp">Nomor HP</label>
                            <input type="tel" id="no_hp" name="no_hp" required>
                        </div>
                        <div class="form">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form">
                            <label for="pangkat">Pangkat/Golongan</label>
                            <input type="text" id="pangkat" name="pangkat" required>
                        </div>
                        <div class="form">
                            <label for="jk">Jenis Kelamin</label>
                            <select id="jk" name="jk" required>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form">
                            <label for="riwayatpendidikan">Riwayat Pendidikan Terakhir</label>
                            <input type="text" id="riwayatpendidikan" name="riwayatpendidikan" required>
                        </div>
                        <div class="form">
                            <label for="tglPengangkatan">Tanggal Pengangkatan Sebagai PNS</label>
                            <input type="date" id="tglPengangkatan" name="tglPengangkatan" required>
                        </div>
                        <div class="form">
                            <label for="instansi">Unit Kerja/Instansi Tempat Bertugas</label>
                            <input type="text" id="instansi" name="instansi" required>
                        </div>
                        <div class="form">
                            <label for="role">Role</label>
                            <select id="role" name="role" required>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="form">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="wrapper-submit">
                            <a href="#"><button class="submit" name="submit">Submit</button></a>
                        </div>
                </div>
                </form>
            </div>
            <!-- end content -->
        </div>
    </div>

</body>

<script>
     document.getElementById('tglPengangkatan').setAttribute('max', new Date().toISOString().split('T')[0]);
</script>

<?php
function registrasi($data)
{
    global $koneksi;

    $nama = $data["nama"];
    $nip = $data["nip"];
    $usn = $data["usn"];
    $no_hp = $data["no_hp"];
    $email = $data["email"];
    $pangkat = $data["pangkat"];
    $jenis_kelamin = $data["jk"];
    $riwayat_pendidikan = $data["riwayatpendidikan"];
    $tgl_pns = $data["tglPengangkatan"];
    $instansi = $data["instansi"];
    $role = $data["role"];
    $password = password_hash($data["password"], PASSWORD_DEFAULT);

    $query_cek_nip = "SELECT * FROM users WHERE nip = '$nip'";
    $hasil_cek_nip = mysqli_query($koneksi, $query_cek_nip);

    if (mysqli_num_rows($hasil_cek_nip) > 0) {
        echo "<script>
                    alert('NIP sudah terdaftar. Silakan coba NIP yang lain.');
                  </script>";
        echo "<script>
                    window.location.href = 'tambahData.php';
                  </script>";
        exit;
    } else {
        $query_data_user = "INSERT INTO data_user (nama, pangkat, jenis_kelamin, riwayat_pendidikan, tgl_pns, instansi, username, no_hp, email) 
                            VALUES ('$nama', '$pangkat', '$jenis_kelamin', '$riwayat_pendidikan', '$tgl_pns', '$instansi', '$usn', '$no_hp', '$email')";

        mysqli_query($koneksi, $query_data_user);

        $data_id = mysqli_insert_id($koneksi);

        $query_users = "INSERT INTO users (user_id, nip, role, password) 
                        VALUES ('$data_id', '$nip', '$role', '$password')";

        mysqli_query($koneksi, $query_users);
        return 1;
    }
}
?>

</html>