-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2022 at 02:41 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

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
  `kecamatan_id` int(11) NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `periode` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id`, `nik`, `nama_alternatif`, `kit1`, `kit2`, `kit3`, `kit4`, `kit5`, `kit6`, `kit7`, `kit8`, `kit9`, `alamat`, `kecamatan_id`, `kelurahan_id`, `periode`) VALUES
(1, '432432423', 'sdrfsdfs', 2, 2, 2, 3, 3, 2, 1, 1, 2, 'fdsfsadf', 12, 49, 2021),
(2, '3402010002001869', 'SUSANTO                                                                                             ', 3, 1, 2, 2, 2, 1, 1, 1, 1, 'RT 002 SRANDAKAN                                                                                                                                                                                                                                               ', 1, 1, 2019),
(3, '3402010002003243', 'KOMARUDIN                                                                                           ', 1, 1, 2, 2, 2, 3, 2, 1, 1, 'RT 002 SRANDAKAN                                                                                                                                                                                                                                               ', 1, 1, 2019),
(4, '3402010002001109', 'SUTARJO                                                                                             ', 1, 1, 2, 1, 2, 3, 1, 2, 1, 'RT 005 BABAKAN                                                                                                                                                                                                                                                 ', 1, 2, 2019),
(5, '3402010002002990', 'SUBARDI SUDI SAMSURI                                                                                ', 1, 1, 2, 2, 1, 1, 1, 3, 2, 'BAYURAN                                                                                                                                                                                                                                                        ', 12, 51, 2019),
(6, '3402010002000207', 'SADI NURYANTO                                                                                       ', 1, 3, 3, 2, 1, 3, 1, 1, 2, 'BAYURAN                                                                                                                                                                                                                                                        ', 12, 51, 2019),
(7, '3402010002002861', 'PARTINEM                                                                                            ', 2, 1, 2, 2, 1, 3, 1, 1, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 51, 2019),
(8, '3402010002003778', 'NGADIRAN                                                                                            ', 3, 1, 2, 3, 1, 1, 3, 1, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 50, 2019),
(9, '3402010002003264', 'CIPTO WIYONO (TUKIJO)                                                                               ', 3, 1, 1, 2, 1, 3, 1, 1, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 50, 2019),
(10, '3402010002001587', 'PURWANTO                                                                                            ', 3, 1, 2, 2, 1, 1, 1, 1, 2, 'BIBIS                                                                                                                                                                                                                                                          ', 14, 60, 2019),
(11, '3402010002003753', 'WARJIMAN HADI SUDARNO                                                                               ', 3, 1, 2, 2, 1, 3, 1, 1, 2, 'BIBIS                                                                                                                                                                                                                                                          ', 14, 60, 2019),
(12, '3402010002001262', 'REVA ANGGRAENI                                                                                      ', 2, 3, 3, 2, 1, 3, 1, 2, 2, 'KALANGAN', 14, 63, 2019),
(13, '3402010002001593', 'MUJI RAHARJO                                                                                        ', 2, 1, 2, 2, 1, 3, 1, 1, 2, 'KALANGAN', 14, 63, 2019),
(14, '3402010002001944', 'NIKEN RETNANINGTYAS                                                                                 ', 2, 1, 2, 2, 1, 1, 1, 3, 3, 'BODOWALUH                                                                                                                                                                                                                                                      ', 4, 10, 2019),
(15, '3402010002000923', 'HADI WARDOYO / TAMAT                                                                                ', 2, 2, 2, 2, 2, 2, 1, 3, 3, 'BODOWALUH                                                                                                                                                                                                                                                      ', 4, 10, 2019),
(16, '3402010002002613', 'SUHARDI                                                                                             ', 2, 1, 2, 2, 1, 2, 2, 3, 3, 'RT 002 SRANDAKAN                                                                                                                                                                                                                                               ', 1, 1, 2020),
(17, '3402010002000539', 'UKARDI                                                                                              ', 2, 3, 3, 2, 1, 3, 2, 3, 1, 'RT 005 BABAKAN                                                                                                                                                                                                                                                 ', 1, 2, 2020),
(18, '3402010002003502', 'ARI WIBOWO                                                                                          ', 2, 1, 3, 2, 1, 1, 2, 3, 1, 'BAYURAN                                                                                                                                                                                                                                                        ', 12, 51, 2020),
(19, '3402010002002906', 'SRI MULYANTI                                                                                        ', 2, 2, 1, 2, 1, 1, 2, 1, 1, 'BAYURAN                                                                                                                                                                                                                                                        ', 12, 51, 2020),
(20, '3402010002002748', 'KUSNAWATI                                                                                           ', 2, 1, 3, 3, 1, 1, 1, 3, 1, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 51, 2020),
(21, '3402010002001250', 'UKARDI                                                                                              ', 2, 1, 2, 3, 1, 1, 1, 3, 1, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 50, 2020),
(22, '3402010002003244', 'SUMIRAH                                                                                             ', 2, 1, 3, 2, 1, 1, 1, 2, 3, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 50, 2020),
(23, '3402010002003777', 'ERWIN TRINUGROHO                                                                                    ', 2, 1, 1, 2, 1, 2, 3, 3, 3, 'BIBIS                                                                                                                                                                                                                                                          ', 14, 60, 2020),
(24, '3402010002000208', 'CIPTO WIYONO (TUKIJO)                                                                               ', 2, 3, 3, 2, 1, 3, 3, 3, 2, 'BIBIS                                                                                                                                                                                                                                                          ', 14, 60, 2020),
(25, '3402010002002769', 'SUDARSANA                                                                                           ', 2, 1, 1, 2, 1, 3, 1, 3, 2, 'KALANGAN', 14, 63, 2020),
(26, '3402010002003597', 'SARIJO SARJO SUMARTO                                                                                ', 2, 1, 1, 2, 1, 2, 1, 3, 3, 'BODOWALUH                                                                                                                                                                                                                                                      ', 4, 10, 2020),
(27, '3402010002002132', 'MUHARI                                                                                              ', 2, 1, 2, 2, 1, 1, 1, 3, 3, 'RT 002 SRANDAKAN                                                                                                                                                                                                                                               ', 1, 1, 2021),
(28, '3402010002000270', 'SARTONO HADI WIYANTO                                                                                ', 2, 1, 1, 2, 1, 3, 1, 3, 3, 'RT 002 SRANDAKAN                                                                                                                                                                                                                                               ', 1, 1, 2021),
(29, '3402010002003357', 'JUMADI                                                                                              ', 3, 1, 1, 2, 1, 2, 1, 3, 3, 'RT 005 BABAKAN                                                                                                                                                                                                                                                 ', 1, 2, 2021),
(30, '3402010002001589', 'SAMBIYO (WIDYO SUMARTO)                                                                             ', 3, 1, 1, 3, 1, 3, 1, 1, 3, 'BAYURAN                                                                                                                                                                                                                                                        ', 12, 51, 2021),
(31, '3402010001002671', 'BUDI WIYARJO                                                                                        ', 3, 1, 3, 3, 1, 3, 1, 1, 2, 'BAYURAN                                                                                                                                                                                                                                                        ', 12, 51, 2021),
(32, '3402010002002811', 'TRI RIYANTO                                                                                         ', 1, 1, 2, 1, 1, 1, 1, 1, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 51, 2021),
(33, '3402010002002991', 'EDI SUKONO                                                                                          ', 1, 1, 1, 3, 1, 1, 1, 2, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 50, 2021),
(34, '3402010002000436', 'DALIYO ( HARDI SUNARTO )                                                                            ', 1, 1, 1, 3, 2, 3, 1, 1, 2, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 50, 2021),
(35, '3402010002002770', 'SUGENG                                                                                              ', 3, 1, 2, 2, 2, 3, 1, 1, 3, 'BIBIS                                                                                                                                                                                                                                                          ', 14, 60, 2021),
(36, '3402010002000259', 'KADILAH                                                                                             ', 3, 1, 3, 2, 2, 3, 1, 1, 3, 'BIBIS                                                                                                                                                                                                                                                          ', 14, 60, 2021),
(37, '3402010002002361', 'SARJONO                                                                                             ', 2, 3, 3, 2, 1, 3, 1, 3, 3, 'KALANGAN', 14, 63, 2021),
(38, '3402010002000519', 'SADIYO BUDI WINARTO                                                                                 ', 2, 1, 3, 2, 1, 1, 1, 3, 3, 'KALANGAN', 14, 63, 2021),
(39, '3402010002003784', 'SUMARJO                                                                                             ', 2, 1, 2, 2, 1, 2, 1, 3, 3, 'BIBIS                                                                                                                                                                                                                                                          ', 4, 10, 2021),
(40, '3402010002003339', 'AGUS PURNAMA                                                                                        ', 2, 1, 3, 2, 1, 3, 1, 3, 3, 'BODOWALUH                                                                                                                                                                                                                                                      ', 4, 10, 2021),
(41, '3402010002000500', 'SARJONO                                                                                             ', 2, 1, 2, 1, 1, 2, 2, 3, 3, 'BODOWALUH                                                                                                                                                                                                                                                      ', 4, 10, 2021),
(42, '3402010002002396', 'RUBIYO ADI UTOMO                                                                                    ', 2, 1, 1, 2, 1, 1, 2, 3, 3, 'RT 002 SRANDAKAN                                                                                                                                                                                                                                               ', 1, 1, 2018),
(43, '3402010002000540', 'BAMBAN SANTOSO                                                                                      ', 2, 1, 2, 2, 1, 3, 2, 3, 3, 'RT 002 SRANDAKAN                                                                                                                                                                                                                                               ', 1, 1, 2018),
(44, '3402010002002189', 'SUDRAS EKYANTO                                                                                      ', 2, 1, 1, 2, 1, 3, 3, 3, 3, 'RT 005 BABAKAN                                                                                                                                                                                                                                                 ', 1, 2, 2018),
(45, '3402010002003781', 'ARI SUKATMOKO                                                                                       ', 2, 2, 1, 2, 1, 1, 2, 3, 3, 'BAYURAN                                                                                                                                                                                                                                                        ', 12, 51, 2018),
(46, '3402010002001705', 'GUNTUR BUDIMAN                                                                                      ', 2, 2, 3, 2, 1, 3, 2, 3, 3, 'BAYURAN                                                                                                                                                                                                                                                        ', 12, 51, 2018),
(47, '3402010002003783', 'GUNARDI WIYONO TUSIMIN                                                                              ', 2, 1, 2, 2, 1, 2, 2, 3, 3, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 51, 2018),
(48, '3402010002000427', 'YADI WIYONO (NY TUKIJAH )                                                                           ', 2, 1, 2, 2, 1, 3, 2, 3, 3, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 50, 2018),
(49, '3402010002002078', 'HERI SUGIARTO                                                                                       ', 2, 1, 1, 2, 1, 2, 1, 3, 3, 'BESOLE                                                                                                                                                                                                                                                         ', 12, 50, 2018),
(50, '3402010002003782', 'DWI PURWANTA                                                                                        ', 2, 1, 2, 2, 1, 1, 1, 3, 2, 'BIBIS                                                                                                                                                                                                                                                          ', 14, 60, 2018),
(51, '3402010002000511', 'GUNTUR BUDIMAN                                                                                      ', 2, 1, 2, 2, 1, 1, 1, 3, 3, 'BIBIS                                                                                                                                                                                                                                                          ', 14, 60, 2018),
(52, '3402010002003780', 'ANTONIUS JOKO SURYANTO                                                                              ', 2, 1, 1, 2, 1, 1, 1, 3, 3, 'KALANGAN', 14, 63, 2018),
(53, '3402010002003012', 'SUDIYO SISWO WIYARJO                                                                                ', 2, 1, 2, 2, 1, 3, 1, 3, 3, 'KALANGAN', 14, 63, 2018),
(54, '3402010002001616', 'INWAN SIHONO                                                                                        ', 2, 1, 2, 2, 1, 3, 1, 3, 1, 'BIBIS                                                                                                                                                                                                                                                          ', 4, 10, 2018),
(55, '3402010002002489', 'AJI ANGGARA                                                                                         ', 2, 1, 1, 2, 1, 1, 1, 3, 1, 'BODOWALUH                                                                                                                                                                                                                                                      ', 4, 10, 2018),
(56, '3402010002003786', 'DALIYO, AMD.                                                                                        ', 2, 1, 2, 2, 1, 1, 1, 3, 3, 'BODOWALUH                                                                                                                                                                                                                                                      ', 4, 10, 2018),
(57, '3402010002002177', 'JUMALI                                                                                              ', 2, 2, 1, 2, 1, 1, 1, 3, 3, 'BODOWALUH                                                                                                                                                                                                                                                      ', 4, 10, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id`, `nama`) VALUES
(1, 'Kecamatan Srandakan'),
(2, 'Kecamatan Sanden'),
(3, 'Kecamatan Pundong'),
(4, 'Kecamatan Bambanglipuro'),
(5, 'Kecamatan Pandak'),
(6, 'Kecamatan Bantul'),
(7, 'Kecamatan Imogiri'),
(8, 'Kecamatan Jetis'),
(9, 'Kecamatan Dlingo'),
(10, 'Kecamatan Pleret'),
(11, 'Kecamatan Piyungan'),
(12, 'Kecamatan Banguntapan'),
(13, 'Kecamatan Sewon'),
(14, 'Kecamatan Kasihan'),
(15, 'Kecamatan Pajangan'),
(16, 'Kecamatan Sedayu'),
(17, 'Kecamatan Kretek');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `id` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id`, `kecamatan_id`, `nama`) VALUES
(1, 1, 'Kelurahan Trimurti'),
(2, 1, 'Kelurahan Poncosari'),
(3, 2, 'Kelurahan Gadingsari'),
(4, 2, 'Kelurahan Gadingharjo'),
(5, 2, 'Kelurahan Murtigading'),
(6, 2, 'Kelurahan Srigading'),
(7, 3, 'Kelurahan Panjangrejo'),
(8, 3, 'Kelurahan Bangunharjo'),
(9, 3, 'Kelurahan Srihardono'),
(10, 4, 'Kelurahan Mulyodadi'),
(11, 4, 'Kelurahan Sidomulyo'),
(12, 4, 'Kelurahan Sumbermulyo'),
(13, 5, 'Kelurahan Caturharjo'),
(14, 5, 'Kelurahan Gilangharjo'),
(15, 5, 'Kelurahan Triharjo'),
(16, 5, 'Kelurahan Wijirejo'),
(17, 6, 'Kelurahan Bantul'),
(18, 6, 'Kelurahan Palbapang'),
(19, 6, 'Kelurahan Ringinharjo'),
(20, 6, 'Kelurahan Sabdodadi'),
(21, 6, 'Kelurahan Trirenggo'),
(22, 7, 'Kelurahan Girirejo'),
(23, 7, 'Kelurahan Imogiri'),
(24, 7, 'Kelurahan Karangtalun'),
(25, 7, 'Kelurahan Karangtengah'),
(26, 7, 'Kelurahan Kebonagung'),
(27, 7, 'Kelurahan Selopamioro'),
(28, 7, 'Kelurahan Sriharjo'),
(29, 7, 'Kelurahan Wukirsari'),
(30, 8, 'Kelurahan Canden'),
(31, 8, 'Kelurahan Patalan'),
(32, 8, 'Kelurahan Sumberagung'),
(33, 8, 'Kelurahan Trimulyo'),
(34, 9, 'Kelurahan Dlingo'),
(35, 9, 'Kelurahan Jatimulyo'),
(36, 9, 'Kelurahan Mangunan'),
(37, 9, 'Kelurahan Muntuk'),
(38, 9, 'Kelurahan Temuwuh'),
(39, 9, 'Kelurahan Terong'),
(40, 10, 'Kelurahan Bawuran'),
(41, 10, 'Kelurahan Pleret'),
(42, 10, 'Kelurahan Segoroyoso'),
(43, 10, 'Kelurahan Wonokromo'),
(44, 10, 'Kelurahan Wonolelo'),
(45, 11, 'Kelurahan Srimulyo'),
(46, 11, 'Kelurahan Sitimulyo'),
(47, 11, 'Kelurahan Srimartani'),
(48, 12, 'Kelurahan Banguntapan'),
(49, 12, 'Kelurahan Baturetno'),
(50, 12, 'Kelurahan Jagalan'),
(51, 12, 'Kelurahan Jambidan'),
(52, 12, 'Kelurahan Potorono'),
(53, 12, 'Kelurahan Singosaren'),
(54, 12, 'Kelurahan Tamanan'),
(55, 12, 'Kelurahan Wirokerten'),
(56, 13, 'Kelurahan Bangunharjo'),
(57, 13, 'Kelurahan Panggungharjo'),
(58, 13, 'Kelurahan Pendowoharjo'),
(59, 13, 'Kelurahan Timbulharjo'),
(60, 14, 'Kelurahan Bangunjiwo'),
(61, 14, 'Kelurahan Ngestiharjo'),
(62, 14, 'Kelurahan Tamantirto'),
(63, 14, 'Kelurahan Tirtonirmolo'),
(64, 15, 'Kelurahan Guwosari'),
(65, 15, 'Kelurahan Sendangsari'),
(66, 15, 'Kelurahan Triwidadi'),
(67, 16, 'Kelurahan Argodadi'),
(68, 16, 'Kelurahan Argorejo'),
(69, 16, 'Kelurahan Argosari'),
(70, 16, 'Kelurahan Argomulyo'),
(71, 17, 'Kelurahan Donotirto'),
(72, 17, 'Kelurahan Parangtritis'),
(73, 17, 'Kelurahan Tirtohargo'),
(74, 17, 'Kelurahan Tirtomulyo'),
(75, 17, 'Kelurahan Tirtosari');

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
(1, 'K1', 1),
(2, 'K2', 2),
(3, 'K3', 3),
(4, 'K4', 4),
(5, 'K5', 5),
(6, 'K6', 6),
(7, 'K7', 7),
(8, 'K8', 8),
(9, 'K9', 9);

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
(5, 'K5 - Fasilitas  BAB'),
(6, 'K6 - Bahan Bakar Masak'),
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
(1, 1, 3, 5, 7, 7, 7, 9, 9, 9, 3, 5, 5, 5, 7, 7, 9, 3, 3, 3, 5, 5, 7, 3, 3, 0, 5, 5, 7, 1, 3, 5, 5, 7, 3, 0, 3, 5, 3, 5, 3);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahan_id` (`kelurahan_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`) USING BTREE;

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`) USING BTREE;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

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
-- Constraints for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD CONSTRAINT `kecamatan_id` FOREIGN KEY (`kecamatan_id`) REFERENCES `tb_kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelurahan_id` FOREIGN KEY (`kelurahan_id`) REFERENCES `tb_kelurahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD CONSTRAINT `tb_kecamatan` FOREIGN KEY (`kecamatan_id`) REFERENCES `tb_kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
