-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 02:58 PM
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
(4, 1, 1, 'Andy', '112233', 'Junior', 'BPS PWT', 'uploads/Fuzzy-Expert-System-Generalised-Model-for-Medical-Applications.pdf', 'approved'),
(5, 5, 5, 'Nohara', '09876543221', 'Senior', 'Kementrian Kasukabe', 'uploads/7626-26088-2-PB (2).pdf', 'rejected'),
(6, 5, 5, 'Nohara', '09876543221', 'Senior', 'Kementrian Kasukabe', 'uploads/77.+LR_38486 (1).pdf', 'rejected'),
(7, 5, 5, 'Nohara', '09876543221', 'Senior', 'Kementrian Kasukabe', 'uploads/77.+LR_38486 (1).pdf', 'rejected'),
(8, 5, 5, 'Nohara', '09876543221', 'Senior', 'Kementrian Kasukabe', 'uploads/77.+LR_38486 (4).pdf', 'approved'),
(9, 5, 5, 'Nohara', '09876543221', 'Senior', 'Kementrian Kasukabe', 'uploads/T-REC-O.175-201210-I!!PDF-E.pdf', 'approved'),
(10, 5, 5, 'Nohara', '09876543221', 'Senior', 'Kementrian Kasukabe', 'uploads/admin,+16.21604-105677-4-PB118-137 (1).pdf', 'rejected'),
(11, 11, 11, 'Cindy Charlotte', '1111111', 'Senior', 'Menteri LN', 'uploads/10880-31220-1-PB (1).pdf', 'approved'),
(12, 11, 11, 'Cindy Charlotte', '1111111', 'Senior', 'Menteri LN', 'uploads/75-114-1-SM (1).pdf', 'approved'),
(13, 5, 5, 'Nohara', '09876543221', 'Senior', 'Kementrian Kasukabe', 'uploads/3090-13220-1-PB.pdf', 'approved'),
(14, 5, 5, 'Nohara', '09876543221', 'Senior', 'Kementrian Kasukabe', 'uploads/Pertemuan 14  Uji Kredibilitas SPK.pdf', 'pending'),
(15, 11, 11, 'Cindy Charlotte', '1111111', 'Senior', 'Menteri LN', 'uploads/CamScanner 28-11-2024 12.12.pdf', 'pending');

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
(5, 'Nohara', 'Senior', 'S1', '2024-12-03', 'Kementrian Kasukabe', 'laki-laki', '0099887766', 'PNS_Nohara', 'nohara@gmail.com'),
(6, 'hshs', 'mesh', 'S1', '2024-12-01', 'aa', 'laki-laki', '11', '11', 'aa@gmail.com'),
(7, 'Abu', 'Junior', 'S1', '2024-12-16', 'Menteri LN', 'laki-laki', '0887766', 'PNS_abu', 'sicare@gmail.com'),
(11, 'Cindy Charlotte', 'Senior', 'S1', '2024-12-09', 'Menteri LN', 'perempuan', '11223344556677', 'PNS_Cindy', 'cindy@gmail.com');

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
(5, 5, '09876543221', 'user', '$2y$10$eNnjyVSaYcPbbU.0o74Ps.cSHc3k33SdLcHBE1PqugTcSAO/D.mpm'),
(6, 6, '11', 'admin', '$2y$10$lI54efjEeEk9NptwGNfaV.Rgp3Q6qffQqyeLcQSbYjXhDE516r3XC'),
(7, 7, '10101010', 'user', '$2y$10$r/ngxN2BxOlv3UVhf0AFSuJal9b2/mnpfVdJ.WS1CPbZ5gjjp91ji'),
(11, 11, '1111111', 'user', '$2y$10$PrBOv.HuEMsFeuh96aee8OyH8VbK1ZtGWn/wZvrblUaYaYi.9ilW2');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
