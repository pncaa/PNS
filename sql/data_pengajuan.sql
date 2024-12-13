CREATE TABLE data_pengajuan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,            
    data_user_id INT NOT NULL,       
    nama VARCHAR(100),
    nip VARCHAR(18),
    pangkat VARCHAR(50),
    instansi VARCHAR(100),
    file_path VARCHAR(255) NOT NULL,  
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',  
    FOREIGN KEY (user_id) REFERENCES users(id),    
    FOREIGN KEY (data_user_id) REFERENCES data_user(id) 
    );

    ALTER TABLE data_pengajuan ADD COLUMN nip VARCHAR(255);