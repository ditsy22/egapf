-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 01:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_nama` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_sandi` text NOT NULL,
  `admin_foto` varchar(80) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_username`, `admin_nama`, `admin_email`, `admin_sandi`, `admin_foto`, `level`) VALUES
(60, 'admin', 'Admin Uchiha', 'admin@gmail.com', '$2y$10$i.q9fviZUwPWQnjdODeN2eLjHGUjZxInJZFUptgQaKASab1N2jRVO', '425d2619e6ac1937dd1e7578a3e0ebe7.jpeg', 'Admin'),
(61, 'salim', 'Dr. Salim', 'salim@gmail.com', '', 'user.png', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `user_id` int(11) NOT NULL,
  `cart_rowid` varchar(80) NOT NULL,
  `cart_name` text NOT NULL,
  `cart_price` varchar(8) NOT NULL,
  `cart_image` varchar(80) NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_weight` varchar(7) NOT NULL,
  `cart_stok` int(11) NOT NULL,
  `cart_userid` int(11) NOT NULL,
  `cart_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `iddetailtransaksi` int(11) NOT NULL,
  `transaksi_id` varchar(10) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `d_transaksi_qty` smallint(4) NOT NULL,
  `d_transaksi_biaya` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` smallint(6) NOT NULL,
  `kategori` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`, `url`) VALUES
(1, 'Baju', 'baju'),
(14, 'Hijab', 'hijab'),
(15, 'Celana', 'celana');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `id_kategori` smallint(6) NOT NULL,
  `produk_url` text NOT NULL,
  `produk_name` text NOT NULL,
  `produk_weight` text NOT NULL,
  `produk_tgl` datetime NOT NULL,
  `produk_stok` text NOT NULL,
  `produk_price` text NOT NULL,
  `produk_description` longtext NOT NULL,
  `produk_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `id_kategori`, `produk_url`, `produk_name`, `produk_weight`, `produk_tgl`, `produk_stok`, `produk_price`, `produk_description`, `produk_image`) VALUES
(1477391281, 1, 'hanna-skirt-plisket-1712371598.html', 'Hanna Skirt Plisket', '1', '2024-04-06 09:46:38', '10', '15234', 'Skirt Plisket Serut,\r\nBahan Hyget Premium,\r\nKulot Plisket Motif,\r\nPinggang full karet,\r\nBahan Hyget Stri,', '074f4e6da187c32beec93b35713ff128.png'),
(1477391282, 14, 'pashmina-inner-2in1-1712371689.html', 'Pashmina Inner 2in1', '1', '2024-04-06 09:48:09', '10', '15234', 'Pashmina inner yang hadir selain dengan warna-warna terbaru yang cantik, namun juga dengan material bahan yang super nyaman digunakan!', 'eb502e671cdcb38efc2d9b8c46fe24a7.png'),
(1477391283, 14, 'ciput-tali-basic-1712371751.html', 'Ciput Tali Basic', '1', '2024-04-06 09:49:11', '10', '15234', 'Ciput yang terdapat tali di bagian belakang dan dapat menyesuaikan kerapatan dikepala serta membingkai wajah.\r\nCiput Tali dengan kualitas premium ini terbuat dari Bahan Rayon TMDD Clasic yang super nyaman, lembut, adem, ringan dan anti pusing tentunya', 'ea837f87d790fac9894f17f227fceb39.png'),
(1477391284, 14, 'afriza-bergo-sport-1712371910.html', 'Afriza Bergo Sport', '1', '2024-04-06 09:51:50', '10', '15234', 'Berbahan spandeks, atau biasa juga disebut lycra, adalah bahan menyerupai kaus yang cukup elastis untuk digunakan. Bahan yang satu ini merupakan bahan yang paling umum digunakan untuk hijab instan. Bahannya cukup lembut dan adem untuk digunakan, terutama di negara tropis.\r\nBahan adem nyerap keringat , dapat juga digunakan sebagai dalaman', '7e0077f0cd24a42c4f8fdca6f212f5d8.png'),
(1477391285, 15, 'legging-basic-1712372029.html', 'Legging Basic', '1', '2024-04-06 09:53:49', '10', '15234', 'Celana legging ternyaman cocok untuk iklim tropis di Indonesia.\r\nClouwny Basic Legging memungguakan material cotton bamboo sehingga adem, menyerap keringat dan super elastis', '4790f324c6b398daf85c3e4582e1d479.png'),
(1477391286, 1, 'manset-baju-basic-1712372087.html', 'Manset Baju Basic', '1', '2024-04-06 09:54:47', '10', '15234', 'Material : spandek jersey premium. Dapat dipakai sebagai langsung sebagai outfit (bukan hanya sebagai daleman). Bukan bahan hyget yang cenderung gerah dan gatal dipakai.', '2dc40b77a8d1c330fd28439e09c8d2c6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `transaksi_id` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaksi_total` double NOT NULL,
  `transaksi_tujuan` varchar(255) NOT NULL,
  `transaksi_pos` int(5) NOT NULL,
  `transaksi_prov` varchar(80) NOT NULL,
  `transaksi_kota` varchar(25) NOT NULL,
  `transaksi_kurir` varchar(5) NOT NULL,
  `transaksi_service` varchar(50) NOT NULL,
  `transaksi_tgl_pesan` date NOT NULL,
  `transaksi_bts_bayar` date NOT NULL,
  `transaksi_status` text NOT NULL,
  `transaksi_note` text DEFAULT NULL,
  `transaksi_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `buktipembayaran` text NOT NULL DEFAULT 'default.jpg',
  `noresi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` text NOT NULL,
  `noktp` text NOT NULL,
  `fotoprofil` text NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_sandi` text NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_nama`, `alamat`, `nohp`, `noktp`, `fotoprofil`, `user_email`, `user_sandi`, `user_status`, `user_created`) VALUES
(1650155904, 'Sugeng', 'Asrama Putri Ayu', '081256816298', '16819920131', '', 'sugeng@gmail.com', '$2y$10$omxlFzy69dE3kNPTvNR2oeSSoDyQG6EEwqpsXauJb0Fsb8AY/DJre', 1, '2024-04-05 06:52:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`iddetailtransaksi`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `transaksi_id` (`transaksi_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `iddetailtransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1477391289;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `tb_transaksi` (`transaksi_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `tb_produk` (`produk_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
