-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2019 at 09:17 AM
-- Server version: 10.2.27-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infc4627_skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE `additem` (
  `id` int(11) NOT NULL,
  `material_name` text NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `group` varchar(255) NOT NULL,
  `uom` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additem`
--

INSERT INTO `additem` (`id`, `material_name`, `item_code`, `group`, `uom`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CS Charcoal NS Moisture - 12% (Ash 0% - 10%)', 'X111010', 'A', 'Kg', '2018-09-03 10:35:47', '2018-09-03 03:35:47', NULL),
(2, 'CS Charcoal NS Moisture 12%-25% (Ash 0% - 10%)', 'X111020', 'E', 'Kg', '2018-08-22 08:18:18', '2018-08-22 01:18:18', NULL),
(3, 'CS Charcoal NS Moisture + 25% (Ash 0% - 10%)', 'X111030', 'A', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(4, 'PS Charcoal NS (Ash 0% - 10%)', 'X112010', 'A', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(5, 'KS Charcoal NS (Ash 0% - 10%)', 'X113010', 'A', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(6, 'WF Charcoal NS', 'X114010', 'A', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(7, 'CS Charcoal PW / GR (Ash 0% - 10%)', 'X115010', 'A', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(8, 'Kaolin Mesh 100', 'X118100', 'Consumable - Production', 'Kg', '2019-10-17 03:02:44', '2019-10-16 20:02:44', '2019-10-16 20:02:44'),
(9, 'CS Charcoal PW Hycarb Bitung', 'X111210', 'B', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(10, 'CS Charcoal PW Hycarb Palu', 'X111230', 'B', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(11, 'CS Charcoal PW Dust Surabaya', 'X111240', 'B', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(12, 'CS Charcoal PW Javaindo Carbon', 'X111250', 'B', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(13, 'CS Charcoal PW Mix Supplier', 'X111260', 'B', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(14, 'CS Charcoal PW Ikaindo Medan', 'X111235', 'B', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(15, 'CS Charcoal PW (Ash 11% - 20%)', 'X111270', 'B', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(16, 'Tapioca / Starch', 'X119100', 'Consumable - Production', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(17, 'Caustic Soda', 'X119500', 'Consumable - Production', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(18, 'Firewood', 'X811000', 'Consumable - Production', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(19, 'Diesel Fuel', 'X812000', 'Consumable - Production', 'Ltr', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(20, '3Kg NATURE Premium x 162 (PL # A-240 # 1/1 # POS)', 'X432010', 'FINISHED PRODUCT', 'Bags', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(21, '6Kg NATURE Premium x 80 (PL # A-240 # 1/1 # POS)', 'X432015', 'FINISHED PRODUCT', 'Bag', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(22, 'Paper Roll - White Kraft 80gr/120cm', 'X121001', 'SINGLE PACKAGING MATERIAL', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(23, 'Paper Roll - Brown Sack Kraft 75gr/120cm', 'X121002', 'SINGLE PACKAGING MATERIAL', 'Kg', '2018-08-20 10:14:17', '2018-08-20 03:14:17', NULL),
(24, 'Plastic Robe (Diameter 6)', 'X324028', 'SEMI FINISHED PACKAGING MATERIAL', 'Pcs', '2019-05-21 04:26:53', '2019-05-20 21:26:53', '2019-05-20 21:26:53'),
(25, 'Plastic Robe (Diameter 8)', 'X324029', 'SEMI FINISHED PACKAGING MATERIAL', 'Pcs', '2019-05-21 04:26:39', '2019-05-20 21:26:39', '2019-05-20 21:26:39'),
(26, '9Kg NATURE Premium x 56 (PL # A-240 # 1/1 # POS)', 'X432025', 'FINISHED PRODUCT', 'Bags', '2018-08-20 04:15:39', '2018-08-20 04:15:39', NULL),
(27, '9Kg NATURE Premium x 28 (PL # A-240 # 1/2)', 'X432030', 'FINISHED PRODUCT', 'Bags', '2018-08-20 04:16:01', '2018-08-20 04:16:01', NULL),
(28, 'CS Charcoal PW (Ash 21% - 30%) - Hi', 'X111220', 'C', 'Kg', '2018-08-20 23:29:35', '2018-08-20 23:29:35', NULL),
(29, 'CS Charcoal PW (Ash 21% - 30%) - Low', 'X111221', 'C', 'Kg', '2018-08-21 09:25:34', '2018-08-21 09:25:34', NULL),
(30, 'Paper Bag - NATURE (9Kg) - REJECT', 'X321035-R', 'Reject', 'Bags', '2018-08-21 21:34:57', '2018-08-21 21:34:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_project`
--

CREATE TABLE `detail_project` (
  `id` int(11) NOT NULL,
  `internal_number` varchar(100) NOT NULL,
  `item` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_project`
--

INSERT INTO `detail_project` (`id`, `internal_number`, `item`, `qty`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'LS-CGM # 1709-0003', 19, 300, '2018-08-29 21:55:30', '2018-08-29 21:55:30', NULL),
(2, 'LS-CGM # 1709-0003', 18, 300, '2018-08-29 21:55:30', '2018-08-29 21:55:30', NULL),
(3, 'LS-CGM # 1709-0005', 1, 300, '2018-08-30 02:59:33', '2018-08-30 02:59:33', NULL),
(4, 'LS-CGM # 1709-0005', 2, 300, '2018-08-30 02:59:33', '2018-08-30 02:59:33', NULL),
(5, 'LS-CGM # 1709-0005', 6, 2222, '2018-08-30 02:59:33', '2018-08-30 02:59:33', NULL),
(6, 'LS-CGM # 1709-0005', 16, 45, '2018-08-30 02:59:33', '2018-08-30 02:59:33', NULL),
(7, 'LS-CGM # 1708-0001', 1, 300, '2018-09-13 03:36:05', '2018-09-13 03:36:05', NULL),
(8, 'LS-CGM # 1708-0001', 2, 45, '2018-09-13 03:36:05', '2018-09-13 03:36:05', NULL),
(9, 'LS-CGM # 1708-0002', 18, 45, '2018-09-13 04:54:53', '2018-09-13 04:54:53', NULL),
(10, 'LS-CGM # 1708-0002', 19, 24, '2018-09-13 04:54:53', '2018-09-13 04:54:53', NULL),
(11, 'LS-CGM # 1708-0002', 16, 200, '2018-09-13 04:54:53', '2018-09-13 04:54:53', NULL),
(12, 'LS-CGM # 1709-0002', 8, 500, '2018-09-13 21:28:59', '2018-09-13 21:28:59', NULL),
(13, 'LS-CGM # 1709-0002', 18, 500, '2018-09-13 21:28:59', '2018-09-13 21:28:59', NULL),
(14, 'LS-CGM # 1709-0002', 23, 1000, '2018-09-13 21:28:59', '2018-09-13 21:28:59', NULL),
(15, 'asdasd', 9, 300, '2018-09-14 00:48:32', '2018-09-14 00:48:32', NULL),
(16, 'asdasd', 5, 400, '2018-09-14 00:48:32', '2018-09-14 00:48:32', NULL),
(17, 'asdasd', 22, 500, '2018-09-14 00:48:32', '2018-09-14 00:48:32', NULL),
(18, 'asdasd', 23, 600, '2018-09-14 00:48:32', '2018-09-14 00:48:32', NULL),
(19, 'ZXCVBN', 19, 500, '2018-09-14 01:00:23', '2018-09-14 01:00:23', NULL),
(20, 'TES', 7, 1, '2018-09-14 01:06:44', '2018-09-14 01:06:44', NULL),
(21, 'TES1', 17, 10000, '2018-09-14 19:24:13', '2018-09-14 19:24:13', NULL),
(22, 'medhy', 11, 10000, '2018-09-14 20:47:33', '2018-09-14 20:47:33', NULL),
(23, 'LS-CGM # 1709-0001', 14, 500, '2018-09-14 20:57:44', '2018-09-14 20:57:44', NULL),
(24, 'LS-CGM # 1709-0001', 7, 600, '2018-09-14 20:57:44', '2018-09-14 20:57:44', NULL),
(25, 'LS-CGM#1809-0014', 19, 400, '2018-09-14 20:58:42', '2018-09-14 20:58:42', NULL),
(26, 'TES1', 6, 1000, '2019-05-20 20:54:41', '2019-05-20 20:54:41', NULL),
(27, 'TES1', 18, 2900, '2019-05-20 20:54:41', '2019-05-20 20:54:41', NULL),
(28, 'TES1', 5, 3000, '2019-05-20 20:54:41', '2019-05-20 20:54:41', NULL),
(29, '123', 18, 100, '2019-08-05 00:41:44', '2019-08-05 00:41:44', NULL),
(30, '123', 19, 200, '2019-08-05 00:41:44', '2019-08-05 00:41:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `internal_number` varchar(100) NOT NULL,
  `local_export` varchar(50) NOT NULL,
  `original_port` varchar(50) NOT NULL,
  `destination_port` varchar(50) NOT NULL,
  `container_no` varchar(255) NOT NULL,
  `seal_no` varchar(255) NOT NULL,
  `container_size` varchar(50) NOT NULL,
  `stuffing_date` date NOT NULL,
  `surat_jalan` varchar(255) NOT NULL,
  `at_harbor` date DEFAULT NULL,
  `at_sea` date DEFAULT NULL,
  `at_landed` date DEFAULT NULL,
  `at_received` date DEFAULT NULL,
  `tanda_terima` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `internal_number`, `local_export`, `original_port`, `destination_port`, `container_no`, `seal_no`, `container_size`, `stuffing_date`, `surat_jalan`, `at_harbor`, `at_sea`, `at_landed`, `at_received`, `tanda_terima`, `created_at`, `updated_at`) VALUES
(4, 'LS-CGM # 1708-0002', 'local', 'Bitung', 'Jakarta', 'TEGU 680199-0', '001621', '40', '2018-08-07', 'SJZXCASDQWEPOI', '2018-09-01', '2018-09-03', '2018-09-06', '2018-09-14', 'TTASDQEWREWASD', '2018-09-14 04:17:43', '2018-09-13 21:17:43'),
(5, 'LS-CGM # 1709-0002', 'local', 'Bitung', 'Jakarta', 'SPNU 461887-2', '001659', '40', '2018-09-01', 'SJFGHQWEZXCRE', '2018-09-03', '2018-09-04', '2018-09-05', '2018-09-06', 'TT1234554321', '2018-09-14 04:35:30', '2018-09-13 21:29:51'),
(6, 'asdasd', 'local', 'Bitung', 'Jakarta', 'TEGU-HUAHUA', 'RAHASIA', '40', '2018-09-10', 'SJSURATJALAN', '2018-09-13', '2018-09-14', '2018-09-15', '2018-09-16', NULL, '2018-09-14 07:54:49', '2018-09-14 00:54:49'),
(7, 'ZXCVBN', 'local', 'Bitung', 'Jakarta', 'TEGU', 'QWE', '40', '2018-09-12', 'SJHGFDS', '2018-09-17', '2018-09-18', '2018-09-19', '2018-09-28', NULL, '2018-09-14 08:03:37', '2018-09-14 01:03:23'),
(8, 'TES', 'export', 'Bitung', 'Jakarta', 'ZXVC', '1234', '40', '2018-09-18', 'SJ12345', '2018-09-11', '2018-09-15', '2018-09-10', '2018-09-27', NULL, '2018-09-14 08:12:47', '2018-09-14 01:12:47'),
(9, 'TES1', 'local', 'Bitung', 'Jakarta', 'KASJD', 'adwqwe', '40', '2018-09-11', 'SJKKSALSL', '2018-09-12', '2018-09-13', '2018-09-15', '2018-09-25', 'TT12356', '2018-09-15 03:21:16', '2018-09-14 20:21:16'),
(10, 'medhy', 'local', 'Bitung', 'Jakarta', 'BDSDASH', 'ASJN2132', '40', '2018-09-12', 'SJHDJASAK', NULL, NULL, NULL, NULL, NULL, '2018-09-14 20:47:33', '2018-09-14 20:47:33'),
(11, 'LS-CGM # 1709-0001', 'local', 'Bitung', 'Jakarta', 'SPNU 461508-7', '001658', '40', '2018-09-20', 'SJMXZNJSAJ', NULL, NULL, NULL, NULL, NULL, '2018-09-14 20:57:44', '2018-09-14 20:57:44'),
(12, 'LS-CGM#1809-0014', 'local', 'Bitung', 'Jakarta', 'MRTU 960005-3', 'E 601252', '40', '2018-09-21', 'SJKASJKAJSKAJ', NULL, NULL, NULL, NULL, NULL, '2018-09-14 20:58:42', '2018-09-14 20:58:42'),
(13, 'TES1', 'local', 'Jakarta', 'Manado', 'CGKU098754312', 'L1234', '40', '2019-05-21', 'XXCCVVBBNN', NULL, NULL, NULL, NULL, NULL, '2019-05-20 20:54:41', '2019-05-20 20:54:41'),
(14, '123', 'local', 'Jakarta', 'Bandung', 'CD123', 'CD12345', '40', '2019-08-06', 'NLG2020', '2019-08-05', NULL, NULL, NULL, NULL, '2019-08-05 07:42:15', '2019-08-05 00:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Medhy', 'admin@longhi-group.com', '12345678', 1, '2018-09-14 10:46:48', '0000-00-00 00:00:00', NULL),
(2, 'Widya Nurul Fitri', 'wifi@longhi-group.com', '12345678', 2, '2018-09-05 06:36:41', '0000-00-00 00:00:00', NULL),
(3, 'Slamet Aji Pamungkas', 'ajpa@longhi-group.com', '12345678', 2, '2018-09-13 23:01:47', '2018-09-13 23:01:47', NULL),
(4, 'Nining Budi', 'nb@cavronglobal.com', '12345678', 2, '2018-09-14 10:46:26', '2018-09-13 23:32:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additem`
--
ALTER TABLE `additem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_project`
--
ALTER TABLE `detail_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
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
-- AUTO_INCREMENT for table `additem`
--
ALTER TABLE `additem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `detail_project`
--
ALTER TABLE `detail_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
