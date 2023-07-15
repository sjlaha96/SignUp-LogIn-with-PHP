-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 04:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laha_96`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_project_user`
--

CREATE TABLE `mini_project_user` (
  `user_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `pic_source` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_project_user`
--

INSERT INTO `mini_project_user` (`user_id`, `name`, `email`, `password`, `phone`, `pic_source`) VALUES
(2, 'Nirmal Laha', 'nirmallaha103@gmail.com', 'nirmal103', 9231672517, NULL),
(3, 'Nirmal Laha', 'nirmallaha103@gmail.com', 'f9990e129e77c5e2abb2268c4d735902', 9231672517, NULL),
(4, 'Uma Laha', 'umalaha2019@gmail.com', '866695d20bbf3b1c06bdf0a1e6133575', 9163024615, NULL),
(5, 'Subhajit Laha', 'sjlaha2017@gmail.com', '96605b1783b3c80ba7014bc77c4996b5', 8981292973, NULL),
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'image/'),
(7, 'Laha', 'laha@gmail.com', '828e6def2b32f1dbca756f5b23ce47c2', 7894561230, 'image/2.jpg'),
(8, 'Laha1', 'laha@mail.com', 'laha1996', 123456789, 'image/2.jpg'),
(9, 'Subhajit Laha', '', '', 8981292973, 'image/'),
(10, 'Subhajit Laha', 'sjlaha2017@gmail.com', 'laha96', 8981292973, 'image/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mini_project_user`
--
ALTER TABLE `mini_project_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mini_project_user`
--
ALTER TABLE `mini_project_user`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
