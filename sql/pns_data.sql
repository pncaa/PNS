-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 04:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pns_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pengajuan`
--

CREATE TABLE `data_pengajuan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data_user_id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pengajuan`
--

INSERT INTO `data_pengajuan` (`id`, `user_id`, `data_user_id`, `nama`, `nip`, `pangkat`, `instansi`, `file_path`, `status`) VALUES
(2, 4, 4, 'Adey', '12345', 'Senior', 'BP Batam', 'uploads/Pertemuan 14  Uji Kredibilitas SPK.pdf', 'rejected'),
(3, 4, 4, 'Adey', '12345', 'Senior', 'BP Batam', 'uploads/Literature Reviews-Adeyunita Rachmadhani (H1D923057).docx.pdf', 'approved'),
(4, 1, 1, 'Andy', '112233', 'Junior', 'BPS PWT', 'uploads/Fuzzy-Expert-System-Generalised-Model-for-Medical-Applications.pdf', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `riwayat_pendidikan` varchar(100) DEFAULT NULL,
  `tgl_pns` date DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `nama`, `pangkat`, `riwayat_pendidikan`, `tgl_pns`, `instansi`, `jenis_kelamin`, `no_hp`, `username`, `email`) VALUES
(1, 'Andy', 'Junior', 'S1', '2024-12-02', 'BPS PWT', 'laki-laki', '081524356', 'admin_andy', 'andy@gmail.com'),
(4, 'Adey', 'Senior', 'S3', '2024-04-12', 'BP Batam', 'perempuan', '0817284635', 'PNS_adey', 'adey@gmail.com'),
(5, 'Nohara', 'Senior', 'S1', '2024-12-03', 'Kementrian Kasukabe', 'laki-laki', '0099887766', 'PNS_Nohara', 'nohara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `nip`, `role`, `password`) VALUES
(1, 1, '112233', 'admin', '$2y$10$zR2WCibR/QWUHqc6Wo/k8.TwXo365rlX6CYuzuq.qrIp81dvzqbzO'),
(4, 4, '12345', 'user', '$2y$10$OQm6pyDOZ5nrnIYHdJmJNu9zQOhwpDh6orqByYuTHFkcCXIYdvJnq'),
(5, 5, '09876543221', 'user', '$2y$10$eNnjyVSaYcPbbU.0o74Ps.cSHc3k33SdLcHBE1PqugTcSAO/D.mpm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengajuan`
--
ALTER TABLE `data_pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `data_user_id` (`data_user_id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengajuan`
--
ALTER TABLE `data_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pengajuan`
--
ALTER TABLE `data_pengajuan`
  ADD CONSTRAINT `data_pengajuan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `data_pengajuan_ibfk_2` FOREIGN KEY (`data_user_id`) REFERENCES `data_user` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `data_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
