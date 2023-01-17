-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 10:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `md_bagian`
--

CREATE TABLE `md_bagian` (
  `idmd_bagian` int(11) NOT NULL,
  `kodebagian` varchar(100) DEFAULT NULL,
  `namabagian` varchar(100) DEFAULT NULL,
  `idmd_bidang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `md_bidang`
--

CREATE TABLE `md_bidang` (
  `idmd_bidang` int(11) NOT NULL,
  `kodebidang` varchar(100) DEFAULT NULL,
  `namabidang` varchar(100) DEFAULT NULL,
  `idmd_organisasi` int(11) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `md_bidang`
--

INSERT INTO `md_bidang` (`idmd_bidang`, `kodebidang`, `namabidang`, `idmd_organisasi`, `deleted`) VALUES
(1, 'BEJ', 'BIRO ENJINIRING', 7, 0),
(2, NULL, 'BIRO HUKUM', 9, 0),
(3, NULL, 'BAGIAN ORGANISASI & TATA LAKSANA', 8, 0),
(4, NULL, 'BIDANG PENGEMBANGAN ORGANISASI & SDM', 8, 0),
(5, NULL, 'BAGIAN PELATIHAN & ASESMEN', 8, 0),
(6, NULL, 'BIDANG PERSONALIA & HUBUNGAN INDUSTRIAL', 8, 0),
(7, NULL, 'BIRO HUMAN CAPITAL', 8, 0),
(8, NULL, 'BAGIAN REMUNERASI & PELAYANAN PERSONIL', 8, 0),
(9, NULL, 'BIRO KEUANGAN & AKUNTANSI', 10, 0),
(10, NULL, 'BIDANG AKUNTANSI & PERPAJAKAN', 10, 0),
(11, NULL, 'BIDANG RESTRUKTURISASI', 10, 0),
(12, NULL, 'BIDANG KEUANGAN', 10, 0),
(13, NULL, 'BIDANG KEUANGAN ', 10, 0),
(14, NULL, 'BAGIAN ANGGARAN & PENDANAAN', 10, 0),
(15, NULL, 'BAGIAN EVALUASI PELAPORAN', 10, 0),
(16, NULL, 'BAGIAN PERBENDAHARAAN', 10, 0),
(17, NULL, 'BAGIAN PERPAJAKAN', 10, 0),
(18, NULL, 'BIDANG PENGELOLAAN SISTEM SUPPLY CHAIN & ADMINISTRASI KONTRAK', 12, 0),
(19, NULL, 'BIDANG PERENCANAAN SUPPLY CHAIN', 12, 0),
(20, NULL, 'BAGIAN ADMINISTRASI PEMBELIAN', 12, 0),
(21, NULL, 'BIRO MANAJEMEN SUPPLY CHAIN', 12, 0),
(22, NULL, 'BAGIAN ADMINISTRASI & VERIFIKASI', 12, 0),
(23, NULL, 'BAGIAN LOGISTIK', 12, 0),
(24, NULL, 'BAGIAN RISET PRODUK', 11, 0),
(25, 'BPU', 'BIRO PENGEMBANGAN USAHA', 11, 0),
(26, NULL, 'BIDANG PERENCANAAN KORPORASI', 11, 0),
(27, NULL, 'BIDANG KERJASAMA USAHA', 11, 0),
(28, NULL, 'BAGIAN QUALITY ASSURANCE', 13, 0),
(29, 'BPS', 'BIDANG PENGEMBANGAN SISTEM', 13, 0),
(30, NULL, 'BIRO SISTEM, MUTU & K3LH', 13, 0),
(31, 'BST', 'BAGIAN SISTEM TIK / SAP', 13, 0),
(32, 'SHE', 'BIDANG SHE', 13, 0),
(33, NULL, 'DIREKTORAT PEMASARAN', 4, 0),
(34, NULL, 'BIDANG OPERASI', 15, 0),
(35, NULL, 'BIDANG KEUANGAN & SDM', 15, 0),
(36, NULL, 'BIDANG PEMASARAN', 15, 0),
(37, NULL, 'BAGIAN ADMINISTRASI PENJUALAN', 15, 0),
(38, NULL, 'BAGIAN ADMINISTRASI KEUANGAN', 14, 0),
(39, NULL, 'BAGIAN GUDANG', 14, 0),
(40, NULL, 'BAGIAN INVENTORI', 14, 0),
(41, NULL, 'BAGIAN PENGENDALIAN MATERIAL & PRODUKSI', 14, 0),
(42, NULL, 'BAGIAN PERAWATAN & PERBAIKAN', 14, 0),
(43, NULL, 'BAGIAN PERBAIKAN', 14, 0),
(44, NULL, 'BAGIAN PERENCANAAN MATERIAL & PRODUKSI', 14, 0),
(45, NULL, 'BAGIAN PERENCANAAN PEMELIHARAAN', 14, 0),
(46, NULL, 'BAGIAN PERENCANAAN PRODUKSI & EVALUASI', 14, 0),
(47, NULL, 'BAGIAN SUPPLY CHAIN', 14, 0),
(48, NULL, 'BAGIAN TECHNICAL ADVISOR', 14, 0),
(49, NULL, 'BAGIAN TEKNIK', 14, 0),
(50, NULL, 'BIDANG AUDIT KEUANGAN', 14, 0),
(51, NULL, 'BIDANG KEUANGAN & SDM', 14, 0),
(52, NULL, 'BIDANG OPERASI', 14, 0),
(53, NULL, 'BIDANG PEMASARAN', 14, 0),
(54, NULL, 'BIDANG PEMELIHARAAN & PERBAIKAN', 14, 0),
(55, NULL, 'BIDANG PPP & INVENTORI', 14, 0),
(56, NULL, 'DIVISI INDUSTRI KOMPONEN & PERMESINAN', 14, 0),
(57, 'SHE', 'UNIT QSHE', 14, 0),
(58, NULL, 'BIDANG OPERASI', 16, 0),
(59, NULL, 'BIDANG PEMASARAN', 16, 0),
(60, NULL, 'BAGIAN ADMINISTRASI & KEUANGAN', 18, 0),
(61, NULL, 'BAGIAN ESTIMATOR', 18, 0),
(62, NULL, 'BAGIAN GUDANG', 18, 0),
(63, NULL, 'BAGIAN KAWASAN BERIKAT', 18, 0),
(64, NULL, 'BAGIAN PEMELIHARAAN & PERBAIKAN', 18, 0),
(65, NULL, 'BAGIAN PENGADAAN', 18, 0),
(66, NULL, 'BAGIAN PENGIRIMAN LOGISTIK', 18, 0),
(67, NULL, 'BAGIAN PERENCANAAN & PENGENDALIAN PRODUKSI', 18, 0),
(68, NULL, 'BAGIAN PERENCANAAN MATERIAL', 18, 0),
(69, NULL, 'BAGIAN PERENCANAAN PRODUKSI & EVALUASI', 18, 0),
(70, NULL, 'BAGIAN PERSONALIA & UMUM', 18, 0),
(71, NULL, 'BAGIAN TEKNIK', 18, 0),
(72, NULL, 'BAGIAN TEKNOLOGI PENGELASAN & PEMELIHARAAN', 18, 0),
(73, NULL, 'BIDANG KEUANGAN & SDM', 18, 0),
(74, NULL, 'BIDANG OPERASI', 18, 0),
(75, NULL, 'BIDANG PEMASARAN', 18, 0),
(76, NULL, 'BIDANG PPP & INVENTORI', 18, 0),
(77, NULL, 'DIVISI PEMBANGKIT', 18, 0),
(78, 'SHE', 'UNIT QSHE', 18, 0),
(79, NULL, 'BAGIAN ADMINISTRASI KEUANGAN', 17, 0),
(80, NULL, 'BAGIAN PEMELIHARAAN & PERBAIKAN', 17, 0),
(81, NULL, 'BAGIAN PERENCANAAN MATERIAL & PRODUKSI', 17, 0),
(82, NULL, 'BAGIAN PERSONALIA & UMUM', 17, 0),
(83, NULL, 'BAGIAN TECHNICAL ADVISOR', 17, 0),
(84, NULL, 'BAGIAN TEKNIK', 17, 0),
(85, NULL, 'BIDANG KEUANGAN & SDM', 17, 0),
(86, NULL, 'BIDANG PEMASARAN', 17, 0),
(87, NULL, 'BIDANG PPP & INVENTORI', 17, 0),
(88, NULL, 'DIVISI SUMBER DAYA AIR', 17, 0),
(89, 'SHE', 'UNIT QSHE', 17, 0),
(90, NULL, 'BAGIAN PRODUKSI', 21, 0),
(91, NULL, 'PABRIK HIDROMEKANIKAL TEGAL', 21, 0),
(92, NULL, 'UNIT PENGENDALIAN KUALITAS', 21, 0),
(93, NULL, 'BAGIAN PRODUKSI FABRIKASI', 22, 0),
(94, NULL, 'BAGIAN PRODUKSI KOMPONEN', 22, 0),
(95, NULL, 'BAGIAN PRODUKSI PABRIKASI', 22, 0),
(96, NULL, 'BAGIAN PRODUKSI PERMESINAN', 22, 0),
(97, NULL, 'PRODUKSI FABRIKASI', 22, 0),
(98, NULL, 'PRODUKSI KOMPONEN', 22, 0),
(99, NULL, 'UNIT PENGENDALIAN KUALITAS', 22, 0),
(100, NULL, 'BAGIAN KEUANGAN & UMUM', 23, 0),
(101, NULL, 'BAGIAN PPP & INVENTORI', 23, 0),
(102, NULL, 'BAGIAN PRODUKSI', 23, 0),
(103, NULL, 'UNIT PENGENDALIAN KUALITAS', 23, 0),
(104, NULL, 'BAGIAN PRODUKSI 1', 19, 0),
(105, NULL, 'BAGIAN PRODUKSI PENGECORAN 1', 19, 0),
(106, NULL, 'PABRIK PENGECORAN', 19, 0),
(107, NULL, 'UNIT PENGENDALIAN KUALITAS', 19, 0),
(108, NULL, 'BAGIAN PRODUKSI 2', 19, 0),
(109, NULL, 'BAGIAN PRODUKSI PENGECORAN 2', 19, 0),
(110, NULL, 'BAGIAN PRODUKSI 1', 20, 0),
(111, NULL, 'BAGIAN PRODUKSI 2', 20, 0),
(112, NULL, 'BAGIAN PRODUKSI 3', 20, 0),
(113, NULL, 'BAGIAN PRODUKSI 4', 20, 0),
(114, NULL, 'BAGIAN PRODUKSI PABRIK PERALATAN INDUSTRI 1', 20, 0),
(115, NULL, 'BAGIAN PRODUKSI PABRIK PERALATAN INDUSTRI 2', 20, 0),
(116, NULL, 'PABRIK PERALATAN INDUSTRI', 20, 0),
(117, NULL, 'UNIT PENGENDALIAN KUALITAS', 20, 0),
(118, NULL, 'BAGIAN PRODUKSI PRECISION & HEAVY MACHINERY', 24, 0),
(119, NULL, 'BAGIAN PRODUKSI 5', 24, 0),
(120, NULL, 'PABRIK PRECISION & HEAVY MACHINERY', 24, 0),
(121, NULL, 'UNIT PENGENDALIAN KUALITAS', 24, 0),
(122, NULL, 'BIDANG KEPATUHAN & MANAJEMEN RISIKO', 6, 0),
(123, NULL, 'SATUAN PENGAWASAN INTERN', 6, 0),
(124, NULL, 'BIDANG AUDIT KEUANGAN', 6, 0),
(125, NULL, 'BAGIAN KESEKRETARIATAN', 5, 0),
(126, NULL, 'BAGIAN MEDIA RALATION & PKBL', 5, 0),
(127, NULL, 'BAGIAN UMUM & KAWASAN', 5, 0),
(128, NULL, 'BIDANG KOMUNIKASI KORPORAT', 5, 0),
(129, NULL, 'BIDANG PENGELOLAAN ASET', 5, 0),
(130, NULL, 'BIDANG UMUM & KESEKRETARIATAN', 5, 0),
(131, NULL, 'SEKRETARIAT PERUSAHAAN', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `md_grade`
--

CREATE TABLE `md_grade` (
  `idmd_grade` int(11) NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `gajipokok` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `md_grade`
--

INSERT INTO `md_grade` (`idmd_grade`, `grade`, `gajipokok`) VALUES
(1, 1, '4500000'),
(2, 2, '4900000'),
(3, 3, '5900000'),
(4, 4, '6900000'),
(5, 5, '7900000'),
(6, 6, '8900000'),
(7, 7, '9900000'),
(8, 8, '10900000'),
(9, 9, '11900000'),
(10, 10, '13000000'),
(11, 11, '14000000'),
(12, 12, '15000000');

-- --------------------------------------------------------

--
-- Table structure for table `md_jabatan`
--

CREATE TABLE `md_jabatan` (
  `idmd_jabatan` int(11) NOT NULL,
  `kodejabatan` varchar(150) NOT NULL,
  `namajabatan` varchar(100) DEFAULT NULL,
  `idmd_bidang` int(11) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `standard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `md_jabatan`
--

INSERT INTO `md_jabatan` (`idmd_jabatan`, `kodejabatan`, `namajabatan`, `idmd_bidang`, `deleted`, `standard`) VALUES
(2, 'SF', 'Staf Bagian Sistem TIK/SAP', 29, 0, 2),
(4, 'SF', 'Staf Bagian Quality Assurance', 32, 0, 3),
(7, 'PL', 'Pelaksana Administrasi Bagian Sistem TIK / SAP', 31, 0, 1),
(8, 'PL', 'Pelaksana Administrasi Bagian Quality Assurance', 29, 0, 1),
(9, 'SF', 'Officer Bidang SHE', 32, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `md_karyawan`
--

CREATE TABLE `md_karyawan` (
  `npk` int(11) NOT NULL,
  `idmd_marital` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jeniskelamin` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `alamatsekarang` varchar(200) DEFAULT NULL,
  `nohp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mulaibekerja` date DEFAULT NULL,
  `tgldiangkat` date DEFAULT NULL,
  `file_foto` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `md_karyawan`
--

INSERT INTO `md_karyawan` (`npk`, `idmd_marital`, `nama`, `tempatlahir`, `tgllahir`, `jeniskelamin`, `agama`, `nik`, `alamatsekarang`, `nohp`, `email`, `mulaibekerja`, `tgldiangkat`, `file_foto`) VALUES
(65, '', 'Siti', '', '2022-12-01', '', '', '', '', '', '', '2022-03-03', '0000-00-00', 'default.jpg'),
(123, '', 'Diah', 'Surabaya', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(865, '', 'Ipank', 'Surabaya', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(1234, 'BS', 'Prima Yusuf Budiarto', 'Banyuwangi', '1998-03-03', 'LK', 'BUDHA', '12312312321312', 'Dusun SumberGroto Rt 05 Rw 02  Desa Rejoagung Kecamatan Srono Kabupaten Banyuwangi', '123123123123', 'prima@barata.id', '2010-11-06', '2022-11-02', 'default.jpg'),
(2681, 'BK', 'Dodi Setiawan', 'Gresik', '2022-12-01', 'LK', 'ISLAM', '123', 'Dusun SumberGroto Rt 05 Rw 02  Desa Rejoagung Kecamatan Srono Kabupaten Banyuwangi', '083830158599', 'dodisetiawan.ti9.poliwangi@gmail.com', '2022-12-01', '2022-12-01', 'e01037f3eb7984c62057d23def704f39.JPG'),
(3678, '', 'Sigit', 'Jakarta', '0000-00-00', 'PR', 'KATOLIK', '', '', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(4543, 'BS', 'Arighi Pramudya T', 'Jakartas', '0000-00-00', 'LK', 'ISLAM', '32476734723', 'Jl Surabaya', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(5656, '', 'Siti', 'Jombang', '0000-00-00', '', '', '', '', '', '', '2022-12-01', '2022-12-02', 'default.jpg'),
(23423, '', 'Siti Mujiana', 'Gresik', '0000-00-00', 'LK', '', '', '', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(123456, 'BK', 'Siti Maimunah', 'Banyuwangi', '2022-12-01', 'PR', 'BUDHA', '2323', 'Jl Seminnyak 2020', '', 'sitimaimunah@barata.id', '0000-00-00', '0000-00-00', 'default.jpg'),
(213213, 'BK', 'Anang Harianto', 'Surabaya', '0000-00-00', 'LK', 'ISLAM', '23484746464', 'Jl Gresik', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(345342, 'K', 'Albertus Randi', 'Jakarta', '1991-03-11', 'LK', 'HINDU', '3510081103980005', 'Jl Veteran no 256', '086767564', 'albert@barata.id', '2019-01-02', '2018-01-03', 'default.jpg'),
(435234, 'TK', 'Tulus', 'Gresik', '2023-01-02', 'LK', 'HINDU', '', '', '', '', '2023-01-01', '2023-01-04', 'default.jpg'),
(435345, '', 'Ferdi', 'Siti', '2001-11-20', 'PR', 'ISLAM', '', '', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(815520, 'BS', 'Sumarno', 'Surabaya', '1998-03-11', 'LK', 'KRISTEN', '35434545345343', 'Jl Veteran No 256 Surabaya', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(4535345, '', 'Taufan Yudistira', 'Gresik', '2020-10-21', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(5235235, 'BK', 'Raisa', 'Dunia', '0000-00-00', 'LK', 'KRISTEN', '', '', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(35153535, '', 'Testing', 'Surabaya', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'default.jpg'),
(98742323, 'TK', 'Ali Budimansyah', 'Banyuwangi', '2022-12-13', 'LK', 'HINDU', '234234', 'Dusun SumberGroto Rt 05 Rw 02  Desa Rejoagung Kecamatan Srono Kabupaten Banyuwangi', '067435345345', 'dodisetiawan.ti9.poliwangi@gmail.com', '2022-12-08', '2022-12-06', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `md_level`
--

CREATE TABLE `md_level` (
  `idmd_level` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `namalevel` varchar(150) DEFAULT NULL,
  `mappingso` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `md_level`
--

INSERT INTO `md_level` (`idmd_level`, `level`, `namalevel`, `mappingso`) VALUES
(1, 0, 'Direktorat', 'Direktorat'),
(2, 1, 'General Manager / Sekretaris Perusahaan / Kepala SPI', 'Organisasi'),
(3, 2, 'Senior Manager / Senior Auditor / Senior Coorporate Legal', 'Bidang'),
(4, 3, 'Manager / Kepala Unit QSHE / Coorporate Legal', 'Bagian'),
(5, 4, 'Supervisor', 'Sub Bagian'),
(6, 5, 'Staf / Officer / Fungsional Lainnya', 'Staf'),
(7, 6, 'Pelaksana / Operator', 'Non Staf');

-- --------------------------------------------------------

--
-- Table structure for table `md_marital`
--

CREATE TABLE `md_marital` (
  `idmd_marital` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `md_marital`
--

INSERT INTO `md_marital` (`idmd_marital`, `status`, `deskripsi`) VALUES
(1, 'BK', 'Belum Kawin'),
(2, 'TK', 'Cerai Hidup / Cerai Mati'),
(3, 'BS', 'Bersuami (Orang Barata)'),
(4, 'K', 'Kawin');

-- --------------------------------------------------------

--
-- Table structure for table `md_organisasi`
--

CREATE TABLE `md_organisasi` (
  `idmd_organisasi` int(11) NOT NULL,
  `kodeorganisasi` varchar(100) DEFAULT NULL,
  `namaorganisasi` varchar(100) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `md_organisasi`
--

INSERT INTO `md_organisasi` (`idmd_organisasi`, `kodeorganisasi`, `namaorganisasi`, `deleted`) VALUES
(1, 'DUT', 'DIREKTORAT UTAMA', 0),
(2, 'DKS', 'DIREKTORAT KEUANGAN, SDM & MR', 0),
(3, 'DOP', 'DIREKTORAT OPERASI', 0),
(4, 'DPS', 'DIREKTORAT PEMASARAN', 0),
(5, 'SKP', 'SEKRETARIAT PERUSAHAAN', 0),
(6, 'SPI', 'SATUAN PENGAWAS INTERN', 0),
(7, 'BEJ', 'BIRO ENJINIRING', 0),
(8, 'BHC', 'BIRO HUMAN CAPITAL', 0),
(9, 'BHM', 'BIRO HUKUM', 0),
(10, 'BKA', 'BIRO KEUANGAN DAN AKUNTANSI', 0),
(11, 'BPU', 'BIRO PENGEMBANGAN USAHA', 0),
(12, 'BSC', 'BIRO MANAJEMENT SUPLY CHAIN', 0),
(13, 'BSQ', 'BIRO SISTEM MUTU, DAN K3LH', 0),
(14, 'DKP', 'DIVISI INDUSTRI KOMPONEN DAN PERMESINAN', 0),
(15, 'DGA', 'DIVISI INDUSTRI GULA DAN AGRO', 0),
(16, 'DMG', 'DIVISI MINYAK DAN GAS', 0),
(17, 'DSA', 'DIVISI SUMBER DAYA AIR', 0),
(18, 'DPM', 'DIVISI PEMBANGKIT', 0),
(19, 'FOU', 'PABRIK PENGECORAN', 0),
(20, 'PPI', 'PABRIK PERALATAN INDUSTRI', 0),
(21, 'TGL', 'PABRIK HIDROMEKANIKAL TEGAL', 0),
(22, 'PKT', 'PABRIK KOMPONEN TURBIN', 0),
(23, 'MDN', 'PABRIK KONSTRUKSI BAJA MEDAN', 0),
(24, 'PHM', 'PABRIK PRECISION DAN HEAVY MACHINERY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mk_jabatan`
--

CREATE TABLE `mk_jabatan` (
  `idmk_jabatan` int(11) NOT NULL,
  `idmd_jabatan` int(11) DEFAULT NULL,
  `npk` int(11) DEFAULT NULL,
  `idmd_bidang` int(11) DEFAULT NULL,
  `idmd_bagian` int(11) DEFAULT NULL,
  `idmd_organisasi` int(11) DEFAULT NULL,
  `idmd_level` int(11) DEFAULT NULL,
  `tglmulai` date DEFAULT NULL,
  `kategorifungsi` varchar(100) DEFAULT NULL,
  `statusjabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mk_jabatan`
--

INSERT INTO `mk_jabatan` (`idmk_jabatan`, `idmd_jabatan`, `npk`, `idmd_bidang`, `idmd_bagian`, `idmd_organisasi`, `idmd_level`, `tglmulai`, `kategorifungsi`, `statusjabatan`) VALUES
(3, 7, 1234, 31, NULL, 13, 5, '2023-01-02', 'Core', 'Def.'),
(18, 7, 2681, 31, NULL, 13, 5, '2023-01-11', 'Core', 'Def.'),
(19, 8, 123456, 29, NULL, 13, 6, '2023-01-10', 'Core', 'Def.'),
(20, 0, 815520, 0, NULL, 0, 1, '0000-00-00', '', ''),
(21, 0, 213213, 0, NULL, 0, 0, '0000-00-00', '', ''),
(22, 0, 4543, 0, NULL, 0, 0, '0000-00-00', '', ''),
(23, 0, 435345, 0, NULL, 0, 0, '0000-00-00', '', ''),
(24, 0, 3678, 0, NULL, 0, 0, '0000-00-00', '', ''),
(25, 0, 865, 0, NULL, 0, 0, '0000-00-00', '', ''),
(26, 0, 435234, 0, NULL, 0, 0, '0000-00-00', '', ''),
(27, 0, 5235235, 0, NULL, 0, 0, '0000-00-00', '', ''),
(28, 0, 23423, 0, NULL, 0, 0, '0000-00-00', '', ''),
(29, 0, 4535345, 0, NULL, 0, 0, '0000-00-00', '', ''),
(30, 2, 98742323, 29, NULL, 13, 2, '2022-12-14', 'Core', 'Pgs.'),
(31, 4, 35153535, 32, NULL, 13, 5, '2022-12-21', 'Core', 'Def.'),
(32, 0, 5656, 0, NULL, 0, 0, '0000-00-00', '', ''),
(33, 0, 65, 0, NULL, 0, 0, '0000-00-00', '', ''),
(34, 0, 123, 0, NULL, 0, 0, '0000-00-00', '', ''),
(35, 2, 345342, 29, NULL, 13, 5, '2018-06-04', 'Support', 'Def.');

-- --------------------------------------------------------

--
-- Table structure for table `mk_pendidikan`
--

CREATE TABLE `mk_pendidikan` (
  `idmk_pendidikan` int(11) NOT NULL,
  `npk` int(11) DEFAULT NULL,
  `levelpendidikan` varchar(100) DEFAULT NULL,
  `jurusan` varchar(200) DEFAULT NULL,
  `institusi` varchar(100) DEFAULT NULL,
  `tahunlulus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mk_pendidikan`
--

INSERT INTO `mk_pendidikan` (`idmk_pendidikan`, `npk`, `levelpendidikan`, `jurusan`, `institusi`, `tahunlulus`) VALUES
(3, 1234, 'Sarjana 2', 'Teknik Informatika', 'Universitas Diponegoro', '2022'),
(18, 2681, 'Sarjana 1', 'Teknik Informatika', 'Politeknik Negeri Banyuwangi', '2022'),
(19, 123456, 'SMK', '', '', '2021'),
(20, 815520, '', '', '', ''),
(21, 213213, '', '', '', ''),
(22, 4543, '', '', '', ''),
(23, 435345, '', '', '', ''),
(24, 3678, '', '', '', ''),
(25, 865, '', '', '', ''),
(26, 435234, '', '', '', ''),
(27, 5235235, '', '', '', ''),
(28, 23423, '', '', '', ''),
(29, 4535345, '', '', '', ''),
(30, 98742323, 'SMP', 'Teknik Informatika', 'Politeknik Negeri Banyuwangi', '2022'),
(31, 35153535, '', '', '', ''),
(32, 5656, '', '', '', ''),
(33, 65, 'SMP', '', '', ''),
(34, 123, '', '', '', ''),
(35, 345342, 'Sarjana 1', 'Teknik Industri', 'POLINEMA', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `mk_renumerasi`
--

CREATE TABLE `mk_renumerasi` (
  `idmk_renumerasi` int(11) NOT NULL,
  `idmd_grade` int(11) DEFAULT NULL,
  `npk` int(11) DEFAULT NULL,
  `tgldiangkat` date DEFAULT NULL,
  `ub_gajipokokkonversi` int(11) DEFAULT NULL,
  `ub_tunjkesejahteraankonversi` int(11) DEFAULT NULL,
  `ub_tunjperalihanupahpokok` int(11) DEFAULT NULL,
  `ub_tunjperalihanjabatan` int(11) DEFAULT NULL,
  `ub_tunjperalihan` int(11) DEFAULT NULL,
  `ub_tunjjabatan` int(11) DEFAULT NULL,
  `ub_upahpokokberlaku` int(11) DEFAULT NULL,
  `uf_gajipokokkonversi` int(11) DEFAULT NULL,
  `uf_tunjkesejahteraankonversi` int(11) DEFAULT NULL,
  `uf_tunjperalihanupahpokok` int(11) DEFAULT NULL,
  `uf_tunjperalihanjabatan` int(11) DEFAULT NULL,
  `uf_tunjperalihan` int(11) DEFAULT NULL,
  `uf_tunjjabatan` int(11) DEFAULT NULL,
  `uf_upahpokokberlaku` int(11) DEFAULT NULL,
  `uf_tunjpenyesuaian` int(11) DEFAULT NULL,
  `statuskeaktifan` varchar(45) DEFAULT NULL,
  `statusdirumahkan` varchar(45) DEFAULT NULL,
  `batchdirumahkan` varchar(45) DEFAULT NULL,
  `tgldirumahkan` date DEFAULT NULL,
  `aktivitasobsolete` varchar(45) DEFAULT NULL,
  `aktivitas2022` varchar(45) DEFAULT NULL,
  `subaktivitas` varchar(45) DEFAULT NULL,
  `statuskepegawaian` varchar(45) DEFAULT NULL,
  `tekniknonteknik` varchar(45) DEFAULT NULL,
  `golpend` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mk_renumerasi`
--

INSERT INTO `mk_renumerasi` (`idmk_renumerasi`, `idmd_grade`, `npk`, `tgldiangkat`, `ub_gajipokokkonversi`, `ub_tunjkesejahteraankonversi`, `ub_tunjperalihanupahpokok`, `ub_tunjperalihanjabatan`, `ub_tunjperalihan`, `ub_tunjjabatan`, `ub_upahpokokberlaku`, `uf_gajipokokkonversi`, `uf_tunjkesejahteraankonversi`, `uf_tunjperalihanupahpokok`, `uf_tunjperalihanjabatan`, `uf_tunjperalihan`, `uf_tunjjabatan`, `uf_upahpokokberlaku`, `uf_tunjpenyesuaian`, `statuskeaktifan`, `statusdirumahkan`, `batchdirumahkan`, `tgldirumahkan`, `aktivitasobsolete`, `aktivitas2022`, `subaktivitas`, `statuskepegawaian`, `tekniknonteknik`, `golpend`) VALUES
(3, NULL, 1234, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'G'),
(18, 2, 2681, '2022-12-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'A', 'H', 'IIII', '2022-12-09', 'TTL', 'TTL', 'BPP', 'KT', 'Teknik', 'A'),
(19, NULL, 123456, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'C'),
(20, NULL, 815520, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(21, 0, 213213, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(22, 0, 4543, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(23, 0, 435345, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(24, 0, 3678, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(25, 0, 865, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(26, NULL, 435234, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(27, 0, 5235235, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(28, 0, 23423, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(29, 0, 4535345, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', ''),
(30, NULL, 98742323, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B'),
(31, NULL, 35153535, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(32, NULL, 5656, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(33, NULL, 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B'),
(34, NULL, 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(35, NULL, 345342, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jabatan`
--

CREATE TABLE `riwayat_jabatan` (
  `id_riwayat_jabatan` int(10) UNSIGNED NOT NULL,
  `npk` int(11) DEFAULT NULL,
  `tglmulai` datetime DEFAULT NULL,
  `tglberahir` datetime DEFAULT NULL,
  `idmd_organisasi` int(11) DEFAULT NULL,
  `namaorganisasi` varchar(100) DEFAULT NULL,
  `idmd_bidang` int(11) DEFAULT NULL,
  `namabidang` varchar(100) DEFAULT NULL,
  `idmd_jabatan` int(11) DEFAULT NULL,
  `namajabatan` varchar(100) DEFAULT NULL,
  `idmd_level` int(11) DEFAULT NULL,
  `namalevel` varchar(100) DEFAULT NULL,
  `statusjabatan` varchar(100) DEFAULT NULL,
  `kategorifungsi` varchar(100) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `timestamp` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_jabatan`
--

INSERT INTO `riwayat_jabatan` (`id_riwayat_jabatan`, `npk`, `tglmulai`, `tglberahir`, `idmd_organisasi`, `namaorganisasi`, `idmd_bidang`, `namabidang`, `idmd_jabatan`, `namajabatan`, `idmd_level`, `namalevel`, `statusjabatan`, `kategorifungsi`, `keterangan`, `timestamp`) VALUES
(8, 2681, '2023-01-10 00:00:00', '2023-01-10 00:00:00', 13, 'Biro Sistem, Mutu & K3LH', 32, 'BIDANG SHE', 4, 'SHE STAFF', 5, 'Supervisor', 'Def.', 'Core', 'Tes', '2023-01-11 16:17:30'),
(21, 1234, '2023-01-11 00:00:00', '2023-01-11 00:00:00', 13, 'Biro Sistem, Mutu & K3LH', 32, 'BIDANG SHE', 9, 'Officer Bidang SHE', 5, 'Supervisor', 'Def.', 'Core', 'Tes', '2023-01-12 17:24:36'),
(22, 1234, '2023-01-12 00:00:00', '2023-01-01 00:00:00', 13, 'Biro Sistem, Mutu & K3LH', 31, 'BAGIAN SISTEM TIK / SAP', 2, 'Staf Bagian Sistem TIK/SAP', 5, 'Supervisor', 'Def.', 'Core', 'asdasdas', '2023-01-12 17:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$LIAhhUtYk8cetV5q3cFqCundFuzMcj58rpzDn94JvwtbxlvLCYJVO', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1673938758, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `md_bagian`
--
ALTER TABLE `md_bagian`
  ADD PRIMARY KEY (`idmd_bagian`);

--
-- Indexes for table `md_bidang`
--
ALTER TABLE `md_bidang`
  ADD PRIMARY KEY (`idmd_bidang`);

--
-- Indexes for table `md_grade`
--
ALTER TABLE `md_grade`
  ADD PRIMARY KEY (`idmd_grade`);

--
-- Indexes for table `md_jabatan`
--
ALTER TABLE `md_jabatan`
  ADD PRIMARY KEY (`idmd_jabatan`);

--
-- Indexes for table `md_karyawan`
--
ALTER TABLE `md_karyawan`
  ADD PRIMARY KEY (`npk`),
  ADD UNIQUE KEY `npk_UNIQUE` (`npk`);

--
-- Indexes for table `md_level`
--
ALTER TABLE `md_level`
  ADD PRIMARY KEY (`idmd_level`);

--
-- Indexes for table `md_marital`
--
ALTER TABLE `md_marital`
  ADD PRIMARY KEY (`idmd_marital`);

--
-- Indexes for table `md_organisasi`
--
ALTER TABLE `md_organisasi`
  ADD PRIMARY KEY (`idmd_organisasi`);

--
-- Indexes for table `mk_jabatan`
--
ALTER TABLE `mk_jabatan`
  ADD PRIMARY KEY (`idmk_jabatan`);

--
-- Indexes for table `mk_pendidikan`
--
ALTER TABLE `mk_pendidikan`
  ADD PRIMARY KEY (`idmk_pendidikan`);

--
-- Indexes for table `mk_renumerasi`
--
ALTER TABLE `mk_renumerasi`
  ADD PRIMARY KEY (`idmk_renumerasi`);

--
-- Indexes for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD PRIMARY KEY (`id_riwayat_jabatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `md_bagian`
--
ALTER TABLE `md_bagian`
  MODIFY `idmd_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `md_bidang`
--
ALTER TABLE `md_bidang`
  MODIFY `idmd_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `md_grade`
--
ALTER TABLE `md_grade`
  MODIFY `idmd_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `md_jabatan`
--
ALTER TABLE `md_jabatan`
  MODIFY `idmd_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `md_level`
--
ALTER TABLE `md_level`
  MODIFY `idmd_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `md_marital`
--
ALTER TABLE `md_marital`
  MODIFY `idmd_marital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `md_organisasi`
--
ALTER TABLE `md_organisasi`
  MODIFY `idmd_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT for table `mk_jabatan`
--
ALTER TABLE `mk_jabatan`
  MODIFY `idmk_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mk_pendidikan`
--
ALTER TABLE `mk_pendidikan`
  MODIFY `idmk_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mk_renumerasi`
--
ALTER TABLE `mk_renumerasi`
  MODIFY `idmk_renumerasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  MODIFY `id_riwayat_jabatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
