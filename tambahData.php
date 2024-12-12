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
                <button class="logout">Logout</button>
            </div>
            <!-- end navbar -->
            <!-- start content -->
            <div class="main">
                <div class="form-wrapper">

                    <div class="form">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama">
                    </div>
                    <div class="form">
                        <label for="nip">Nip</label>
                        <input type="text" id="nip" name="nip">
                    </div>
                    <div class="form">
                        <label for="pangkat">Pangkat/Golongan</label>
                        <input type="text" id="pangkat" name="pangkat">
                    </div>
                    <div class="form">
                        <label for="jk">Jenis Kelamin</label>
                        <select id="jk" name="jk">
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form">
                        <label for="riwayatpendidikan">Riwayat Pendidikan Terakhir</label>
                        <input type="text" id="riwayatpendidikan" name="riwayatpendidikan">
                    </div>
                    <div class="form">
                        <label for="tglPengangkatan">Tanggal Pengangkatan Sebagai PNS</label>
                        <input type="date" id="tglPengangkatan" name="tglPengangkatan">
                    </div>
                    <div class="form">
                        <label for="instansi">Unit Kerja/Instansi Tempat Bertugas</label>
                        <input type="text" id="instansi" name="instansi">
                    </div>
                    <div class="form">
                        <label for="role">Role</label>
                        <select id="role" name="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <a href="#"><button class="submit">Submit</button></a>
                </div>
            </div>
            <!-- end content -->
        </div>
    </div>


</body>

</html>