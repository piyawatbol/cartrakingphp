-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2022 at 06:07 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cartracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_car`
--

CREATE TABLE `tb_car` (
  `car_id` int(10) NOT NULL,
  `lo_driver_lati` varchar(50) NOT NULL,
  `lo_driver_longti` varchar(50) NOT NULL,
  `seat_1` varchar(50) NOT NULL,
  `seat_2` varchar(50) NOT NULL,
  `seat_3` varchar(50) NOT NULL,
  `seat_4` varchar(50) NOT NULL,
  `seat_5` varchar(50) NOT NULL,
  `seat_6` varchar(50) NOT NULL,
  `seat_7` varchar(50) NOT NULL,
  `seat_8` varchar(50) NOT NULL,
  `seat_9` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_car`
--

INSERT INTO `tb_car` (`car_id`, `lo_driver_lati`, `lo_driver_longti`, `seat_1`, `seat_2`, `seat_3`, `seat_4`, `seat_5`, `seat_6`, `seat_7`, `seat_8`, `seat_9`) VALUES
(1, '13.732216666666666', '100.49029666666667', 'empty', '3', '4', '7', '6', '8', 'empty', 'empty', 'empty'),
(2, '13.7329783', '100.48887', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `tb_map`
--

CREATE TABLE `tb_map` (
  `map_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_map`
--

INSERT INTO `tb_map` (`map_id`, `title`, `lat`, `lng`) VALUES
(1, 'คณะ ครุศาสตร์', '13.7321834828', '100.487415791'),
(2, 'โรงเรียนสาธิตมหาวิทยาลัยราชภัฏบ้านสมเด็จฯ', '13.7319', '100.4887'),
(3, 'สำนักส่งเสริมวิชาการและงานทะเบียน', '13.7313510111', '100.490795374'),
(4, 'แหล่งเรียนรู้กรุงธนบุรีศึกษา', '13.7328094007', '100.488688562'),
(5, 'สาขาวิชาสาธารณสุขศาสตร์', '13.7322773', '100.4907417'),
(6, 'ตึก 24 มหาวิทยาลัยราชภัฎบ้านสมเด็จเจ้าพระยา', '13.7313536167', '100.48793748');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `otp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `phone`, `name`, `email`, `user_name`, `pass_word`, `img`, `status`, `otp`) VALUES
(1, '09999999', 'driver1', 'driver1@gmail.com', 'driver1', '123456', '', 'driver', 0),
(2, '0999999901', 'user2', 'user2@gmail.com', 'user2', '123456', 'image_picker4928537288178024549.jpg', 'customer', 0),
(3, '0999999', 'user3', 'user2@gmail.com', 'user3', '123456', '', 'customer', 0),
(4, '09090909', 'user4', 'user4@gmaill.com', 'user4', '123456', '', 'customer', 0),
(5, '090909091', 'user5', 'user5@gmail.com', 'user5', '123456', '', 'customer', 0),
(6, '090456345', 'user6', 'user6@gmail.com', 'user6', '123456', '', 'customer', 0),
(7, '056745634', 'user7', 'user7@gmail.com', 'user7', '123456', '', 'customer', 0),
(8, '1223534634', 'user8', 'user8@gmail.com', 'user8', '123456', '', 'customer', 0),
(9, '0807897', 'user9', 'user9@gmail.com', 'user9', '123456', '', 'customer', 0),
(10, '08078798', 'user10', 'user10@gmail.com', 'user10', '123456', '', 'customer', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_car`
--
ALTER TABLE `tb_car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tb_map`
--
ALTER TABLE `tb_map`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_car`
--
ALTER TABLE `tb_car`
  MODIFY `car_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_map`
--
ALTER TABLE `tb_map`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
