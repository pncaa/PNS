CREATE TABLE data_user ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    pangkat VARCHAR(50),
    riwayat_pendidikan VARCHAR(100),
    tgl_pns DATE,
    instansi VARCHAR(100),
    jenis_kelamin ENUM('laki-laki', 'perempuan')
);

ALTER TABLE data_user 
ADD COLUMN no_hp VARCHAR(15),
ADD COLUMN username VARCHAR(50),
ADD COLUMN email VARCHAR(100);
