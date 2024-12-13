CREATE TABLE users ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    nip VARCHAR(50),
    role ENUM('admin', 'user'),
    password VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES data_user(id) ON DELETE CASCADE
);

SELECT u.nip, 
                    d.nama, 
                    d.no_hp, 
                    d.username, 
                    d.jenis_kelamin, 
                    d.email, 
                    p.status
                FROM users u
                JOIN data_user d ON u.user_id = d.id  -- Menggunakan user_id di users dan id di data_user
                LEFT JOIN data_pengajuan p ON d.id = p.data_user_id  -- LEFT JOIN untuk mendapatkan status dari data_pengajuan
                WHERE u.nip = '1111111'
                ORDER BY p.id DESC -- Mengurutkan data_pengajuan berdasarkan id dari yang terbesar (terbaru)
                LIMIT 1;