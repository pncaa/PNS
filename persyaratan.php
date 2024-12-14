<?php
session_start();
require 'functions.php';
ceckLogin();

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
                        <button class="dropdown-btn">Kenaikan Pangkat Reguler : <img src="icons/dropdown.png" alt=""></button>
                        <div class="dropdown-content">
                            <li>SK CPNS dan SK PNS</li>
                            <li>SK Kenaikan Pangkat Terakhir</li>
                            <li>SK Jabatan Lama dan Baru</li>
                            <li>Telah membuat data kinerja melalui aplikasi e-kinerja Kementerian Perhubungan</li>
                            <li>Telah membuat data kinerja melalui aplikasi e-kinerja Kementerian Perhubungan</li>
                            <li>SKP, Realisasi, Evaluasi Kinerja 2 (dua) tahun terakhir (1 paket masing-masing maksimal 2MB)</li>
                            <li>Sertifikat Lulus Ujian Dinas (Bagi yang akan pindah golongan dari II/d ke III/a)</li>
                            <li> Uraian Tugas lama dan baru sesuai jabatannya, dan sudah 4 (empat) tahun dalam pangkat terakhir.</li>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-btn">Kenaikan Pangkat Pilihan Jabatan Fungsional Tertentu <img src="icons/dropdown.png" alt=""></button>
                        <div class="dropdown-content">
                            <li>SK CPNS dan SK PNS</li>
                            <li>SK Kenaikan Pangkat Terakhir</li>
                            <li>SK Jabatan Lama dan Baru</li>
                            <li>Berita Acara Pelantikan, SPMT, SPMJ</li>
                            <li>PAK Integrasi dan PAK Konversi</li>
                            <li>Telah membuat data kinerja melalui aplikasi e-kinerja Kementerian Perhubungan</li>
                            <li>SKP, Realisasi, Evaluasi Kinerja 2 (dua) tahun terakhir (1 paket masing-masing maksimum 2MB)</li>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-btn">Kenaikan Pangkat Penyesuaian Ijazah (minimal 1 tahun dari KP terakhir)<img src="icons/dropdown.png" alt=""></button>
                        <div class="dropdown-content">
                            <li>SK CPNS dan SK PNS</li>
                            <li>SK Kenaikan Pangkat Terakhir</li>
                            <li>SK Tugas Belajar</li>
                            <li>Akreditasi Program Studi / Jurusan Pendidikan</li>
                            <li>Telah membuat data kinerja melalui aplikasi e-kinerja Kementerian Perhubungan</li>
                            <li>SKP, Realisasi, Evaluasi Kinerja 2 (dua) tahun terakhir (1 paket masing-masing maksium 2MB)</li>
                            <li>Sertifikat Lulus Ujian Penyesuaian Ijazah (bagi yang telah memiliki ijazah peningkatan pendidikan dan akan pindah golongan dari II/d ke III/a)</li>
                            <li>Uraian Tugas lama dan baru sesuai jabatannya</li>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-btn"> Kenaikan Pangkat Struktural <img src="icons/dropdown.png" alt=""></button>
                        <div class="dropdown-content">
                            <li>SK CPNS dan SK PNS</li>
                            <li>SK Kenaikan Pangkat Terakhir</li>
                            <li>SK Jabatan Lama dan Baru</li>
                            <li>SK Pemberhentian dari Jabatan Fungsional Tertentu (bagi yang pindah jabatan)</li>
                            <li>Berita Acara Pelantikan / Surat Pernyataan Pelantikan (SPP, SPMT, SPMJ)</li>
                            <li>Telah membuat data kinerja melalui aplikasi e-kinerja Kementerian Perhubungan</li>
                            <li>SKP, Realisasi, Evaluasi Kinerja 2 (dua) tahun terakhir (1 paket masing-masing maksimal 2MB)</li>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-btn"> Kenaikan Pangkat Sedang dan atau Selesai Tugas Belajar <img src="icons/dropdown.png" alt=""></button>
                        <div class="dropdown-content">
                            <li>SK CPNS dan SK PNS</li>
                            <li>SK Kenaikan Pangkat Terakhir</li>
                            <li>SK Tugas Belajar</li>
                            <li>SK Pemberhentian dari Jabatan Fungsional Tertentu (bagi yang pindah jabatan)</li>
                            <li>SKP selama pendidikan diterbitkan oleh Sekolah / Kampus berdasarkan Nilai Indeks Prestasi / IP</li>
                            <li>Ijazah Peningkatan Pendidikan (bagi yang telah selesai tugas belajar)</li>
                            <li>Pengakuan / Pengesahan dari DIKTI (bagi yang tugas belajar di luar negeri)</li>
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