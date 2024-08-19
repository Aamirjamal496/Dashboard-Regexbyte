-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 07:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboardregexbyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `description`) VALUES
(54, '4343', '1', '4343'),
(55, 'knk', '1', 'gcfgh'),
(56, 'fwew', '0', 'fweew'),
(57, 'fwew', '0', 'fweew');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `profile` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`profile`, `id`, `title`, `status`, `description`) VALUES
('user.png', 1, 'Slider 1', '1', 'Slider One'),
('edit1.png', 2, 'Slider 2', '1', 'Slider Second'),
('logo.png', 5, 'Slider 3', '1', 'Slider Three');

-- --------------------------------------------------------

--
-- Table structure for table `user-table`
--

CREATE TABLE `user-table` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(40) NOT NULL,
  `created-at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-table`
--

INSERT INTO `user-table` (`id`, `firstname`, `lastname`, `email`, `Password`, `phone`, `image`, `status`, `created-at`) VALUES
(18, 'Majid', 'khan', 'm@gmail', '$2y$10$xbOcA2m/AgQU.bih8u0JUOV3WtYIExVXzCRLc.PLr7I3kLt0vItym', 232323, 'user.png', 'inactive', '0000-00-00 00:00:00'),
(19, 'Majid', 'khan', 'm1@gmail', '$2y$10$BijaBi3bGEiue2drIc/htOdfv9yrtnnl0vnDD.fZf4j4JPfa8tpDu', 12121212, 'user.png', 'active', '2021-12-12 00:00:00'),
(27, ',mw', 'qlldmk', 'Q@gmail', '$2y$10$4al6ioGgjzAL/jS6sgNgeOeGtBP0guL03j.et9IYVthbIpDNJk1BO', 12121212, 'RBlogo.jfif', 'active', '1221-12-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-table`
--
ALTER TABLE `user-table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user-table`
--
ALTER TABLE `user-table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
