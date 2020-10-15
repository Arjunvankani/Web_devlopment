-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 08:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsuccess`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image` tinyint(1) NOT NULL,
  `image_text` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE `image_table` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(50) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`img_id`, `img_name`, `img_path`) VALUES
(1, '4645', 'photo/p3.jpg'),
(2, 'abc', 'photo/upload.png'),
(3, 'a741', 'photo/Screenshot (19).png'),
(4, '111', 'photo/Screenshot (45).png'),
(5, 'kjhg', 'photo/Screenshot (46).png'),
(6, 'abc', 'photo/IT Probable BBV 2019.xls'),
(7, '4645', 'photo/Screenshot (43).png'),
(8, 'mihir', 'photo/p4.webp'),
(9, 'civil', 'photo/p6.jfif'),
(10, '0100', 'photo/Screenshot (1).png'),
(11, 'arjun', 'photo/IMG_20180701_092302_680.jpg'),
(12, 'Arjun0103', 'photo/IMG_20181110_082203_183.jpg'),
(13, 'Bharvi', 'photo/IMG_20180826_145631_390.jpg'),
(14, 'civil', 'photo/180210107054_CompletionCertificate (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `subject` text NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `subject`, `link`, `description`) VALUES
(4, 'Now your work can be complate with in two ours', 'abc', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `user`, `email`, `password`, `mobile`) VALUES
(1, '123', 'adsfdg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `up_img`
--

CREATE TABLE `up_img` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_img`
--

INSERT INTO `up_img` (`id`, `image`) VALUES
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, ''),
(0, '');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `user`, `p_id`, `password`, `comment`, `num`) VALUES
(1, 'a', 0, '', ' \r\n          ', 0),
(2, 'abc', 0, '', '', 0),
(3, 'abc', 0, '', ' \r\n          ', 0),
(4, '', 0, '', '', 0),
(5, 'qcfg', 0, '', '', 0),
(6, 'akshay bhai ', 0, '', '', 0),
(7, 'Dimmnond', 0, 'd1mond', ' ABC\r\n          ', 4),
(8, '', 0, '', ' \r\n          ', 0),
(9, '', 0, '', ' \r\n          ', 0),
(10, '', 0, '', ' \r\n          ', 0),
(11, 'abc', 789, '789452', 'kuch nai', 167),
(12, 'abcdefghijklmn', 0, '', '', 0),
(13, '111111111111111111111', 0, '', '', 0),
(14, '', 0, '', '', 0),
(15, '', 0, '', '', 0),
(16, '', 0, '', ' \r\n          ', 0),
(17, '', 0, '', ' \r\n          ', 0),
(18, '', 0, '', ' \r\n          ', 0),
(19, 'ABC', 0, '', '', 0),
(20, '', 0, '', ' \r\n          ', 0),
(21, '', 0, '', '', 0),
(22, '', 0, '', ' \r\n          ', 0),
(23, '', 0, '', ' \r\n          ', 0),
(24, '', 0, '', ' \r\n          ', 0),
(25, 'richa', 0, '', '', 0),
(26, 'joshi', 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_table`
--
ALTER TABLE `image_table`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`,`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_table`
--
ALTER TABLE `image_table`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
