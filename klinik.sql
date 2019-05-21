-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 11:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(26, 1, 16, 2, 8000),
(27, 1, 16, 3, 12000);

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
(3, 'Dr.Lia', 'Liadamayati123@gmail.com', 'a1fb7f01ffe3fc76e0b997be59ae212f', 'drlia123'),
(5, 'rini', 'rini12@gmail.com', 'a38307cc9b86899868c280ad4e043086', 'rini12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` bigint(20) NOT NULL,
  `id_jadwal` bigint(20) NOT NULL,
  `keterangan_hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_jadwal`, `keterangan_hasil`) VALUES
(1, 1, 'sakit perut');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` bigint(20) NOT NULL,
  `id_pasien` bigint(20) NOT NULL,
  `id_piket` bigint(20) NOT NULL,
  `id_layanan` bigint(20) NOT NULL,
  `status_jadwal` enum('Belum Ditangani','Sudah Ditangani') NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `tanggal_ditangani` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_pasien`, `id_piket`, `id_layanan`, `status_jadwal`, `tanggal_daftar`, `tanggal_ditangani`) VALUES
(1, 5, 1, 1, 'Sudah Ditangani', '2019-05-19', '2019-05-19');

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
  `bentuk` enum('Botol','Strip','Tube') NOT NULL,
  `ukuran` int(11) NOT NULL,
  `satuan` enum('ML','Tablet','Kapsul','Kaplet') NOT NULL,
  `harga_obat` double NOT NULL,
  `keterangan_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `bentuk`, `ukuran`, `satuan`, `harga_obat`, `keterangan_obat`) VALUES
(16, 'betadine', 'Botol', 0, '', 4000, 'obat');

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
  `password_pasien` varchar(32) NOT NULL,
  `kode_verivikasi` varchar(6) NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `email_pasien`, `kontak_pasien`, `alamat_pasien`, `tanggal_lahir`, `golongan_darah`, `password_pasien`, `kode_verivikasi`, `qr_code`) VALUES
(5, 'rini12', 'P', 'anggraini@gmail.com', '01823981238', 'Sukun', '1998-12-12', 'A', '', 'ya123', '5.png'),
(6, 'della', 'L', 'della@gmail.com', '09876543', 'Sukun', '2019-05-05', 'AB', '', '123ab', '6.png'),
(7, 'amel', 'L', 'amel@gmail.com', '081315777', 'JOMBANG', '2019-06-05', 'A', '', 'amel12', '7.png'),
(8, 'oooo', 'L', 'anggraini@gmail.com', '01823981238', 'Yaaaa', '1996-05-13', 'A', '', 'amel12', '8.png'),
(9, 'alya', 'L', 'alya@gmail.com', '098765432', 'nsbcljwlic', '2019-03-08', 'AB', '', 'ya123', '9.png'),
(10, 'sasdasd', 'L', 'anggraini@gmail.com', '01823981238', 'Sukun', '2000-06-14', 'A', '', 'ya123', '10.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` bigint(20) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `jumlah_pembelian` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_obat` bigint(20) NOT NULL,
  `id_pasien` bigint(20) NOT NULL,
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
(1, 3, 'selasa', '00:00:00', '08:30:00'),
(2, 3, 'senin', '00:00:00', '00:00:33'),
(5, 5, 'senin', '08:00:00', '09:00:00');

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
(1, 1);

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
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_piket` (`id_piket`),
  ADD KEY `id_layanan` (`id_layanan`);

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
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_pasien` (`id_pasien`),
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
  MODIFY `id_detail_resep` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `id_hasil` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_obat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_piket`
--
ALTER TABLE `tb_piket`
  MODIFY `id_piket` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_resep`
--
ALTER TABLE `tb_resep`
  MODIFY `id_resep` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `tb_hasil_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`);

--
-- Constraints for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_piket`) REFERENCES `tb_piket` (`id_piket`),
  ADD CONSTRAINT `tb_jadwal_ibfk_3` FOREIGN KEY (`id_layanan`) REFERENCES `tb_layanan` (`id_layanan`) ON DELETE CASCADE;

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`),
  ADD CONSTRAINT `tb_penjualan_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
