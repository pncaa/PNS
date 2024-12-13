CREATE TABLE users ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    nip VARCHAR(50),
    role ENUM('admin', 'user'),
    password VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES data_user(id) ON DELETE CASCADE
);
