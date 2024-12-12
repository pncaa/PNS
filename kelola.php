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
                <button class="logout">Logout</button>
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button class="approve">Approve</button> <button class="nonapprove">No</button></td>
                    </tr>
                </table>
            </div>
            <!-- end content -->
        </div>
    </div>
</body>

</html>