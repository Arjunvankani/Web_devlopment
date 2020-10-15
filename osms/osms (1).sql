-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 10:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'admin', 'admin@osms.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `assests_tb`
--

CREATE TABLE `assests_tb` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) COLLATE utf8_bin NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `porignalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assests_tb`
--

INSERT INTO `assests_tb` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `porignalcost`, `psellingcost`) VALUES
(1, 'Keyboard', '2020-05-01', 0, 10, 600, 900),
(3, 'Keyboard', '2020-05-01', -1, 15, 100, 200),
(4, 'Keyboard', '2020-05-04', 4, 23, 200, 500);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE `assignwork_tb` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` varchar(255) COLLATE utf8_bin NOT NULL,
  `request_description` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_add1` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_add2` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `assign_tech` varchar(255) COLLATE utf8_bin NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`rno`, `request_id`, `request_info`, `request_description`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES
(19, 6, 'ebyesy', 'Laptop', 'Meet shah', 'tirth darshan ', 'uyfuy', 'iytvityv', '4', 364001, 'mshah5225@gmail.com', 8785, 'jani', '2020-05-03'),
(20, 7, 'Laptop', 'Laptop', 'Meet shah', 'iytvityvi', 'yitvityviy', 'bvn', '4', 0, 'mshah5225@gmail.com', 7016160449, 'jani', '2020-05-06'),
(21, 9, 'Laptop', 'Laptop', 'Meet shah', 'tirth darshan ', 'gita chowk', 'bhavnangar', 'Gujarat ', 364001, 'mshah5225@gmail.com', 7016160449, 'jani', '2020-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `cid` int(11) NOT NULL,
  `cname` varchar(60) COLLATE utf8_bin NOT NULL,
  `cadd` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpname` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`cid`, `cname`, `cadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(2, 'Jani', 'Madhuvn', 'Keyboard', 1, 800, 800, '2020-05-03'),
(3, 'Jani', 'Madhuvn', 'Keyboard', 1, 800, 800, '2020-05-03'),
(4, 'Jani', 'Madhuvn', 'Mic ', 2, 200, 400, '2020-05-03'),
(5, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(6, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(7, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(8, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(9, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(10, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(11, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(12, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(13, 'Jani', 'Madhuvn', 'Mic ', 1, 200, 200, '2020-05-03'),
(14, 'Jani', 'Madhuvn', 'Keyboard', 1, 800, 800, '2020-05-03'),
(15, 'Jani', 'Madhuvn', 'Keyboard', 1, 600, 600, '2020-05-03'),
(16, 'Jani', 'Madhuvn', 'Mouse', 1, 200, 200, '2020-05-04'),
(17, 'Jani', 'Madhuvn', 'Mouse', 1, 200, 200, '2020-05-05'),
(18, 'Jani', 'Madhuvn', 'Mouse', 1, 200, 200, '2020-05-04'),
(19, 'Jani', 'Madhuvn', 'Mouse', 1, 200, 200, '2020-05-04'),
(20, 'Jani', 'Madhuvn', 'Mouse', 1, 200, 200, '2020-05-04'),
(21, 'Jani', 'Madhuvn', 'Mouse', 1, 200, 200, '2020-05-04'),
(22, 'Jani', 'Madhuvn', 'Mouse', 1, 200, 200, '2020-05-04'),
(23, 'Nilesh Shah ', 'Madhuvn', 'Keyboard', 1, 600, 600, '2020-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `r_password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(45, 'Meet ', 'mshah5225@gmail.com', '345'),
(53, 'NIlesh', 'nilesh@123.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_description` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(255) NOT NULL,
  `requester_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(10) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_description`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `request_date`) VALUES
(1, 'Laptop', 'Laptop', 'Meet shah', 'tirth darshan ', 'gj', 'bvn', 'gj', 364001, 'mshah5225@gmail.com', 7016160449, '2020-04-26'),
(5, 'Laptop', 'broken laptop', 'Meet shah', 'tirth darshan ', 'gita chowk', 'bhavnangar', 'Gujarat ', 364001, 'mshah5225@gmail.com', 7016160449, '2020-03-04'),
(6, 'ebyesy', 'Laptop', 'Meet shah', 'tirth darshan ', 'uyfuy', 'iytvityv', '4', 364001, 'mshah5225@gmail.com', 8785, '2020-05-24'),
(7, 'Laptop', 'Laptop', 'Meet shah', 'iytvityvi', 'yitvityviy', 'bvn', '4', 0, 'mshah5225@gmail.com', 7016160449, '2020-05-11'),
(8, 'Laptop', 'Laptop', 'Meet shah', 'flate', 'yitvityviy', 'bhavnangar', 'gj', 364001, 'mshah5225@gmail.com', 7016160449, '2020-05-05'),
(9, 'Laptop', 'Laptop', 'Meet shah', 'tirth darshan ', 'gita chowk', 'bhavnangar', 'Gujarat ', 364001, 'mshah5225@gmail.com', 7016160449, '2020-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `empname` varchar(255) COLLATE utf8_bin NOT NULL,
  `empcity` varchar(255) COLLATE utf8_bin NOT NULL,
  `empmobile` bigint(255) NOT NULL,
  `empemail` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empname`, `empcity`, `empmobile`, `empemail`) VALUES
(2, 'Jani Kaushal ', 'Bhavnangar', 7048403078, 'janikaushal@gmail.com'),
(4, 'Arjun Vankani', 'Bvn', 1234, 'arjunvankani@1234'),
(5, 'Maulik Sheth', 'Anand', 12345, 'mauliksheth@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assests_tb`
--
ALTER TABLE `assests_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assests_tb`
--
ALTER TABLE `assests_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
