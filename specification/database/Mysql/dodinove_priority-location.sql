-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2021 at 08:44 AM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dodinove_priority-location`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(100) DEFAULT NULL,
  `nama_alternatif` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telepon` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `kode_alternatif`, `nama_alternatif`, `keterangan`, `alamat`, `no_telepon`, `email`) VALUES
(1, 'MA', 'Makrayu', '', 'Jl. Makrayu No. 98 Kel. 32 Ilir Kec. IB I', '085268964616', 'pkmmakrayu@gmail.com'),
(2, 'GA', 'Gandus', '', 'Jl. TP. Demsi Husin Damarjaya Rt. 19 Rw. 02 Kel. Pulokerto Kec. Gandus', '0895373881039 ', 'pkmgandus@gmail.com'),
(3, 'UL', '1 Ulu', '', 'Jl. H. Faqih Usman No. 2329 Rt. 43', '07115742035', 'pkm1ulu@gmail.com'),
(4, '4UL', '4 Ulu', '', 'Jl. KH. Asyik No.1484, Kel.3-4 Ulu Kec SU.1', '0711511373', 'pkm4ulu@gmail.com'),
(5, '7UL', '7 Ulu', '', 'Jl. KH. Azhari Kel. 7 Ulu', '08117846767', 'pkm7ulu@gmail.com'),
(6, 'PE', 'Pembina', '', 'Jl. Jendral Ahmad Yani No. 62A Silaberanti', '0711510203', 'pkmpembina@gmail.com'),
(7, 'OP', 'Opi', '', 'Jl. Opi Raya Perum.OPI Kel. 15 Ulu Kec. Jakabaring', '07115620648', 'pkmopi@gmail.com'),
(8, 'KE', 'Keramasan', '', 'Jl. Abicusno Cokrosuyoso Lr. Gotong Royong Rt.10 Kel. Kemang Agung Kec. Kertapati', '085279038433', 'pkmkeramasan@gmail.com'),
(9, 'KER', 'Kertapati', '', 'Jl. Abi Kusno Cokro Suyoso No. 335 Kel. Kemang Agung Kec. Kertapati', '081278881299', 'pkmkertapati@gmail.com'),
(10, 'KJ', 'Karya Jaya', '', 'Jl. Mayjen Yusuf Singadekane Kel. Keramasan Kec. Kertapati', '081278925345', 'pkmkaryajaya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kode_kriteria` varchar(100) DEFAULT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `jenis_kriteria` varchar(50) DEFAULT NULL,
  `bobot` double(18,2) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `jenis_kriteria`, `bobot`, `keterangan`) VALUES
(1, 'C1', 'Angka Rumah Sehat yang memenuhi syarat (%)', 'Cost', 2.00, ''),
(2, 'C2', 'Angka Penduduk yang memiliki akses air bersih (%)', 'Cost', 2.00, ''),
(3, 'C3', 'Angka sarana air minum yang memenuhi syarat kesehatan (%)', 'Cost', 2.00, ''),
(4, 'C4', 'Angka penduduk dengan akses fasilitas sanitasi yang layak (Jamban Sehat) (%)', 'Cost', 3.00, ''),
(5, 'C5', 'Angka Tempat-Tempat Umum (TTU) yang memenuhi syarat (%)', 'Cost', 2.00, ''),
(6, 'C6', 'Angka Tempat Pengelolaan Makanan (TPM) yang memenuhi syarat higiene sanitasi (%)', 'Cost', 3.00, ''),
(7, 'C7', 'Jumlah Tenaga Kesehatan Lingkungan', 'Cost', 5.00, ''),
(8, 'C8', 'Angka KK Masih BABS (%)', 'Benefit', 4.00, ''),
(9, 'C9', 'Jumlah Penemuan Penderita Penyakit Diare', 'Benefit', 3.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_alternatif`
--

CREATE TABLE `nilai_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `id_nilai_kriteria` int(11) DEFAULT NULL,
  `nilai` double(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_alternatif`
--

INSERT INTO `nilai_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `id_nilai_kriteria`, `nilai`) VALUES
(1, 1, 1, 2, 84.89),
(2, 1, 2, 7, 95.28),
(3, 1, 3, 11, 100.00),
(4, 1, 4, 16, 91.27),
(5, 1, 5, 24, 82.00),
(6, 1, 6, 27, 80.00),
(7, 1, 7, 33, 2.00),
(8, 1, 8, 36, 0.24),
(9, 1, 9, 43, 1847.00),
(10, 2, 1, 4, 54.25),
(11, 2, 2, 9, 90.83),
(12, 2, 3, 11, 100.00),
(13, 2, 4, 20, 27.17),
(14, 2, 5, 23, 83.00),
(15, 2, 6, 26, 100.00),
(16, 2, 7, 33, 2.00),
(17, 2, 8, 39, 13.75),
(18, 2, 9, 43, 1672.00),
(19, 3, 1, 1, 95.97),
(20, 3, 2, 9, 89.98),
(21, 3, 3, 15, 0.00),
(22, 3, 4, 18, 60.30),
(23, 3, 5, 24, 81.48),
(24, 3, 6, 26, 100.00),
(25, 3, 7, 33, 2.00),
(26, 3, 8, 37, 6.01),
(27, 3, 9, 41, 598.00),
(28, 4, 1, 3, 70.47),
(29, 4, 2, 9, 89.99),
(30, 4, 3, 15, 0.00),
(31, 4, 4, 18, 57.63),
(32, 4, 5, 23, 85.00),
(33, 4, 6, 26, 85.72),
(34, 4, 7, 33, 2.00),
(35, 4, 8, 37, 5.83),
(36, 4, 9, 42, 1284.00),
(37, 5, 1, 4, 56.95),
(38, 5, 2, 9, 89.97),
(39, 5, 3, 15, 0.00),
(40, 5, 4, 18, 60.64),
(41, 5, 5, 24, 78.75),
(42, 5, 6, 26, 100.00),
(43, 5, 7, 33, 2.00),
(44, 5, 8, 39, 12.65),
(45, 5, 9, 41, 455.00),
(46, 6, 1, 3, 72.73),
(47, 6, 2, 8, 92.45),
(48, 6, 3, 15, 0.00),
(49, 6, 4, 19, 48.95),
(50, 6, 5, 23, 86.84),
(51, 6, 6, 30, 0.00),
(52, 6, 7, 33, 2.00),
(53, 6, 8, 38, 8.68),
(54, 6, 9, 42, 1023.00),
(55, 7, 1, 3, 75.14),
(56, 7, 2, 7, 95.64),
(57, 7, 3, 11, 100.00),
(58, 7, 4, 19, 53.32),
(59, 7, 5, 25, 75.00),
(60, 7, 6, 26, 100.00),
(61, 7, 7, 33, 2.00),
(62, 7, 8, 40, 19.94),
(63, 7, 9, 42, 1170.00),
(64, 8, 1, 3, 66.16),
(65, 8, 2, 10, 88.35),
(66, 8, 3, 15, 0.00),
(67, 8, 4, 20, 38.51),
(68, 8, 5, 25, 75.00),
(69, 8, 6, 30, 0.00),
(70, 8, 7, 34, 1.00),
(71, 8, 8, 36, 1.95),
(72, 8, 9, 41, 898.00),
(73, 9, 1, 5, 46.74),
(74, 9, 2, 9, 89.88),
(75, 9, 3, 15, 0.00),
(76, 9, 4, 18, 57.38),
(77, 9, 5, 25, 74.07),
(78, 9, 6, 28, 48.86),
(79, 9, 7, 34, 1.00),
(80, 9, 8, 40, 19.15),
(81, 9, 9, 42, 1110.00),
(82, 10, 1, 1, 89.85),
(83, 10, 2, 10, 87.84),
(84, 10, 3, 15, 0.00),
(85, 10, 4, 20, 24.72),
(86, 10, 5, 25, 70.00),
(87, 10, 6, 28, 50.00),
(88, 10, 7, 34, 1.00),
(89, 10, 8, 37, 4.72),
(90, 10, 9, 41, 284.00);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kriteria`
--

CREATE TABLE `nilai_kriteria` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `nilai_awal` double(18,2) DEFAULT NULL,
  `nilai_akhir` double(18,2) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id`, `id_kriteria`, `keterangan`, `nilai_awal`, `nilai_akhir`, `nilai`) VALUES
(1, 1, '89,00 – 100 % ', 89.00, 100.00, 1),
(2, 1, '77,00 – 88,99 % ', 77.00, 88.99, 2),
(3, 1, '65,00 – 76,99 %', 65.00, 76.99, 3),
(4, 1, '53,00 – 64,99 %', 53.00, 64.99, 4),
(5, 1, '<=52,99 %', 0.00, 52.99, 5),
(6, 2, '98,00 – 100 %', 98.00, 100.00, 1),
(7, 2, '95 ,00– 97,99%', 95.00, 97.99, 2),
(8, 2, '92,00 – 94,99 %', 92.00, 94.99, 3),
(9, 2, '89,00 – 91,99 %', 89.00, 91.99, 4),
(10, 2, '<=88,99 %', 0.00, 88.99, 5),
(11, 3, '81,00 – 100 % ', 81.00, 100.00, 1),
(12, 3, '61,00 – 80,99 %', 61.00, 80.99, 2),
(13, 3, '41,00 – 60,99 %', 41.00, 60.99, 3),
(14, 3, '21,00 – 40,99 %', 21.00, 40.99, 4),
(15, 3, '<=20,99 %', 0.00, 20.99, 5),
(16, 4, '86,00 – 100 %', 86.00, 100.00, 1),
(17, 4, '71,00 – 85,99%', 71.00, 85.99, 2),
(18, 4, '56,00 – 70,99 % ', 56.00, 70.99, 3),
(19, 4, '41,00 – 55,99 %', 41.00, 55.99, 4),
(20, 4, '<=40,99 %', 0.00, 40.99, 5),
(21, 5, '95,00 – 100 %', 95.00, 100.00, 1),
(22, 5, '89,00 – 94,99% ', 89.00, 94.99, 2),
(23, 5, '83,00 – 88,99 %', 83.00, 88.99, 3),
(24, 5, '77,00 – 82,99 % ', 77.00, 82.99, 4),
(25, 5, '<=76,99 %', 0.00, 76.99, 5),
(26, 6, '81,00 – 100 % ', 81.00, 100.00, 1),
(27, 6, '61,00 – 80,99 %', 61.00, 80.99, 2),
(28, 6, '41,00 – 60,99 %', 41.00, 60.99, 3),
(29, 6, '21,00 – 40,99 %', 21.00, 40.99, 4),
(30, 6, '<=20,99 %', 0.00, 20.99, 5),
(31, 7, '>= 4', 4.00, 100.00, 1),
(32, 7, '3', 3.00, 3.00, 2),
(33, 7, '2', 2.00, 2.00, 3),
(34, 7, '1', 1.00, 1.00, 4),
(35, 7, '0', 0.00, 0.00, 5),
(36, 8, '0 – 3 ,99%', 0.00, 3.99, 1),
(37, 8, '4,00 – 7,99%', 4.00, 7.99, 2),
(38, 8, '8 ,00 – 11,99 %', 8.00, 11.99, 3),
(39, 8, '12,00 – 15,99 %', 12.00, 15.99, 4),
(40, 8, '>=16,99 %', 16.99, 100.00, 5),
(41, 9, '0 – 999 Kasus', 0.00, 999.00, 1),
(42, 9, '1000 – 1499 Kasus', 1000.00, 1499.00, 2),
(43, 9, '1500 – 1999 Kasus', 1500.00, 1999.00, 3),
(44, 9, '2000 – 2499 kasus', 2000.00, 2499.00, 4),
(45, 9, '>=2500 Kasus', 2500.00, 1000000.00, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gambar`, `password`, `role_id`) VALUES
(2, 'Kepala', 'kepala@gmail.com', '61b15e0a15add.png', '870f669e4bbbfa8a6fde65549826d1c4', 1),
(3, 'Staff', 'staff@gmail.com', '61b15df38ca71.png', '1253208465b1efa876f982d8a9e73eef', 2),
(6, 'Puskesmas Makrayu', 'pkmmakrayu@gmail.com', '61b15e87112bb.png', '4adcc87ea873941fc58d1e38ae2a3a8b', 3),
(7, 'Puskesmas Gandus', 'pkmgandus@gmail.com', '61b15e9e13ae7.png', '4a460842e9ab4cbc4368a9b712bf2982', 3),
(8, 'Puskesmas 1 Ulu', 'pkm1ulu@gmail.com', '61b15eb44ddc5.png', 'd5c382a38264cb903ba235f29f227ef7', 3),
(9, 'Puskesmas 4 Ulu', 'pkm4ulu@gmail.com', '61b15ecdb2ba6.png', '9a3d7040dc47f846d50da8f66d831d7a', 3),
(10, 'Puskesmas 7 Ulu', 'pkm7ulu@gmail.com', '61b15ee05183b.png', '7160d59c3cf38b01e652eccf75675369', 3),
(11, 'Puskesmas Pembina', 'pkmpembina@gmail.com', '61b15efdef2dd.png', '377a610343a9812be993e0e755b2e00f', 3),
(12, 'Puskesmas OPI', 'pkmopi@gmail.com', '61b15f17dd99c.png', '6f269e243ba53ab9d4f7ca5b2d7e02d6', 3),
(13, 'Puskesmas Keramasan', 'pkmkeramasan@gmail.com', '61b15f2cab1a8.png', '581973b2e489fa6913a718d944c55a87', 3),
(14, 'Puskesmas Kertapati', 'pkmkertapati@gmail.com', '61b15f3e47e8d.png', '87b6dada022f03cab9fae2519835ee17', 3),
(15, 'Puskesmas Karyajaya', 'pkmkaryajaya@Gmail.com', '61b15f61302e5.png', 'd13b0f7b69326ab9179cc12143df6684', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
