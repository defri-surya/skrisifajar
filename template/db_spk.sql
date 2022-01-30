-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 02:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `kit1` int(11) NOT NULL,
  `kit2` int(11) NOT NULL,
  `kit3` int(11) NOT NULL,
  `kit4` int(11) NOT NULL,
  `kit5` int(11) NOT NULL,
  `kit6` int(11) NOT NULL,
  `kit7` int(11) NOT NULL,
  `kit8` int(11) NOT NULL,
  `kit9` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id`, `nik`, `nama_alternatif`, `kit1`, `kit2`, `kit3`, `kit4`, `kit5`, `kit6`, `kit7`, `kit8`, `kit9`, `alamat`, `kecamatan`, `kelurahan`, `periode`) VALUES
(1, '3402010001001383', 'IBNU ROCHMAN                                                                                        ', 1, 1, 1, 3, 0, 0, 2, 1, 2, 'BABAKAN RT 003                                                                                                                                                                                                                                                 ', 'Kasihan', 'Bangunjiwo', 2020),
(2, '3402010001001908', 'PARLAN                                                                                              ', 2, 1, 2, 3, 0, 0, 2, 1, 2, 'BABAKAN RT 004                                                                                                                                                                                                                                                 ', 'Kasihan', 'Bangunjiwo', 2021),
(3, '3402010001002929', 'SUMARYADI                                                                                           ', 2, 1, 1, 3, 0, 0, 2, 1, 2, 'BAYURAN                                                                                                                                                                                                                                                        ', 'Kasihan', 'Tirtonirmolo', 2021),
(4, '3402010001002931', 'JUMANI                                                                                              ', 1, 1, 1, 3, 0, 0, 2, 1, 2, 'BAYURAN                                                                                                                                                                                                                                                        ', 'Kasihan', 'Tirtonirmolo', 2020),
(5, '3402010001002935', 'SUYITNO HARJONO JASUM                                                                               ', 2, 1, 1, 3, 0, 0, 2, 1, 2, 'BAYURAN, PONCOSARI                                                                                                                                                                                                                                             ', 'Kasihan', 'Tirtonirmolo', 2020),
(6, '3402010001002993', 'EKO NURCAHYO                                                                                        ', 2, 1, 0, 3, 0, 0, 2, 1, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 'Banguntapan', 'Janti', 2021),
(7, '3402010001002778', 'SISWO HARJONO WALIBAN                                                                               ', 2, 1, 1, 3, 0, 0, 2, 1, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 'Banguntapan', 'Janti', 2021),
(8, '3402010001001412', 'APRI ANTORO HADI                                                                                    ', 2, 1, 1, 3, 0, 0, 2, 1, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 'Banguntapan', 'Pleret', 2019),
(9, '3402010001002995', 'HARJONO                                                                                             ', 2, 1, 1, 3, 0, 0, 2, 1, 2, 'BIBIS                                                                                                                                                                                                                                                          ', 'Banguntapan', 'Pleret', 2019),
(10, '3402010001002996', 'MUHAMMAD HARTANTO                                                                                   ', 2, 1, 1, 3, 0, 0, 2, 1, 2, 'BIBIS                                                                                                                                                                                                                                                          ', 'Banguntapan', 'Pleret', 2019),
(11, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(12, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(13, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(14, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(15, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(16, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(17, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(18, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(19, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(20, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(21, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(22, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(23, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(24, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(25, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(26, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(27, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(28, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(29, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(30, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(31, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(32, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(33, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(34, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(35, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(36, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(37, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(38, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(39, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(40, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(41, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(42, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(43, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(44, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(45, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(46, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(47, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(48, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(49, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000),
(50, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `id_namakriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kode`, `id_namakriteria`) VALUES
(5, 'K1', 1),
(7, 'K2', 2),
(9, 'K3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_namakriteria`
--

CREATE TABLE `tb_namakriteria` (
  `id_namakriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_namakriteria`
--

INSERT INTO `tb_namakriteria` (`id_namakriteria`, `nama_kriteria`) VALUES
(1, 'K1 - Kondisi Atap'),
(2, 'K2 - Kondisi Dinding'),
(3, 'K3 - Kondisi Lantai'),
(4, 'K4 - Sumber Air'),
(5, 'K5 - Bahan Bakar Masak'),
(6, 'K6 - Fasilitas BAB'),
(7, 'K7 - Kendaraan'),
(8, 'K8 - Hewan Ternak'),
(9, 'K9 - Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_namanilaik`
--

CREATE TABLE `tb_namanilaik` (
  `id_namanilaik` int(11) NOT NULL,
  `nama_nilaik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_namanilaik`
--

INSERT INTO `tb_namanilaik` (`id_namanilaik`, `nama_nilaik`) VALUES
(1, 'Sama Penting Dengan'),
(2, 'Mendekati Sedikit Lebih Penting dari'),
(3, 'Sedikit Lebih Penting dari'),
(4, 'Mendekati Lebih Penting dari'),
(5, 'Lebih Penting dari'),
(6, 'Mendekati Sangat Penting dari'),
(7, 'Sangat Penting dari'),
(8, 'Mendekati Mutlak dari'),
(9, 'Mutlak Sangat Penting');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilaikriteria`
--

CREATE TABLE `tb_nilaikriteria` (
  `id_nilaikri` int(11) NOT NULL,
  `id_namanilaik` int(11) DEFAULT NULL,
  `nilai_perbandingan` int(11) NOT NULL,
  `nilai_perbandingan2` float NOT NULL,
  `nilai_perbandingan3` float NOT NULL,
  `nilai_perbandingan4` float NOT NULL,
  `nilai_perbandingan5` float NOT NULL,
  `nilai_perbandingan6` float NOT NULL,
  `nilai_perbandingan7` float NOT NULL,
  `nilai_perbandingan8` float NOT NULL,
  `nilai_perbandingan9` float NOT NULL,
  `nilai_perbandingan10` float DEFAULT NULL,
  `nilai_perbandingan11` float DEFAULT NULL,
  `nilai_perbandingan12` float DEFAULT NULL,
  `nilai_perbandingan13` float DEFAULT NULL,
  `nilai_perbandingan14` float DEFAULT NULL,
  `nilai_perbandingan15` float DEFAULT NULL,
  `nilai_perbandingan16` float DEFAULT NULL,
  `nilai_perbandingan17` float DEFAULT NULL,
  `nilai_perbandingan18` float DEFAULT NULL,
  `nilai_perbandingan19` float DEFAULT NULL,
  `nilai_perbandingan20` float DEFAULT NULL,
  `nilai_perbandingan21` float DEFAULT NULL,
  `nilai_perbandingan22` float DEFAULT NULL,
  `nilai_perbandingan23` float DEFAULT NULL,
  `nilai_perbandingan24` float DEFAULT NULL,
  `nilai_perbandingan25` float DEFAULT NULL,
  `nilai_perbandingan26` float DEFAULT NULL,
  `nilai_perbandingan27` float DEFAULT NULL,
  `nilai_perbandingan28` float DEFAULT NULL,
  `nilai_perbandingan29` float DEFAULT NULL,
  `nilai_perbandingan30` float DEFAULT NULL,
  `nilai_perbandingan31` float DEFAULT NULL,
  `nilai_perbandingan32` float DEFAULT NULL,
  `nilai_perbandingan33` float DEFAULT NULL,
  `nilai_perbandingan34` float DEFAULT NULL,
  `nilai_perbandingan35` float DEFAULT NULL,
  `nilai_perbandingan36` float DEFAULT NULL,
  `nilai_perbandingan37` float DEFAULT NULL,
  `nilai_perbandingan38` float DEFAULT NULL,
  `nilai_perbandingan39` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilaikriteria`
--

INSERT INTO `tb_nilaikriteria` (`id_nilaikri`, `id_namanilaik`, `nilai_perbandingan`, `nilai_perbandingan2`, `nilai_perbandingan3`, `nilai_perbandingan4`, `nilai_perbandingan5`, `nilai_perbandingan6`, `nilai_perbandingan7`, `nilai_perbandingan8`, `nilai_perbandingan9`, `nilai_perbandingan10`, `nilai_perbandingan11`, `nilai_perbandingan12`, `nilai_perbandingan13`, `nilai_perbandingan14`, `nilai_perbandingan15`, `nilai_perbandingan16`, `nilai_perbandingan17`, `nilai_perbandingan18`, `nilai_perbandingan19`, `nilai_perbandingan20`, `nilai_perbandingan21`, `nilai_perbandingan22`, `nilai_perbandingan23`, `nilai_perbandingan24`, `nilai_perbandingan25`, `nilai_perbandingan26`, `nilai_perbandingan27`, `nilai_perbandingan28`, `nilai_perbandingan29`, `nilai_perbandingan30`, `nilai_perbandingan31`, `nilai_perbandingan32`, `nilai_perbandingan33`, `nilai_perbandingan34`, `nilai_perbandingan35`, `nilai_perbandingan36`, `nilai_perbandingan37`, `nilai_perbandingan38`, `nilai_perbandingan39`) VALUES
(1, 1, 3, 5, 7, 7, 7, 9, 9, 9, 3, 5, 5, 5, 7, 7, 9, 3, 3, 3, 5, 5, 7, 3, 3, 0, 5, 5, 5, 1, 3, 5, 5, 7, 3, 0, 3, 5, 3, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nip` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nip`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'rtlh', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD UNIQUE KEY `id_namakriteria` (`id_namakriteria`);

--
-- Indexes for table `tb_namakriteria`
--
ALTER TABLE `tb_namakriteria`
  ADD PRIMARY KEY (`id_namakriteria`);

--
-- Indexes for table `tb_namanilaik`
--
ALTER TABLE `tb_namanilaik`
  ADD PRIMARY KEY (`id_namanilaik`);

--
-- Indexes for table `tb_nilaikriteria`
--
ALTER TABLE `tb_nilaikriteria`
  ADD PRIMARY KEY (`id_nilaikri`),
  ADD UNIQUE KEY `id_namanilaik` (`id_namanilaik`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_namakriteria`
--
ALTER TABLE `tb_namakriteria`
  MODIFY `id_namakriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_namanilaik`
--
ALTER TABLE `tb_namanilaik`
  MODIFY `id_namanilaik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_nilaikriteria`
--
ALTER TABLE `tb_nilaikriteria`
  MODIFY `id_nilaikri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD CONSTRAINT `tb_kriteria_ibfk_1` FOREIGN KEY (`id_namakriteria`) REFERENCES `tb_namakriteria` (`id_namakriteria`);

--
-- Constraints for table `tb_nilaikriteria`
--
ALTER TABLE `tb_nilaikriteria`
  ADD CONSTRAINT `tb_nilaikriteria_ibfk_1` FOREIGN KEY (`id_namanilaik`) REFERENCES `tb_namanilaik` (`id_namanilaik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
