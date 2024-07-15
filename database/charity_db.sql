-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 12:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `camp_id` int(11) NOT NULL,
  `camp_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `needs` varchar(500) NOT NULL,
  `donate_number` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `address`, `phone`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'omollo edward givenality', 'Dar es Salaam', '0672488849', 'omollogivenality@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2024-04-24 20:18:23'),
(3, 'lolo', 'jjjjg', '9959595955', 'ffmfhffgg@gail.com', '09576ca345d5fa93846760e5be818041', NULL, '2024-04-24 23:05:39'),
(4, 'omary said ipombo', 'kibaha', '0989878765', 'aaaaamm@gmail.com', '09576ca345d5fa93846760e5be818041', NULL, '2024-04-24 23:07:10'),
(5, 'wawaw ', 'jhfhff', '00000000000999', 'kkkkkkkkkkk@gmail.com', '37abe1d6b4f7feab27f061c05d57ac51', NULL, '2024-04-24 23:08:51'),
(6, 'ooooooooooooooo', 'iiiiiiiiiii', '999999999999999', 'kkkkkkkkkkkk@gmail.com', '9be65ae7e4d0c4ec1a7b9a18900d71f0', NULL, '2024-04-24 23:10:52'),
(7, 'kkkkkkkkkkkkk', 'ooooooooooooooo', '9999999999', 'hdddgggg@gmail.com', 'b085c79200cf5e252137dd0689337fb2', NULL, '2024-04-24 23:19:59'),
(8, 'ddddddddddd', 'ddddddddddd', '3333333333', 'dddddddd@gmail.com', '3bb194525a99eacb4bb0292db020aa03', NULL, '2024-04-24 23:22:06'),
(9, 'iiiiiiiii', 'ppppppppppppppppp', '8888888888', 'kaka@gmail.com', '93279e3308bdbbeed946fc965017f67a', NULL, '2024-04-24 23:54:19'),
(10, 'Edward givenality', 'kibaha', '0898978765', 'yaya@gmail.co', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2024-04-25 10:05:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
