-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 06:44 PM
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
(1, 3, 19, 2, 10000),
(2, 4, 19, 2, 10000),
(3, 3, 19, 3, 15000),
(4, 1, 17, 2, 40000),
(5, 1, 19, 1, 5000),
(6, 2, 19, 1, 5000),
(7, 3, 18, 2, 10000),
(8, 3, 17, 1, 20000),
(9, 4, 17, 2, 40000),
(10, 4, 20, 1, 20000),
(11, 5, 18, 2, 10000),
(12, 5, 18, 1, 5000),
(13, 6, 17, 1, 20000),
(14, 6, 18, 2, 10000),
(15, 7, 17, 3, 60000),
(16, 7, 18, 2, 10000),
(17, 8, 19, 2, 10000),
(18, 8, 20, 1, 20000),
(19, 9, 19, 1, 5000),
(20, 10, 20, 1, 20000);

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
(5, 'rini', 'rini12@gmail.com', 'a38307cc9b86899868c280ad4e043086', 'rini12'),
(6, 'della', 'della@gmail.com', '66be74fbb3086ea7b774f393cd264671', 'della123'),
(7, 'Dr.Rahmat', 'drrahmat@gmail.com', 'af2a4c9d4c4956ec9d6ba62213eed568', 'rahmat');

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
(1, 4, 1, 'perawatan kulit wajah'),
(2, 7, 1, ''),
(3, 8, 2, ''),
(4, 8, 1, 'Asam Urat'),
(5, 5, 3, 'perawatan kulit wajah'),
(6, 7, 4, 'perawatan kulit wajah'),
(7, 11, 2, 'sakit perut'),
(8, 9, 4, 'perawatan kulit wajah');

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
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_pasien`, `id_piket`, `id_layanan`, `status_jadwal`, `tanggal_daftar`) VALUES
(4, 5, 1, 2, 'Sudah Ditangani', '0000-00-00'),
(5, 6, 7, 2, 'Sudah Ditangani', '0000-00-00'),
(6, 7, 1, 2, 'Sudah Ditangani', '2019-05-29'),
(7, 17, 2, 2, 'Sudah Ditangani', '0000-00-00'),
(8, 14, 1, 1, 'Sudah Ditangani', '0000-00-00'),
(9, 6, 7, 2, 'Sudah Ditangani', '2019-06-13'),
(10, 17, 7, 2, 'Belum Ditangani', '2019-06-13'),
(11, 10, 7, 1, 'Sudah Ditangani', '2019-06-13'),
(12, 17, 1, 1, 'Belum Ditangani', '2019-06-13'),
(13, 6, 1, 2, 'Belum Ditangani', '0000-00-00'),
(14, 17, 1, 2, 'Belum Ditangani', '2019-06-18');

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
(9, 'Injeksi KB', 30000, 1);

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
(17, 'fatigon', 'Strip', 10, 'Kapsul', 20000, 'obat'),
(18, 'betadine', 'Botol', 100, 'ML', 5000, 'obat'),
(19, 'cream malem', 'Tube', 10, 'ML', 5000, 'vitamin'),
(20, 'Amoxilin1', 'Strip', 10, 'Kapsul', 20000, 'antibiotik');

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
(5, 'rini12', 'P', 'anggraini@gmail.com', '01823981238', 'Sukun', '1998-12-12', 'A', '', 'ya123', '5.png'),
(6, 'della', 'L', 'della@gmail.com', '09876543', 'Sukun', '2019-05-05', 'AB', '', '123ab', '6.png'),
(7, 'amel', 'L', 'amel@gmail.com', '081315777', 'JOMBANG', '2019-06-05', 'A', '', 'amel12', '7.png'),
(8, 'rini', 'L', 'anggraini@gmail.com', '01823981238', 'Yaaaa', '1996-05-13', 'A', '', 'amel12', '8.png'),
(9, 'alya', 'L', 'alya@gmail.com', '098765432', 'nsbcljwlic', '2019-03-08', 'AB', '', 'ya123', '9.png'),
(10, 'Anggraini kushayati Harjanto', 'P', 'anggraini@gmail.com', '01823981238', 'Sukun', '2000-06-14', 'A', '821cc4f42a28a476b456b0869d1429eb', 'ya123', '10.png'),
(13, 'ahayy', 'L', 'ahayy@gmail.com', '082193123', 'Jl. pondok Bestari Indah', '2019-05-27', 'O', 'ahayy', 'ahayy', '13.png'),
(14, 'fauzi', 'L', 'fauzi@gmail.com', '0987654321', 'Sidoarjo', '1997-06-20', 'A', '', 'fauzi1', '14.png'),
(15, 'safira', 'P', 'safira@gmail.com', '3456789898', 'Lamongan', '1996-09-07', 'AB', '', 'safira', '15.png'),
(16, 'naili', 'P', 'naili@gmail.com', '56789876543', 'Kepanjen', '1998-07-05', 'B', '', 'naili1', '16.png'),
(17, 'dini', 'P', 'dini@gmail.com', '987654323', 'Turen', '1999-07-31', 'A', 'ed0c216375d7785b0d83d9b21aa5aa3b', 'dini12', '17.png'),
(18, 'verlia', 'P', 'verlia@gmail.com', '654234567', 'Malang', '1999-07-05', 'AB', '', 'verlia', '18.png'),
(19, '', 'L', '', '', '', '0000-00-00', '', '', '', '19.png');

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

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `tanggal_penjualan`, `total_harga`, `id_resep`) VALUES
(1, '2019-05-28', 45000, 1),
(2, '2019-06-13', 30000, 8),
(3, '2019-06-13', 30000, 6),
(4, '2019-06-13', 5000, 9),
(5, '2019-06-13', 20000, 10);

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
(5, 5, 'senin', '08:00:00', '09:00:00'),
(6, 5, 'selasa', '00:00:08', '00:00:09'),
(7, 3, 'senin', '15:11:00', '12:31:00'),
(8, 3, 'senin', '00:00:00', '01:00:00'),
(9, 3, 'kamis', '08:00:00', '10:00:00');

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
(1, 1),
(6, 3),
(8, 5),
(9, 6),
(10, 7);

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
  ADD KEY `id_layanan` (`id_layanan`);

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
  MODIFY `id_detail_resep` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id_jadwal` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_jasa_layanan`
--
ALTER TABLE `tb_jasa_layanan`
  MODIFY `id_layanan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id_obat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_piket`
--
ALTER TABLE `tb_piket`
  MODIFY `id_piket` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_resep`
--
ALTER TABLE `tb_resep`
  MODIFY `id_resep` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `tb_jadwal_ibfk_3` FOREIGN KEY (`id_layanan`) REFERENCES `tb_layanan` (`id_layanan`) ON DELETE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
