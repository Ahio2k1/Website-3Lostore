-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 01:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website3lo_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'thanhhoai', 'hoai@gmail.com', 'hoai', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) UNSIGNED NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(1, 'Mr Vui'),
(2, 'Crumpler'),
(3, 'Eastpak'),
(4, 'Jansport');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) UNSIGNED NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) UNSIGNED NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(1, 'Balo văn Phòng'),
(2, 'Balo Du Lịch'),
(3, 'Balo Công Nghệ'),
(4, 'Balo Thời Trang'),
(5, 'Balo Học Sinh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `phone`, `email`, `password`) VALUES
(1, 'Hoài', '4/10 Huyện Hóc Môn Q12.', 'TP.HCM', '0906172097', 'hoai@gmail.com', '123456'),
(2, 'Thiện', '99/9 phường đống đa', 'Hà Nội', '0918273632', 'thien@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) UNSIGNED NOT NULL,
  `productName` varchar(255) NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`) VALUES
(6, 13, 'BaloTeen805', 1, 1, '499000', '\r\n        a25b91fa63.jpg', 0, '2021-06-17 09:28:15'),
(7, 8, 'BaloLaptop738', 1, 1, '1200000', '\r\n        33b49088d6.jpg', 0, '2021-06-17 09:28:15'),
(8, 8, 'BaloLaptop738', 1, 1, '1200000', '\r\n        33b49088d6.jpg', 0, '2021-06-17 09:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) UNSIGNED NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) UNSIGNED NOT NULL,
  `brandId` int(11) UNSIGNED NOT NULL,
  `product_desc` text NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(1, 'Balo Du Lịch 002', 2, 1, '<p>.</p>', 1, '799000', 'ecfe4de20e.jpg'),
(2, 'Balo Du Lịch 004', 2, 1, '<p>.</p>', 0, '499000', 'e3c7729a43.jpg'),
(3, 'BALO LAPTOP 823 XANH ĐEN', 3, 1, '<p>.</p>', 1, '789000', '2efeb19234.jpg'),
(4, 'BALO TEEN 807 KEM-ĐEN', 4, 1, '<p>.</p>', 1, '499000', '68edd9686f.jpg'),
(5, 'Balo Thể Thap 790', 2, 1, '<p>.</p>', 0, '799000', '9dc1a138b8.jpg'),
(6, 'BaloDuLich001', 2, 1, '<p>.</p>', 0, '499000', 'a98544b399.jpg'),
(7, 'BaloLaptop618', 3, 1, '<p>.</p>', 1, '799000', 'bfaf787019.jpg'),
(8, 'BaloLaptop738', 3, 1, '<p>.</p>', 0, '1200000', '33b49088d6.jpg'),
(9, 'BaloLaptop760', 3, 1, '<p>.</p>', 1, '799000', 'f235d6f0c7.jpg'),
(10, 'BaloLaptop774', 3, 1, '<p>.</p>', 1, '1234000', '63497c5577.jpg'),
(11, 'BaloLaptop806', 3, 1, '<p>.</p>', 0, '799000', '698100f82b.jpg'),
(12, 'BaloTeen669', 4, 1, '<p>.</p>', 0, '499000', '7c2206859b.jpg'),
(13, 'BaloTeen805', 4, 1, '<p>.</p>', 1, '499000', 'a25b91fa63.jpg'),
(14, 'JanSprot Cool Student Backpack', 5, 4, '<p>.</p>', 1, '499000', '4fab24e3c6.jpg'),
(15, 'JanSprot Superbreak Backpack Brook Grreen', 4, 4, '<p>.</p>', 1, '1200000', 'c55ac26c4d.jpg'),
(16, 'JanSprot Superbreak Plus (Black, One Size)', 4, 4, '<p>.</p>', 1, '799000', '2e84449f2f.jpg'),
(17, 'JanSprot Trans By Megahertz li Backpack', 4, 4, '<p>.</p>', 1, '790000', '72329543dc.jpg'),
(18, 'Balo Eastpak Litt', 4, 3, '<p>.</p>', 1, '799000', '2e2329a9c0.jpg'),
(19, 'Balo Eastpak Out Of Office', 4, 3, '<p>.</p>', 1, '499000', '552c2e7612.jpg'),
(20, 'Balo Eastpak Padded Pak\'R', 4, 3, '<p>.</p>', 0, '799000', 'aa02614b95.jpg'),
(21, 'Balo EASTPAK Padded Travell\'R', 4, 3, '<p>.</p>', 0, '450000', '81a1374ba4.jpg'),
(22, 'Balo Crumpler Proper Roady Half photo', 2, 2, '<p>.</p>', 0, '1200000', '6f5f5b50d2.jpg'),
(23, 'Crumpler Roadcase backpack', 4, 2, '<p>.</p>', 1, '799000', '9b7442ae64.jpg'),
(25, 'Jackpack Half Photo Backpack Black', 4, 2, '<p>.</p>', 0, '799000', '80674d4e31.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `catId` (`catId`,`brandId`),
  ADD KEY `brandId` (`brandId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `tbl_product` (`productId`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `tbl_product` (`productId`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `tbl_category` (`catId`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`brandId`) REFERENCES `tbl_brand` (`brandId`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
