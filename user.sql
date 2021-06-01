-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 04:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conf_password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2 COMMENT '1-admin 2-user',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `conf_password`, `gender`, `email`, `number`, `address`, `file`, `role`, `date`) VALUES
(6, 'test user', 'MTIzNDU=', 'MTIzNDU=', 'male', 'test@gmail.com', '6510513015342', 'hello india', 'img_folder/user2-160x160.jpg', 2, '2021-06-01 01:35:28'),
(9, 'testing', 'MTIzNDU=', 'MTIzNDU=', 'female', 'u@gmail.com', '44444444444', 'Mangammanapalya', 'img_folder/team-3.jpg', 2, '2021-06-01 14:05:41'),
(10, 'Raish Alam', 'MTIzNDU=', 'MTIzNDU=', 'male', 'a@gmail.com', '8882672846', 'abcdefgh\r\n', 'img_folder/img_3.jpg', 1, '2021-06-01 17:12:37'),
(11, 'Raish Alam', 'MTIzNDU=', 'MTIzNDU=', 'female', 'raishalam043@gmail.com', '8888888888888', 'kgggggggggggg', 'img_folder/logo_1.png', 2, '2021-06-01 18:50:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
