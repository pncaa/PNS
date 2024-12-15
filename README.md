
# MYPNS  

Proyek ini merupakan sebuah aplikasi web yang dirancang untuk membantu memproses pengurusan berkas kenaikan pangkat Pegawai Negeri Sipil (PNS). Aplikasi ini bertujuan untuk mempermudah proses administrasi dan mengurangi kerumitan yang sering dihadapi oleh pns dalam pengurusan kenaikan pangkat. 
## Fitur

- **Homepage :** Tampilan utama dari web pengajuan kenaikan pangkat. 
- **Login :** Halaman untuk login pengguna dan Admin.
- **Dashboard Admin :** Halaman khusus admin untuk memantau dan mengelola pengajuan kenaikan.
- **Kelola Pengajuan :** Fitur untuk mengelola data Pengajuan kenaikan pangkat PNS.
- **Tambah Data Pengajuan :** Formulir untuk menambahkan data atau berkas terkait pengajuan kenaikan pangkat.
- **Dashboard user :** Halaman beranda setelah login yang menampilkan ringkasan informasi profil PNS serta pengajuan kenaikan pangkat.
- **Syarat/Ketentuan :** Halaman yang menampilkan syarat dan ketentuan terkait proses kenaikan pangkat.
- **Pengajuan Berkas :** Halaman untuk mengunggah berkas yang dibutuhkan dalam proses pengajuan kenaikan pangkat.
## Teknologi yang Digunakan

**Frontend       :** HTML (Untuk struktur halaman web ) dan CSS (Untuk desain dan styling anatarmuka).

**Backend :**
PHP (Untuk pemrosesan data, autentifikasi, dan logika aplikasi) dan MySQL (Untuk menyimpan data pengguna dan pengajuan dalam database).

**Server:**           XAMPP/WAMP (Untuk server loka dalam pengembangan aplikasi).
## Struktur Project

1. **css/**  
   Berisi semua file CSS untuk memperindah website. Di dalamnya terdapat file: 
   - `dashboard.css`: File CSS untuk page dashboard.
   - `homepage.css`: File CSS untuk homepage.
   - `login.css`: File CSS untuk page login.
   - `sidebar.css`: File CSS untuk sidebar pada page tertentu.
   - `style.css`: File CSS untuk style umum.

2. **icons/**  
   Folder ini berisi semua aset icon yang digunakan pada project.

3. **image/**  
   Folder ini berisi semua aset image (gambar) yang digunakan pada project.

4. **sql/**  
   Pada folder ini berisi file sql, yaitu:
   - `data_pengajuan.sql`: File sql yang isinya query untuk membuat tabel data_pengajuan.
   - `data_user.sql`: File sql yang isinya query untuk membuat tabel data_user.
   - `pns_data.sql`: File sql yang isinya query yang bisa langsung diimport ke http://localhost/phpmyadmin
   - `data_pengajuan.sql`: File sql yang isinya query untuk membuat tabel users.

5. **uploads/**  
   Folder ini berisi semua file PDF yang diupload oleh user sehingga bisa dilihat oleh admin.

6. **dashboardAdmin.php**: File page dashboard untuk admin.

7. **dashboardUser.php**: File page dashboard untuk user..

8. **funtions.php**: File yang berisi berbagai function yang digunakan pada project.

9. **homepage.php**: File homepage sebelum user atau admin login.

10. **kelola.php**: File page kelola untuk kelola approve atau reject data dari user.

11. **koneksi.php**: File untuk menyambungkan database mysql ke project.

12. **login.php**: File page login untuk login admin atau user.

13. **logout.php**: File untuk menghentikan session dari admin maupun user.

14. **pengajuan.php**: File page pengajuan kenaikan pangkat untuk user, user dapat mengirimkan file PDF yang nantinya akan masuk ke database.

15. **persyaratan.php**: File page persyaratan kenaikan PNS untuk user.

16. **tambahData.php**: File page yang berisi input untuk menambahkan data user oleh admin.

17. **upload.php**: File yang mengatur upload data PDF dari user ke database.

18. **README.md**  
   File ini berisi nama proyek, deskripsi proyek, fitur, teknologi yang digunakan, struktur, data pembuat proyek, dan demo proyek.
## Kontributor Proyek

| Role              | Nama                 | NIM        |
|-------------------|----------------------|--------------------------|
| Ketua dan Front-End Developer | Panca Aziz Saputra         | H1D023033 |
| UI/UX Designer  | Yohana Des Ingrid Patricia Butarbutar    | H1D023031 |
| Back-End Developer    | Adeyunita Rachmadhani        | H1D023057 |



## Demo

![Demo MYPNS](https://github.com/user-attachments/assets/db4dd46a-92fe-41a3-bf32-4474e5bb5430)
