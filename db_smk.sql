-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 04:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_panitia`
--

CREATE TABLE `data_panitia` (
  `nip` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_panitia`
--

INSERT INTO `data_panitia` (`nip`, `username`, `nama`) VALUES
('1122334455', 'user00', 'superAdmin'),
('1233891399', 'admin', 'admin'),
('88199301123', 'kepsek', 'kepala sekolah'),
('993000199388', 'admin1', 'admin 1');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` text NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode`, `nama`, `kuota`) VALUES
(1, '', 'Teknik Mekanik Industri (TMI)', 0),
(2, '', 'Teknik Kendaraan Ringan Otomatif (TKRO)', 0),
(3, '', 'Otomatisasi Tata & Kelola Perkantoran (OTKP)', 0),
(4, '', 'Teknik Komputer Jaringan (TKJ)', 0),
(5, '', 'Teknik Bisnis Sepeda Motor (TBSM)', 0),
(6, '', 'Agribisnis Tanaman Pangan & Hortikultura (ATPH)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `role`) VALUES
('adi12', '12345', 'siswa'),
('admin', '123456', 'panitia'),
('admin1', '123456', 'panitia'),
('iafikry', '123456', 'siswa'),
('kepsek', '123456', 'kepsek'),
('rose555', '1234566', 'siswa'),
('user00', '1234566', 'panitia'),
('user01', '123456', 'siswa'),
('user02', '123456', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `noRegis` int(11) NOT NULL,
  `pengirim` varchar(15) NOT NULL,
  `waktuKirim` datetime NOT NULL,
  `message` varchar(256) DEFAULT NULL,
  `statusApprove` varchar(2) NOT NULL,
  `statusBaca` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `noRegis` int(11) NOT NULL,
  `tglRegis` datetime NOT NULL,
  `TA` int(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `jurusan` text NOT NULL,
  `nama` text NOT NULL,
  `jnKelamin` varchar(2) NOT NULL,
  `nisn` int(11) NOT NULL,
  `tmLahir` text NOT NULL,
  `tgLahir` date NOT NULL,
  `agama` text NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `desa` text NOT NULL,
  `pos` int(6) NOT NULL,
  `kecamatan` text NOT NULL,
  `kab` text NOT NULL,
  `prov` text NOT NULL,
  `noTlp` varchar(20) NOT NULL,
  `asalSMP` varchar(100) NOT NULL,
  `thnLulusSMP` int(11) NOT NULL,
  `noPesertaUn` varchar(25) NOT NULL,
  `alamatSmp` varchar(250) NOT NULL,
  `pasFoto` varchar(100) NOT NULL,
  `fileIjazah` varchar(100) NOT NULL,
  `fileAkte` varchar(100) NOT NULL,
  `fileKK` varchar(100) NOT NULL,
  `fileTambahan` varchar(100) DEFAULT NULL,
  `fileSKKB` varchar(100) DEFAULT NULL,
  `fileSuketSehat` varchar(100) DEFAULT NULL,
  `checkOrtu` varchar(3) NOT NULL,
  `statusApprove` varchar(3) NOT NULL,
  `tglApprove` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ortu`
--

CREATE TABLE `tb_ortu` (
  `id` int(11) NOT NULL,
  `noRegis` int(11) NOT NULL,
  `namaAyah` text NOT NULL,
  `namaIbu` text NOT NULL,
  `namaWali` text DEFAULT NULL,
  `alamatOrtu` varchar(250) NOT NULL,
  `rtOrtu` int(3) NOT NULL,
  `rwOrtu` int(3) NOT NULL,
  `desaOrtu` text NOT NULL,
  `posOrtu` int(6) NOT NULL,
  `kecamatanOrtu` text NOT NULL,
  `kabOrtu` text NOT NULL,
  `provOrtu` text NOT NULL,
  `noTlpOrtu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_panitia`
--
ALTER TABLE `data_panitia`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `fk_dp` (`username`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesan` (`noRegis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`noRegis`),
  ADD KEY `fk_uname` (`username`);

--
-- Indexes for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ortu_user` (`noRegis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_panitia`
--
ALTER TABLE `data_panitia`
  ADD CONSTRAINT `fk_dp` FOREIGN KEY (`username`) REFERENCES `pengguna` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `fk_pesan` FOREIGN KEY (`noRegis`) REFERENCES `siswa` (`noRegis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_uname` FOREIGN KEY (`username`) REFERENCES `pengguna` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD CONSTRAINT `fk_ortu_user` FOREIGN KEY (`noRegis`) REFERENCES `siswa` (`noRegis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
