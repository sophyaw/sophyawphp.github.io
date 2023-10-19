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
(4, 'Album 1', 120000, 'album', 'album1.jpg'),
(5, 'Album 2', 450000, 'album', 'album2.jpg'),
(6, 'Album 3', 1232132132, 'album', 'album3.png'),
(7, 'Album 4', 12321321, 'album', 'album4.png'),
(8, 'Album 5', 8889321, 'album', 'album5.png'),
(9, 'Album 6', 113211, 'album', 'album6.png'),
(10, 'Album 7', 515151, 'album', 'album7.jpg'),
(11, 'Album 8', 99989, 'album', 'album9.png'),
(12, 'Album 9', 1244112, 'album', 'album8.png'),
(13, 'Album 10', 887888, 'album', 'album10.png'),
(14, 'Merch 1', 3281938, 'merch', 'merch1.jpg'),
(15, 'Merch 2', 414141, 'merch', 'merch2.png'),
(16, 'Merch 3', 4141421, 'merch', 'merch3.png'),
(17, 'Merch 4', 898998, 'merch', 'merch4.png'),
(18, 'Merch 5', 8778878, 'merch', 'merch5.png'),
(19, 'Merch 6', 8989899, 'merch', 'merch6.png'),
(20, 'Merch 7', 7878781, 'merch', 'merch7.png'),
(21, 'Merch 8', 5678911, 'merch', 'merch8.png'),
(22, 'Merch 9', 78321327, 'merch', 'merch9.png'),
(23, 'Merch 10', 6789321, 'merch', 'merch10.png');

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
