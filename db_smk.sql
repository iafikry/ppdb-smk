-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 08:51 PM
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
('88199301123', 'kepsek', 'Obay Sobari, S.Pd., M.Pd.'),
('993000199388', 'admin1', 'admin 1');

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
('P01', 'Teknik Mekanik Industri (TMI)', 1),
('P02', 'Teknik Kendaraan Ringan Otomotif (TKRO)', 72),
('P03', 'Otomatisasi Tata & Kelola Perkantoran (OTKP)', 72),
('P04', 'Teknik Komputer Jaringan (TKJ)', 72),
('P05', 'Teknik Bisnis Sepeda Motor (TBSM)', 72),
('P06', 'Agribisnis Tanaman Pangan & Hortikultura (ATPH)', 72),
('P07', 'uniko', 11);

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

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`noRegis`, `tglRegis`, `TA`, `username`, `kdJurusan`, `nama`, `jnKelamin`, `nisn`, `tmLahir`, `tgLahir`, `agama`, `alamat`, `rt`, `rw`, `desa`, `pos`, `kecamatan`, `kab`, `prov`, `noTlp`, `asalSMP`, `thnLulusSMP`, `noPesertaUn`, `alamatSmp`, `pasFoto`, `fileIjazah`, `fileAkte`, `fileKK`, `fileTambahan`, `fileSKKB`, `fileSuketSehat`, `checkOrtu`, `statusApprove`, `tglApprove`, `approvedBy`) VALUES
(21916001, '2021-06-11 22:17:12', 2021, 'adi12', 'P01', 'hahahaha', 'L', 4234, 'sdqwd', '1998-04-16', 'khong hu chu', 'qwqdqwdwd', '22', '21', 'dqdqdwd', 23231, 'dadqdqwd', 'qwdqdqwd', 'dadqwqwd', '091028', 'asdqwdqwd', 2019, '12324', 'asdasdqwx', '415a4ef85a68792dde340f15862d041b.png', 'f8b32cb61afbf4ca2eb9c5b4bf8642be.pdf', '7b6c6b636e4dd35f7df4d760c17f53b6.pdf', 'f7dcdfb6db720c8243b84d8a592bbb0e.pdf', NULL, NULL, NULL, 'y', 'bt', NULL, NULL),
(21916002, '2021-06-11 22:40:11', 2021, 'user01', 'P07', 'etrtwfwf', 'P', 124124, 'dffwe', '1997-05-25', 'budha', 'rwergrgfgdfw', '44', '32', 'wewf', 67742, 'vvrwvrg', 'hjgkgk', 'jm,yuk', '224546211', 'heery', 2011, '4526246', 'ettrjtjbse', 'ea79a844e24cbf43a237352e870e2042.png', '0ffd8f68f8c96fed11616c3c62e3614c.pdf', '2be1fba4c100140e494e51ba60288ad7.pdf', '4017de22a633915e4c035313d1d95a19.pdf', NULL, NULL, NULL, 'y', 'bt', NULL, NULL);

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
-- Dumping data for table `tb_ortu`
--

INSERT INTO `tb_ortu` (`id`, `noRegis`, `namaAyah`, `namaIbu`, `namaWali`, `alamatOrtu`, `rtOrtu`, `rwOrtu`, `desaOrtu`, `posOrtu`, `kecamatanOrtu`, `kabOrtu`, `provOrtu`, `noTlpOrtu`) VALUES
(6, 21916001, 'qwqw', 'hrthrt', NULL, 'gghwtw34t3f3f', 44, 32, 'ergwsefwfo', 90283, 'vefjioefouuef', 'wtweewnowefg', 'eqwfedfvw', '12324324'),
(7, 21916002, 'eryhub', 'fhee5r', NULL, 't2w4trtertertfggrgerg', 55, 6, 'gfbdbet', 6754, 'fgsgfg', 'hjjrjt', 'rtrthrth', '2523577');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
