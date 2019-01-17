-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 03:46 AM
-- Server version: 10.2.13-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puslit2`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(255) NOT NULL,
  `nm_fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nm_fakultas`) VALUES
(1, 'Adab dan Humaniora'),
(2, 'Dakwah dan Komunikasi'),
(3, 'Ilmu Sosial dan Politik'),
(4, 'Psikolgi'),
(5, 'Sains dan Teknologi'),
(6, 'Syari\'ah dan Hukum'),
(7, 'Tarbiyah dan Keguruan'),
(8, 'Ushuluddin'),
(9, 'Pasca Sarjana');

-- --------------------------------------------------------

--
-- Table structure for table `hki`
--

CREATE TABLE `hki` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `fakultas` int(255) NOT NULL,
  `prodi` int(255) NOT NULL,
  `ciptaan` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hki`
--

INSERT INTO `hki` (`id`, `nama`, `institusi`, `fakultas`, `prodi`, `ciptaan`, `judul`, `deskripsi`, `file`) VALUES
(7, 'Rizky Sam Pratama', 'UIN SGD BANDUNG', 5, 19, 'copyright', 'THESIS SAYA', 'HAHAHA', '00A1921F6A274250934E151C3BF65BBD.jpg'),
(8, 'Rizky Sam Pratama', 'UIN SGD BANDUNG', 5, 19, 'karya_tulis', 'THESIS SAYA', 'popopop', '0_fb.png'),
(9, 'Rizky Sam Pratama', 'UIN SGD BANDUNG', 5, 19, 'copyright', 'THESIS SAYA', 'sadasd', '2.png'),
(10, 'Iqbal', 'UIN SGD BANDUNG', 5, 19, 'copyright', 'THESIS SAYA', 'sdsd', '1.png'),
(11, 'Febri', 'UIN SGD BANDUNG', 5, 19, 'copyright', 'THESIS SAYA', 'qwqwqwq', '3bisa.png'),
(12, 'Semut', 'UIN SGD BANDUNG', 5, 19, 'copyright', 'THESIS SAYA', 'sdadad', '3A5317C20BB14629934FA956DC3DE089.jpg'),
(13, 'Pratama', 'UIN SGD BANDUNG', 5, 19, 'karya_tulis', 'SKRIPSI', 'lskjdlajflajfl', 'Close_your_eyes.pdf'),
(14, 'Evan', 'UIN Sunan Gunung Djati Bandung', 5, 19, 'copyright', 'SKRIPSI', 'qqqqq', '41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(255) NOT NULL,
  `id_fakultas` int(255) DEFAULT NULL,
  `nm_prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `id_fakultas`, `nm_prodi`) VALUES
(1, 1, 'Bahasa dan Sastra Inggris'),
(2, 1, 'Bahasa dan Sastra Arab'),
(3, 1, 'Sejarah Peradaban Islam'),
(4, 1, 'Terjemaha Bahasa Inggris'),
(5, 2, 'Ilmu Komunikasi'),
(6, 2, 'Komunikasi Penyiaran Islam'),
(7, 2, 'Bimbingan dak Konseling Islam'),
(8, 2, 'Manajemen Dakwah'),
(9, 2, 'Pengembangan Masyarakat Islam'),
(10, 3, 'Administrasi Publik'),
(11, 3, 'Manajemen'),
(12, 3, 'Sosiologi'),
(13, 3, 'Ilmu Politik'),
(14, 4, 'Psikologi'),
(15, 5, 'Biologi'),
(16, 5, 'Kimia'),
(17, 5, 'Agroteknologi'),
(18, 5, 'Elektro'),
(19, 5, 'Teknik Informatika'),
(20, 5, 'Matematika'),
(21, 5, 'Fisika'),
(22, 6, 'Ahwal Al-Syakhsiyyah'),
(23, 6, 'Hukum Pidana Islam'),
(24, 6, 'Ilmu Hukum'),
(25, 6, 'Manajemen Keuangan Syariah'),
(26, 6, 'Mu\'amalah'),
(27, 6, 'Perbandingan Madzhab'),
(28, 6, 'Siyasah'),
(29, 7, 'Manajemen Pendidikan Islam'),
(30, 7, 'Pendidikan Agama Islam'),
(31, 7, 'Pendidikan Guru RA'),
(32, 7, 'Pendidikan Bahasa'),
(33, 7, 'Pendidikan Bahasa Arab'),
(34, 7, 'Pendidikan Bahasa Inggris'),
(35, 7, 'Pendidikan MIPA'),
(36, 7, 'Pendidikan Matematika'),
(37, 7, 'Pendidikan Biologi'),
(38, 7, 'Pendidikan Fisika'),
(39, 7, 'Pendidikan Kimia'),
(40, 8, 'Jurusan Ilmu Al-Qur\'an dan Tafsir / Tafsir Hadits'),
(41, 8, 'Jurusan Aqidah dan Filsafat Islam'),
(42, 8, 'Jurusan Studi Agama-Agama'),
(43, 8, 'Jurusan Tasawuf Psikoterapi'),
(44, 8, 'Jurusan Ilmu Hadits'),
(45, 9, 'Program Studi Magister Ilmu Hukum'),
(46, 9, 'Program Studi Magister Pendidikan Agama Islam'),
(47, 9, 'Prodi Magister Ekonomi Syariah'),
(48, 9, 'Profi Magister Relogius Studies'),
(49, 9, 'Prodi Magister Hukum Keluarga'),
(50, 9, 'Prodi Magister Manajemen Pendidikan Islam'),
(51, 9, 'Prodi Doktor Hukum Islam'),
(52, 9, 'Prodi Doktor Pendidikan Islam'),
(53, 9, 'Prodi Perbandingan Agama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hki`
--
ALTER TABLE `hki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas` (`id_fakultas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hki`
--
ALTER TABLE `hki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
