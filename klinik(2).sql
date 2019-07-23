-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 07:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` bigint(20) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `email_admin`, `password_admin`) VALUES
(1, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin1', 'admin@gmail.com', 'admin1'),
(4, 'fadila', 'fadila@gmail.com', 'fadila1'),
(5, 'fadila', 'fadila@gmail.com', 'fadila1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_resep`
--

CREATE TABLE `tb_detail_resep` (
  `id_detail_resep` bigint(20) NOT NULL,
  `id_resep` bigint(20) NOT NULL,
  `id_obat` bigint(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_resep`
--

INSERT INTO `tb_detail_resep` (`id_detail_resep`, `id_resep`, `id_obat`, `jumlah`, `total`) VALUES
(1, 3, 19, 2, 10000),
(2, 4, 19, 2, 10000),
(3, 3, 19, 3, 15000),
(7, 3, 18, 2, 10000),
(8, 3, 17, 1, 20000),
(9, 4, 17, 2, 40000),
(10, 4, 20, 1, 20000),
(11, 5, 18, 2, 10000),
(12, 5, 18, 1, 5000),
(15, 7, 17, 3, 60000),
(16, 7, 18, 2, 10000),
(19, 9, 19, 1, 5000),
(20, 10, 20, 1, 20000),
(21, 12, 17, 2, 40000),
(22, 12, 18, 2, 10000),
(27, 6, 17, 3, 60000),
(28, 6, 18, 2, 10000),
(29, 8, 19, 2, 10000),
(30, 8, 20, 1, 20000),
(31, 13, 18, 2, 30000),
(32, 14, 21, 1, 20000),
(33, 15, 23, 1, 15000),
(34, 16, 23, 1, 15000),
(35, 1, 87, 1, 10000),
(36, 2, 33, 1, 55000),
(37, 2, 32, 1, 50000),
(38, 3, 51, 2, 170000),
(39, 4, 25, 2, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` bigint(20) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `email_dokter` varchar(100) NOT NULL,
  `password_dokter` varchar(32) NOT NULL,
  `current_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `email_dokter`, `password_dokter`, `current_password`) VALUES
(3, 'Dr.Lia', 'Liadamayati123@gmail.com', '7221a94c235586d29ccf3ad9e12bf7ad', 'drlia123'),
(7, 'Dr.Hendra', 'drhendra@gmail.com', 'a04cca766a885687e33bc6b114230ee9', 'hendra');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` bigint(20) NOT NULL,
  `id_jadwal` bigint(20) NOT NULL,
  `id_jasa` bigint(20) NOT NULL,
  `keterangan_hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_jadwal`, `id_jasa`, `keterangan_hasil`) VALUES
(4, 4, 1, 'kkk'),
(5, 7, 2, 'hhjk'),
(6, 8, 1, ''),
(7, 9, 1, 'lallalaal'),
(8, 12, 1, 'cek up 3 hari sekali');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` bigint(20) NOT NULL,
  `id_pasien` bigint(20) NOT NULL,
  `id_piket` bigint(20) NOT NULL,
  `id_layanan` bigint(20) NOT NULL,
  `id_jasa` bigint(20) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_pasien`, `id_piket`, `id_layanan`, `id_jasa`, `tanggal_daftar`) VALUES
(4, 19, 11, 1, 2, '2019-07-01'),
(7, 19, 11, 1, 1, '2019-07-17'),
(8, 20, 11, 1, 2, '2019-07-17'),
(9, 24, 11, 1, 1, '2019-07-17'),
(11, 19, 11, 1, 1, '2019-07-18'),
(12, 24, 11, 1, 1, '2019-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jasa_layanan`
--

CREATE TABLE `tb_jasa_layanan` (
  `id_layanan` bigint(20) NOT NULL,
  `nama_jasa` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jasa_layanan`
--

INSERT INTO `tb_jasa_layanan` (`id_layanan`, `nama_jasa`, `harga`, `kategori`) VALUES
(1, 'Cek Asam Urat', 20000, 1),
(2, 'Cek Gula Darah', 20000, 1),
(3, 'Cauter', 35000, 2),
(4, 'Dermaroller', 75000, 2),
(5, 'Cek Kolestrol', 25000, 1),
(6, 'HBM', 0, 1),
(7, 'Injeksi', 30000, 1),
(8, 'Injeksi Benodon', 30000, 1),
(9, 'Injeksi KB', 30000, 1),
(10, 'Test', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` bigint(20) NOT NULL,
  `nama_layanan` enum('UMUM','KECANTIKAN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `nama_layanan`) VALUES
(1, 'UMUM'),
(2, 'KECANTIKAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`) VALUES
(1, 'fadila', 'fc88df38a7262a0915586ca126a0b366'),
(2, 'fadila', 'fc88df38a7262a0915586ca126a0b366');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` bigint(20) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `kategori` enum('Obat','Krim') NOT NULL,
  `harga_obat` double NOT NULL,
  `keterangan_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `kategori`, `harga_obat`, `keterangan_obat`) VALUES
(24, 'AZ', 'Krim', 65000, 'krim'),
(25, 'BB Cream Solasense', 'Krim', 100000, 'krim'),
(26, 'Bedak Normal Skin', 'Krim', 45000, ''),
(27, 'Bedak Snowhite Oily', 'Krim', 45000, ''),
(28, 'Body Wash Soap', 'Krim', 65000, ''),
(29, 'CC Pink', 'Krim', 95000, ''),
(30, 'CC Putih', 'Krim', 95000, ''),
(31, 'CC Yellow', 'Krim', 95000, ''),
(32, 'Cream Bibir Kecil', 'Krim', 50000, ''),
(33, 'Cream Malam / M3', 'Krim', 55000, ''),
(34, 'Cream Malam / M3 AHA', 'Krim', 65000, ''),
(35, 'Cream Malam / M3 Hyco', 'Krim', 65000, ''),
(36, 'Cream Malam / M4', 'Krim', 60000, ''),
(37, 'Cream Malam / M5', 'Krim', 65000, ''),
(38, 'Cream Malam / M5LB', 'Krim', 70000, ''),
(39, 'Cream Peeling Besar', 'Krim', 90000, ''),
(40, 'DBI Cleanser Peeling', 'Krim', 100000, ''),
(41, 'DBI Tea Tree Oil', 'Krim', 35000, ''),
(42, 'DBI Wash Oily', 'Krim', 35000, ''),
(43, 'DBI White Series', 'Krim', 35000, ''),
(44, 'Facial Wash Acne', 'Krim', 45000, ''),
(45, 'Facial Wash Oil', 'Krim', 50000, ''),
(46, 'Facial Wash Whitening', 'Krim', 45000, ''),
(47, 'Handbody Kering Keriput', 'Krim', 45000, ''),
(48, 'Handbody Kering Keriput', 'Krim', 85000, ''),
(49, 'Handbody Malam', 'Krim', 145000, ''),
(50, 'Handbody Pagi', 'Krim', 85000, ''),
(51, 'IMM (Facial Scrub)', 'Krim', 85000, ''),
(52, 'Infused Whitening', 'Krim', 500000, ''),
(53, 'Krim Centa', 'Krim', 60000, ''),
(54, 'Krim Lipatan', 'Krim', 75000, ''),
(55, 'Krim Malam Coklat (M4/M5)', 'Krim', 55000, ''),
(56, 'Krim Mata', 'Krim', 60000, ''),
(57, 'Krim Mata Panda', 'Krim', 100000, ''),
(58, 'Krim Nigra', 'Krim', 130000, ''),
(59, 'Krim Super Glowing', 'Krim', 95000, ''),
(60, 'Lip Balm', 'Krim', 45000, ''),
(61, 'M5E', 'Krim', 40000, ''),
(62, 'Alofar 100 mg', 'Obat', 10000, ''),
(63, 'Alofar 300 mg', 'Obat', 10000, ''),
(65, 'Antidia', 'Obat', 10000, ''),
(66, 'Beneuron', 'Obat', 10000, ''),
(67, 'Benostan', 'Obat', 10000, ''),
(68, 'Biogastron', 'Obat', 10000, ''),
(69, 'Carbidu 0,5', 'Obat', 10000, ''),
(70, 'Carbidu 0,75', 'Obat', 10000, ''),
(71, 'Chromazol', 'Obat', 10000, ''),
(72, 'Dexclosan', 'Obat', 10000, ''),
(73, 'Dexycol', 'Obat', 0, ''),
(74, 'Dohixat', 'Obat', 10000, ''),
(75, 'Domperidon', 'Obat', 10000, ''),
(76, 'Elsiron', 'Obat', 10000, ''),
(77, 'Eryra Forte', 'Obat', 10000, ''),
(78, 'Fargoxin 0,25', 'Obat', 10000, ''),
(79, 'Farsorbid 5', 'Obat', 10000, ''),
(80, 'Fenaren', 'Obat', 10000, ''),
(81, 'Fitbon', 'Obat', 10000, ''),
(82, 'Flacoid', 'Obat', 15000, ''),
(83, 'Floxigra', 'Obat', 10000, ''),
(84, 'Forten 25', 'Obat', 0, ''),
(85, 'Forten 50', 'Obat', 0, ''),
(86, 'Furosemide', 'Obat', 10000, ''),
(87, 'Gored', 'Obat', 10000, ''),
(88, 'Grafachlor', 'Obat', 10000, ''),
(89, 'Grafadon', 'Krim', 10000, ''),
(90, 'Grafalin 4', 'Krim', 10000, ''),
(91, 'Grantusif', 'Krim', 10000, ''),
(92, 'Graxine', 'Krim', 10000, ''),
(93, 'Histigo', 'Krim', 10000, ''),
(94, 'Hufadine', 'Krim', 0, ''),
(95, 'Hufagripp Forte', 'Krim', 10000, ''),
(96, 'Hufaxicam', 'Krim', 10000, ''),
(97, 'Hufralgin', 'Krim', 10000, ''),
(98, 'Incitin', 'Krim', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` bigint(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email_pasien` varchar(100) NOT NULL,
  `kontak_pasien` varchar(15) NOT NULL,
  `alamat_pasien` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `golongan_darah` enum('A','B','O','AB') NOT NULL,
  `password_pasien` varchar(255) NOT NULL,
  `kode_verivikasi` varchar(6) NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `email_pasien`, `kontak_pasien`, `alamat_pasien`, `tanggal_lahir`, `golongan_darah`, `password_pasien`, `kode_verivikasi`, `qr_code`) VALUES
(19, 'A. Dalila', 'P', 'dalila@gmail.com', '082244731104', 'jl lowokdoro II/5', '0000-00-00', 'A', 'ab44b1d7834a54e1bfb9f20789dbe4d0', 'dalila', '1.png'),
(20, 'AMALIA', 'P', 'amalia@gmail.com', '08994546630', 'JL. MASJID BARAT NO. 181 SINGOSARI', '0000-00-00', 'A', '4e5e038025fc95fc75128c172c7149a7', 'amalia', '20.png'),
(21, 'Anggraini kushayati Harjanto', 'P', 'anggraini@gmail.com', '081230947977', 'malang', '1998-12-12', 'A', '07a7af79e06caf7153289574a97037ff', 'rini12', '21.png'),
(24, 'fadila setya', 'P', 'fadilsetya@gmail.com', '0812334462349', 'Malang', '2019-07-17', 'B', '56807b53a3cce60af7846ed7e7955053', 'fadila', '22.png'),
(25, 'Nabil', 'L', 'nabil@gmail.com', '0812334462349', 'Malang', '2019-07-18', 'B', 'nabil', 'nabil', '25.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` bigint(20) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_resep` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_piket`
--

CREATE TABLE `tb_piket` (
  `id_piket` bigint(20) NOT NULL,
  `id_dokter` bigint(20) NOT NULL,
  `hari` enum('senin','selasa','rabo','kamis','jumat') NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_piket`
--

INSERT INTO `tb_piket` (`id_piket`, `id_dokter`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(11, 3, 'senin', '08:00:00', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resep`
--

CREATE TABLE `tb_resep` (
  `id_resep` bigint(20) NOT NULL,
  `id_hasil` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resep`
--

INSERT INTO `tb_resep` (`id_resep`, `id_hasil`) VALUES
(4, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_detail_resep`
--
ALTER TABLE `tb_detail_resep`
  ADD PRIMARY KEY (`id_detail_resep`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_jasa` (`id_jasa`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_piket` (`id_piket`),
  ADD KEY `id_layanan` (`id_layanan`),
  ADD KEY `id_jasa` (`id_jasa`);

--
-- Indexes for table `tb_jasa_layanan`
--
ALTER TABLE `tb_jasa_layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_resep` (`id_resep`);

--
-- Indexes for table `tb_piket`
--
ALTER TABLE `tb_piket`
  ADD PRIMARY KEY (`id_piket`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_hasil` (`id_hasil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_detail_resep`
--
ALTER TABLE `tb_detail_resep`
  MODIFY `id_detail_resep` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_jasa_layanan`
--
ALTER TABLE `tb_jasa_layanan`
  MODIFY `id_layanan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id_obat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_piket`
--
ALTER TABLE `tb_piket`
  MODIFY `id_piket` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_resep`
--
ALTER TABLE `tb_resep`
  MODIFY `id_resep` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `tb_hasil_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`),
  ADD CONSTRAINT `tb_hasil_ibfk_2` FOREIGN KEY (`id_jasa`) REFERENCES `tb_jasa_layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_piket`) REFERENCES `tb_piket` (`id_piket`),
  ADD CONSTRAINT `tb_jadwal_ibfk_3` FOREIGN KEY (`id_layanan`) REFERENCES `tb_layanan` (`id_layanan`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_4` FOREIGN KEY (`id_jasa`) REFERENCES `tb_layanan` (`id_layanan`);

--
-- Constraints for table `tb_jasa_layanan`
--
ALTER TABLE `tb_jasa_layanan`
  ADD CONSTRAINT `tb_jasa_layanan_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `tb_layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_3` FOREIGN KEY (`id_resep`) REFERENCES `tb_resep` (`id_resep`);

--
-- Constraints for table `tb_piket`
--
ALTER TABLE `tb_piket`
  ADD CONSTRAINT `tb_piket_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`) ON DELETE CASCADE;

--
-- Constraints for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD CONSTRAINT `tb_resep_ibfk_1` FOREIGN KEY (`id_hasil`) REFERENCES `tb_hasil` (`id_hasil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
