<?php
session_start();
require 'koneksi.php';
require 'functions.php';
ceckLogin();

if (isset($_POST['approve']) || isset($_POST['reject'])) {
    $id = $_POST['id'];
    $statusBaru = isset($_POST['approve']) ? 'approved' : 'rejected';

    $query_update = "UPDATE data_pengajuan SET status = '$statusBaru' WHERE id = '$id'";

    if (mysqli_query($koneksi, $query_update)) {
        echo "<script>
                alert('Status berhasil diperbarui'); 
                window.location.href = 'kelola.php';
              </script>";
    } else {
        echo "Gagal memperbarui";
    }
}

$query_tampil = "SELECT * FROM data_pengajuan";
$result_tampil = mysqli_query($koneksi, $query_tampil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYPNS - KELOLA PENGAJUAN</title>

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
                <h1>DATA PENGAJUAN</h1>
                <a href="logout.php"><button class="logout">Logout</button></a>
            </div>
            <!-- end navbar -->
            <!-- start content -->
            <div class="main">
                <table>
                    <tr>
                        <th class="th1">NO</th>
                        <th class="th2">Nama</th>
                        <th class="th3">NIP</th>
                        <th class="th3">Pangkat / Golongan</th>
                        <th class="th2">Instansi / Tempat Kerja</th>
                        <th class="th4">Pengajuan</th>
                        <th class="th3">Action</th>
                    </tr>
                    <?php
                    if ($result_tampil && mysqli_num_rows($result_tampil) > 0) {
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($result_tampil)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $data['nama'] . "</td>";
                            echo "<td>" . $data['nip'] . "</td>";
                            echo "<td>" . $data['pangkat'] . "</td>";
                            echo "<td>" . $data['instansi'] . "</td>";
                            echo "<td><a href='" . $data['file_path'] . "'>Lihat File</a></td>";
                            
                            echo "<td>";
                            echo "<form method='POST' action=''>";
                            echo "<input type='hidden' name='id' value='" . $data['id'] . "'>";
                            echo "<input type='hidden' name='current_status' value='" . $data['status'] . "'>";
                            if ($data['status'] === 'pending') {
                                echo "<button type='submit' name='approve' class='approve'>Approve</button>";
                                echo "<button type='submit' name='reject' class='nonapprove'>Reject</button>";
                            } else {
                                echo "<span>" . ucfirst($data['status']) . "</span>";
                            }
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Data tidak tersedia</td></tr>";
                    }
                    ?>

                </table>
            </div>
            <!-- end content -->
        </div>
    </div>
</body>

</html>