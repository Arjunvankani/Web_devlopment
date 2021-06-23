-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 02:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solid`
--

-- --------------------------------------------------------

--
-- Table structure for table `arjun_peter`
--

CREATE TABLE `arjun_peter` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arjun_peter`
--

INSERT INTO `arjun_peter` (`ID`, `Messages`, `Time`, `Usernames`) VALUES
(1, 'hey\r\n', '2021-06-23 12:54:06', 'arjun'),
(2, 'what?\r\n', '2021-06-23 12:54:23', 'Peter'),
(3, 'nothing??what about you\r\n', '2021-06-23 12:54:44', 'arjun'),
(4, 'great\r\n', '2021-06-23 12:54:52', 'Peter');

-- --------------------------------------------------------

--
-- Table structure for table `arjun_peter_uploads`
--

CREATE TABLE `arjun_peter_uploads` (
  `ID` int(11) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general_announcement`
--

CREATE TABLE `general_announcement` (
  `id` int(11) NOT NULL,
  `message_title` varchar(255) NOT NULL,
  `message_body` mediumtext NOT NULL,
  `sender` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_announcement`
--

INSERT INTO `general_announcement` (`id`, `message_title`, `message_body`, `sender`, `date`) VALUES
(1, 'Easter Break !!', 'There would be an Easter break on 29th April 2016', 'Peter', '2017-04-13 01:27:06'),
(2, 'Christmas  Break', 'There would be a general christmas break on 20th December, this year', 'priscilla', '2017-05-08 22:19:45'),
(3, 'Holiday', 'Two days Mini vacation', 'Peter', '2021-06-23 12:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `public_messages`
--

CREATE TABLE `public_messages` (
  `Msg_ID` int(11) NOT NULL,
  `Sender` tinytext NOT NULL,
  `Message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public_messages`
--

INSERT INTO `public_messages` (`Msg_ID`, `Sender`, `Message`, `date`) VALUES
(1, 'Peter', 'PeterDonk is here', '2017-04-13 01:26:02'),
(2, 'Peter', 'Hellow All', '2017-05-04 00:25:39'),
(3, 'priscilla', 'priscilla is also here', '2017-05-05 22:37:05'),
(4, 'priscilla', 'Hellow All', '2017-05-08 22:37:15'),
(5, 'arjun', 'heya\n', '2021-06-23 12:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general_uploads`
--

CREATE TABLE `tbl_general_uploads` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`ID`, `first_name`, `last_name`, `status`, `Time`) VALUES
(1, 'peter', 'Donkor', 'online', '2017-06-14 22:35:12'),
(2, 'arjun', 'vankani', 'online', '2021-06-23 12:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `users_security_keys`
--

CREATE TABLE `users_security_keys` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `users_fname` varchar(255) NOT NULL,
  `users_lname` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'not_used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_security_keys`
--

INSERT INTO `users_security_keys` (`id`, `password`, `users_fname`, `users_lname`, `status`) VALUES
(1, '0688D', 'Peter', 'Donkor', 'used'),
(3, '0661', 'priscilla', 'appah', 'used');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `Users_ID` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `Profile_Picture` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`Users_ID`, `user_fname`, `user_lname`, `Password`, `department`, `position`, `Profile_Picture`, `date`) VALUES
(1, 'Peter', 'Donkor', 'Donk', 'Accountancy', 'Director', 'IMG_100887.jpg', '2017-04-13 01:24:56'),
(2, 'John', 'Doe', 'Doe', 'Accountancy', 'Director', '', '2017-04-21 10:14:17'),
(3, 'priscilla', 'appah', 'house', 'Purchasing', 'Secretary', '', '2017-05-05 22:35:15'),
(4, 'arjun', 'vankani', '123', 'programming', 'devloper', 'img.jpg', '2021-06-23 12:50:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arjun_peter`
--
ALTER TABLE `arjun_peter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `arjun_peter_uploads`
--
ALTER TABLE `arjun_peter_uploads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `general_announcement`
--
ALTER TABLE `general_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_messages`
--
ALTER TABLE `public_messages`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `tbl_general_uploads`
--
ALTER TABLE `tbl_general_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_security_keys`
--
ALTER TABLE `users_security_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`Users_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arjun_peter`
--
ALTER TABLE `arjun_peter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `arjun_peter_uploads`
--
ALTER TABLE `arjun_peter_uploads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_announcement`
--
ALTER TABLE `general_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `public_messages`
--
ALTER TABLE `public_messages`
  MODIFY `Msg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_general_uploads`
--
ALTER TABLE `tbl_general_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_security_keys`
--
ALTER TABLE `users_security_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `Users_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
