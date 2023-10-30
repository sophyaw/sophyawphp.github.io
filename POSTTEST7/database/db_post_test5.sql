-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 05:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_post_test5`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `tipe_produk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `tipe_produk`, `gambar`) VALUES
(4, '[3rd Album] An Ode (Random)', 230846, 'album', 'album1.jpg'),
(5, '11th Mini Album "SEVENTEENTH HEAVEN" PM 2:14 Ver.', 354790, 'album', 'album2.jpg'),
(6, 'SEVENTEEN Japan Best Album [Always Yours] Limited Edition C', 463242, 'album', 'album3.png'),
(7, 'SEVENTEEN 1st Mini Album "17 CARAT"', 278719, 'album', 'album4.png'),
(8, 'SEVENTEEN 4th Album "Face The Sun" (CARAT Version)', 292818, 'album', 'album5.png'),
(9, 'SEVENTEEN 10th Mini Album "FML" (Fight for My Life)', 370283, 'album', 'album6.png'),
(10, 'SEVENTEEN 9th Mini Album "Attacca"', 457044, 'album', 'album7.jpg'),
(11, 'SEVENTEEN 3rd Mini Album "Going Seventeen " (MAKE IT HAPPEN Ver.)', 387171, 'album', 'album9.png'),
(12, '4th Album Repackage "SECTOR 17" (NEW HEIGHTS Ver.)', 525214, 'album', 'album8.png'),
(13, 'SEVENTEEN 1st Album [FIRST "LOVE & LETTER"] (LETTER Ver.)', 356185, 'album', 'album10.png'),
(14, 'OFFICIAL LIGHT STICK VER.2', 914089, 'merch', 'merch1.jpg'),
(15, 'Mini Photo Holder', 291269, 'merch', 'merch2.png'),
(16, 'Multi Pouch', 525214, 'merch', 'merch3.png'),
(17, 'AirPods CASE', 448523, 'merch', 'merch4.png'),
(18, 'Sticker Set', 151831, 'merch', 'merch5.png'),
(19, 'Acrylic Stand', 354790, 'merch', 'merch6.png'),
(20, 'OFFICIAL LIGHT STICK VER.3', 991555, 'merch', 'merch7.png'),
(21, 'Bongbongee Doll Keyring', 353241, 'merch', 'merch8.png'),
(22, 'Cross Bag', 849019, 'merch', 'merch9.png'),
(23, 'Sogo (Small Drum) Ver.2', 387171, 'merch', 'merch10.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
