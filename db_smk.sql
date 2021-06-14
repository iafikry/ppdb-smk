-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:32 PM
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
  `panitia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_panitia`
--

INSERT INTO `data_panitia` (`nip`, `username`, `panitia`) VALUES
('1122334455', 'user00', 'superAdmin'),
('1233891399', 'admin', 'admin'),
('88199301123', 'kepsek', 'Obay Sobari, S.Pd., M.Pd.');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode` varchar(3) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kuota` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode`, `jurusan`, `kuota`) VALUES
('P01', 'Teknik Mekanik Industri (TMI)', 72),
('P02', 'Teknik Kendaraan Ringan Otomotif (TKRO)', 72),
('P03', 'Otomatisasi Tata & Kelola Perkantoran (OTKP)', 72),
('P04', 'Teknik Komputer Jaringan (TKJ)', 72),
('P05', 'Teknik Bisnis Sepeda Motor (TBSM)', 72),
('P06', 'Agribisnis Tanaman Pangan & Hortikultura (ATPH)', 72);

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
('admin', '123456', 'panitia'),
('kepsek', '123456', 'kepsek'),
('user00', '1234566', 'panitia');

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
  `kdJurusan` varchar(3) DEFAULT NULL,
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
  `tglApprove` datetime DEFAULT NULL,
  `approvedBy` varchar(25) DEFAULT NULL
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
  ADD PRIMARY KEY (`kode`);

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
  ADD KEY `fk_uname` (`username`),
  ADD KEY `fk_approvedBy` (`approvedBy`),
  ADD KEY `fk_kd_jurusan` (`kdJurusan`);

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
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `fk_approvedBy` FOREIGN KEY (`approvedBy`) REFERENCES `data_panitia` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kd_jurusan` FOREIGN KEY (`kdJurusan`) REFERENCES `jurusan` (`kode`) ON DELETE SET NULL ON UPDATE CASCADE,
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
