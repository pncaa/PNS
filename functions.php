<?php
   function cekLogin() {
       if (!isset($_SESSION['username'])) {
           echo "<script>
                   window.location.href = 'login.php'; 
                 </script>";
           exit();
       }
   }
   
    function statusTerakhir($userId, $koneksi) {
        $query = "SELECT status FROM data_pengajuan WHERE user_id = '$userId' ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($koneksi, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['status'];
        }
        return 'belum mengajukan';
    }
?>    
