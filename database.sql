-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 03:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokomart`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayamikan`
--

CREATE TABLE `ayamikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ayamikan`
--

INSERT INTO `ayamikan` (`id`, `nama`, `stok`) VALUES
(1, 'Daging Ayam', 2),
(2, 'Ikan Bawal', 0),
(3, 'Ikan Kembung', 0),
(4, 'Ikan Salem', 1),
(5, 'Ikan Tongkol', 0),
(6, 'Ikan Emas', 0),
(7, 'Ikan Kakap', 1),
(8, 'Ikan Mujair', 0),
(9, 'Ikan Lele', 2),
(10, 'Udang', 0),
(11, 'Ikan Gurame', 0),
(12, 'Ikan Cuek (Keranjang)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cabaibawang`
--

CREATE TABLE `cabaibawang` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabaibawang`
--

INSERT INTO `cabaibawang` (`id`, `nama`, `stok`, `tipe`) VALUES
(1, 'Cabai Rawit Merah', 1, 1),
(2, 'Cabai Rawit Hijau', 2, 2),
(3, 'Cabai Merah Keriting', 2, 1),
(4, 'Cabai Merah Besar', 0, 3),
(5, 'Cabai Hijau Keriting', 0, 2),
(6, 'Cabai Hijau Besar', 0, 3),
(7, 'Bawang Merah', 0, 4),
(8, 'Bawang Putih', 2, 4),
(9, 'Bawang Bombay', 0, 4),
(10, 'Bumbu Dapur Lengkap', 0, 5),
(11, 'Sereh Serai', 0, 7),
(12, 'Lengkuas', 0, 6),
(13, 'Kunyit', 0, 6),
(14, 'Jahe', 0, 6),
(15, 'Daun Jeruk', 0, 7),
(16, 'Daun Salam', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `ikanasin`
--

CREATE TABLE `ikanasin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ikanasin`
--

INSERT INTO `ikanasin` (`id`, `nama`, `stok`) VALUES
(1, 'Ikan Bulu Ayam', 1),
(2, 'Ikan Layang', 2),
(3, 'Udang Rebon', 1),
(4, 'Ikan Tembang Dendeng', 2),
(5, 'Ikan Teri Jengki', 0),
(6, 'Ikan Layur', 2),
(7, 'Ikan Peda', 0),
(8, 'Ikan Teri Medan', 0),
(9, 'Ikan Rebus', 0),
(10, 'Ikan Selar', 0),
(11, 'Cumi Asin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nagetbakso`
--

CREATE TABLE `nagetbakso` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `tipe` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nagetbakso`
--

INSERT INTO `nagetbakso` (`id`, `nama`, `stok`, `tipe`) VALUES
(1, 'Champ Naget Ayam', 2, 1),
(2, 'Champ Sosis Ayam Isi 3', 2, 2),
(3, 'Champ Sosis Ayam Satuan', 1, 2),
(4, 'Bakso Sapi', 2, 4),
(5, 'Bakso Sapi SM', 0, 4),
(6, 'Tempe', 2, 3),
(7, 'Tahu Segitiga', 2, 3),
(8, 'Tahu Kuning', 2, 3),
(9, 'Tahu Putih Besar', 1, 3),
(10, 'Tahu Putih Kecil-Kecil', 0, 3),
(11, 'Tempe Gembus', 0, 3),
(12, 'Tahu Bakso', 2, 4),
(13, 'Sosis Sapi Dan Ayam', 2, 2),
(14, 'Cedea Steamboat Ikan', 2, 1),
(15, 'Cedea Chikuwa', 0, 1),
(16, 'Sosis Kanzler', 0, 2),
(17, 'Sosis Bakar Harmoni', 1, 2),
(18, 'Otak-Otak Ikan', 1, 1),
(19, 'Ayam Ungkep (Spesial)', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sayuran`
--

CREATE TABLE `sayuran` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `img` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sayuran`
--

INSERT INTO `sayuran` (`id`, `nama`, `img`, `stok`, `tipe`) VALUES
(1, 'Bayam', '', 1, 1),
(2, 'Kangkung', '', 1, 1),
(3, 'Caisim', '', 1, 1),
(4, 'Sawi Putih', '', 2, 1),
(5, 'Pak Coy', '', 2, 1),
(6, 'Daun Singkong', '', 0, 1),
(7, 'Daun Katuk', '', 0, 1),
(8, 'Daun Bawang', '', 2, 3),
(9, 'Daun Kemangi', '', 0, 3),
(10, 'Sayur Asem', '', 1, 2),
(11, 'Sayur Sop', '', 2, 2),
(12, 'Selada', '', 2, 1),
(13, 'Genjer', '', 0, 1),
(14, 'Daun Pepaya', '', 1, 1),
(15, 'Daun Ubi', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tanggal`
--

CREATE TABLE `tanggal` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tgl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggal`
--

INSERT INTO `tanggal` (`id`, `kategori`, `tgl`) VALUES
(1, 'sayuran', 'Jumat 11-11-2022 13:24'),
(2, 'wortelbuncis', 'Jumat 11-11-2022 13:24'),
(3, 'cabaibawang', 'Jumat 11-11-2022 13:24'),
(4, 'nagetbakso', 'Rabu 19-04-2023 15:55'),
(5, 'ayamikan', 'Jumat 11-11-2022 13:25'),
(6, 'ikanasin', 'Rabu 10-08-2022 12:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `status`) VALUES
(1, 'Rechmand', 'tokomart77000', 1),
(2, 'Ahmad', 'tokomart77000', 1),
(3, 'Isah', 'tokomart77000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wortelbuncis`
--

CREATE TABLE `wortelbuncis` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wortelbuncis`
--

INSERT INTO `wortelbuncis` (`id`, `nama`, `stok`, `tipe`) VALUES
(1, 'Buncis', 2, 1),
(2, 'Kacang Panjang', 0, 1),
(3, 'Labusiam Kecil', 2, 2),
(4, 'Labusiam Besar', 2, 2),
(5, 'Brokoli', 2, 1),
(6, 'Kembang Kol', 2, 1),
(7, 'Pare', 2, 2),
(8, 'Oyong', 1, 1),
(9, 'Terong Ungu', 2, 2),
(10, 'Terong Hijau', 0, 2),
(11, 'Kubis Kol', 2, 2),
(12, 'Wortel', 1, 2),
(13, 'Terong Lalap Hijau', 0, 4),
(14, 'Terong Lalap Ungu', 0, 4),
(15, 'Tomat', 2, 4),
(16, 'Jamur Kancing', 0, 3),
(17, 'Jamur Kuping', 0, 3),
(18, 'Jamur Tiram', 2, 3),
(19, 'Jengkol', 2, 3),
(20, 'Kentang', 2, 5),
(21, 'Petai Pete', 0, 3),
(22, 'Toge Tauge', 2, 3),
(23, 'Timun', 2, 4),
(24, 'Jagung Manis Kulit', 1, 2),
(25, 'Jagung Manis', 2, 2),
(26, 'Jagung Putren (Soleng)', 2, 4),
(27, 'Toge Kecambah', 2, 3),
(28, 'Daun Seledri', 2, 2),
(29, 'Jeruk Nipis', 2, 5),
(30, 'Jeruk Lemon', 1, 5),
(31, 'Kulit Melinjo (Tangkil)', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayamikan`
--
ALTER TABLE `ayamikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabaibawang`
--
ALTER TABLE `cabaibawang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ikanasin`
--
ALTER TABLE `ikanasin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nagetbakso`
--
ALTER TABLE `nagetbakso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sayuran`
--
ALTER TABLE `sayuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggal`
--
ALTER TABLE `tanggal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wortelbuncis`
--
ALTER TABLE `wortelbuncis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayamikan`
--
ALTER TABLE `ayamikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cabaibawang`
--
ALTER TABLE `cabaibawang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ikanasin`
--
ALTER TABLE `ikanasin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nagetbakso`
--
ALTER TABLE `nagetbakso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sayuran`
--
ALTER TABLE `sayuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wortelbuncis`
--
ALTER TABLE `wortelbuncis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
