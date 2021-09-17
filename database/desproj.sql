-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 06:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middleinit` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `birthday` date NOT NULL,
  `position` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `idnum` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `lastname`, `firstname`, `middleinit`, `contact`, `gender`, `age`, `birthday`, `position`, `email`, `password`, `role`, `idnum`) VALUES
(1, 'Talip', 'Angelo', 'R', '9167543955', 'Male', 21, '0000-00-00', 'Counselor', 'talipangelo@yahoo.com', '$2y$10$RjPIZsoqXzRKn3CYPWBvxuWxUd0eG3Nlr64v9QToV8xpNsqFxq8rG', 'Counselor', 1),
(3, 'Petrola', 'John Daniel', 'T', '9159897851', 'Male', 22, '0000-00-00', '', 'jdp@email.com', '123', 'Administrator', 2),
(4, 'Relloso', 'Joemel', 'C', '9123456789', 'Male', 22, '0000-00-00', '', 'jr@email.com', '123', 'Administrator', 3),
(5, 'khada', 'jhin', 'd', '123456789', 'Male', 18, '0000-00-00', '', 'talipgaming01@gmail.com', '$2y$10$bnNmb0UUdyvpSHG.RWZfbummlgQmUcvDhgGoPBxKFtLww1j.P.d/m', 'Administrator', 4),
(6, 'sintos', 'jimmy', 'd', '123456789', 'Male', 40, '0000-00-00', 'Dean', 'sjj@email.com', '$2y$10$39o7rWv7q72yy3uasZnNYOIAnyPqMjMidk3av7SDH29KM1z6TZIyu', 'Counselor', 5),
(7, 'petrola', 'Petrola', 'Petrola', '123', 'Male', 18, '0000-00-00', 'Dean', 'pet123@email.com', '$2y$10$p.OZaX3z4nzhDHyWoaAK3O9yzUa4.6zTc4zdXHkXQfPN1fYUoQYda', 'Counselor', 123),
(9, 'Quijano', 'Adrian', 'C', '12345', 'Male', 22, '2010-04-02', 'Instructor', 'atalip123@email.com', '$2y$10$eOMXhceG2f5Ctkrr95F5IeRSsp0hj6Qxlt0aDzx3PdZvm9h4G9YCK', 'Administrator', 15);

-- --------------------------------------------------------

--
-- Table structure for table `arecords`
--

CREATE TABLE `arecords` (
  `id` int(11) NOT NULL,
  `student_lastname` text NOT NULL,
  `student_firstname` text NOT NULL,
  `student_course` text NOT NULL,
  `student_yrlvl` text NOT NULL,
  `date` date NOT NULL,
  `time_start` text NOT NULL,
  `time_end` text NOT NULL,
  `venue` text NOT NULL,
  `subject` text NOT NULL,
  `section` text NOT NULL,
  `problem` text NOT NULL,
  `action` text NOT NULL,
  `recommendation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arecords`
--

INSERT INTO `arecords` (`id`, `student_lastname`, `student_firstname`, `student_course`, `student_yrlvl`, `date`, `time_start`, `time_end`, `venue`, `subject`, `section`, `problem`, `action`, `recommendation`) VALUES
(1, '1', '1', '1', '1', '0000-00-00', '111', '111', 'uphsd', 'hello', 'aaa', 'aadadadada', 'adadadada', 'adadadada'),
(880, 'aaff', 'qqfqfq', 'cpe', '4', '0000-00-00', '111', '111', 'uphsd', 'hello', 'aaa', 'hhhhhhhhhhhhhhhhh', 'hhhhhhhhhh', 'hhhh');

-- --------------------------------------------------------

--
-- Table structure for table `crecords`
--

CREATE TABLE `crecords` (
  `id` int(11) NOT NULL,
  `idnum` text NOT NULL,
  `student_lastname` text NOT NULL,
  `student_firstname` text NOT NULL,
  `student_course` text NOT NULL,
  `student_yrlvl` int(1) NOT NULL,
  `date` text NOT NULL,
  `time_start` timestamp(6) NULL DEFAULT NULL,
  `time_end` timestamp(6) NULL DEFAULT NULL,
  `venue` text NOT NULL,
  `reason` text NOT NULL,
  `o1_attend` text NOT NULL,
  `o1_others` text NOT NULL,
  `o2_appearance` text NOT NULL,
  `o2_others` text NOT NULL,
  `o3_attitude` text NOT NULL,
  `o3_others` text NOT NULL,
  `demands` text NOT NULL,
  `demands_explain` text NOT NULL,
  `corr_action` text NOT NULL,
  `corr_action_explain` text NOT NULL,
  `next_session` text NOT NULL,
  `c_comments` text NOT NULL,
  `s_comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `user_lastname` text NOT NULL,
  `user_firstname` text NOT NULL,
  `user_role` text NOT NULL,
  `action` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `users_id`, `user_lastname`, `user_firstname`, `user_role`, `action`, `ip`, `created_at`, `updated_at`) VALUES
(20, 5, 'khada', 'jhin', 'Counselor', 'logged in successfully', '::1', '2021-05-19 19:31:21', '2021-05-19 19:31:21'),
(21, 5, 'khada', 'jhin', 'Counselor', 'logged out successfully', '::1', '2021-05-19 19:35:56', '2021-05-19 19:35:56'),
(22, 5, 'khada', 'jhin', 'Counselor', 'logged in successfully', '::1', '2021-05-19 21:14:48', '2021-05-19 21:14:48'),
(23, 5, 'khada', 'jhin', 'Counselor', 'logged out successfully', '::1', '2021-05-19 21:34:03', '2021-05-19 21:34:03'),
(24, 1, 'Talip', 'Angelo', 'Counselor', 'logged in successfully', '::1', '2021-05-20 19:07:30', '2021-05-20 19:07:30'),
(25, 1, 'Talip', 'Angelo', 'Counselor', 'created counseling record successfully', '::1', '2021-05-20 19:10:24', '2021-05-20 19:10:24'),
(26, 1, 'Talip', 'Angelo', 'Counselor', 'logged in successfully', '::1', '2021-05-21 09:26:13', '2021-05-21 09:26:13'),
(27, 1, 'Talip', 'Angelo', 'Counselor', 'logged out successfully', '::1', '2021-05-21 22:24:17', '2021-05-21 22:24:17'),
(28, 1, 'Talip', 'Angelo', 'Counselor', 'logged in successfully', '::1', '2021-05-21 22:24:48', '2021-05-21 22:24:48'),
(29, 1, 'Talip', 'Angelo', 'Counselor', 'logged out successfully', '::1', '2021-05-21 22:24:58', '2021-05-21 22:24:58'),
(30, 5, 'khada', 'jhin', 'Administrator', 'logged out successfully', '::1', '2021-05-21 23:21:08', '2021-05-21 23:21:08'),
(31, 5, 'khada', 'jhin', 'Administrator', 'logged out successfully', '::1', '2021-05-21 23:22:37', '2021-05-21 23:22:37'),
(32, 5, 'khada', 'jhin', 'Administrator', 'edited an account successfully', '::1', '2021-05-21 23:30:30', '2021-05-21 23:30:30'),
(33, 5, 'khada', 'jhin', 'Administrator', 'removed an account successfully', '::1', '2021-05-21 23:35:24', '2021-05-21 23:35:24'),
(34, 5, 'khada', 'jhin', 'Administrator', 'created academic counseling record successfully', '::1', '2021-05-22 23:29:26', '2021-05-22 23:29:26'),
(35, 5, 'khada', 'jhin', 'Administrator', 'created academic counseling record successfully', '::1', '2021-05-22 23:41:10', '2021-05-22 23:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `idnum` varchar(11) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middleinitial` text NOT NULL,
  `course` text NOT NULL,
  `yearlevel` text NOT NULL,
  `age` text NOT NULL,
  `gender` text NOT NULL,
  `civilstatus` text NOT NULL,
  `citizenship` text NOT NULL,
  `religion` text NOT NULL,
  `birthday` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `scholarship` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `idnum`, `lastname`, `firstname`, `middleinitial`, `course`, `yearlevel`, `age`, `gender`, `civilstatus`, `citizenship`, `religion`, `birthday`, `contact`, `address`, `scholarship`) VALUES
(1, '123', 'talip', 'angelo', 'r', 'cpe', '5', '22', 'Male', 'single', 'filipino', 'catholic', '7/21/99', '123', 'las pinas city', 'n/a'),
(2, '456', 'aa', 'bbb', 'ccc', 'ce', '4', '37', 'Male', 'aaa', 'aaa', 'aaa', '123', 'aaa', 'aaa', 'n/a'),
(3, '887', 'eee', 'fff', 'ggg', 'cpe', '2', '33', 'Male', 'iii', 'ooo', 'ppp', '8765', '5432', 'alalalalala', 'n/a'),
(4, '880', 'aaff', 'qqfqfq', 'faffae', 'cpe', '4', '32', 'Female', 'sggs', 'sgsgrs', 'sgsgsr', 'gsgsrgsgr', '1112121', 'srgsrgsg', 'n/a'),
(5, '90909', 'qqq', 'www', 'eee', 'ae', '2', '18', 'Male', 'rrr', 'ttt', 'yyy', '12345', '12345', 'alalalalala', 'n/a'),
(6, '778', 'Knowledge', 'Patchouli', 'B', 'marine', '1', '18', 'Female', 'Single', 'Japanese', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a'),
(7, '000999', 'Mario', 'Mario', 'M', 'me', '4', '80', 'Male', 'aaa', 'bbb', 'ccc', 'ddd', 'eee', 'fff', 'gggg'),
(8, '000999', 'Mario', 'Mario', 'M', 'me', '4', '80', 'Male', 'aaa', 'bbb', 'ccc', 'ddd', 'eee', 'fff', 'gggg'),
(9, '000999', 'Mario', 'Mario', 'M', 'me', '4', '80', 'Male', 'aaa', 'bbb', 'ccc', 'ddd', 'eee', 'fff', 'gggg'),
(11, '15-0861-848', 'Garcia', 'Abcde', 'F', 'me', '5', '35', 'Male', 'Married', 'Chinese', 'Buddhism', '02-29-1998', '09123456789', 'LAS PINAS CITY', 'n/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `idnum` (`idnum`);

--
-- Indexes for table `crecords`
--
ALTER TABLE `crecords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idnum` (`idnum`) USING HASH;

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `crecords`
--
ALTER TABLE `crecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
