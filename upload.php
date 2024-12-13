<?php
session_start();
require 'koneksi.php';


if (isset($_POST["submit"])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $fileType = mime_content_type($_FILES['file']['tmp_name']);
        if ($fileType !== 'application/pdf') {
            echo 'Error: Hanya meneruma file PDF.';
            exit;
        }

        $fileName = basename($_FILES['file']['name']);
        $uploadFile = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {

            $username = $_SESSION['username'];

            $query_user = "
               INSERT INTO data_pengajuan (user_id, data_user_id, nama, nip, pangkat, instansi, file_path, status)
                SELECT 
                    u.id AS user_id, 
                    du.id AS data_user_id, 
                    du.nama, 
                    u.nip, 
                    du.pangkat, 
                    du.instansi, 
                    '$uploadFile' AS file_path, 
                    'pending' AS status
                FROM 
                    users u
                JOIN 
                    data_user du ON u.user_id = du.id
                WHERE 
                    u.nip = '$username';
            ";
            $result_user = mysqli_query($koneksi, $query_user);
            
                if ($result_user) {
                    echo "<script>
                            alert('File berhasil diupload'); 
                            window.location.href = 'dashboardUser.php'; 
                          </script>";
                } else {
                    echo 'Gagal memasukkan data ke dalam database';
                }
            } else {
                echo 'Data pengguna tidak ditemukan.';
            }
        } else {
            echo 'File gagal diupload.';
        }
    } else {
        echo 'Tidak ada file yang diupload.';
    }

?>
