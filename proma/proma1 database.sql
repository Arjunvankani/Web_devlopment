-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 08:18 AM
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
-- Database: `proma1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(20) NOT NULL,
  `emp_fname` varchar(20) DEFAULT NULL,
  `emp_lname` varchar(20) DEFAULT NULL,
  `emp_email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `man_id` varchar(20) DEFAULT NULL,
  `emp_profile` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_fname`, `emp_lname`, `emp_email`, `password`, `man_id`, `emp_profile`) VALUES
('e1', 'jani', 'j', 'j@gmail.com', '0103', 'man1', NULL),
('e2', 'denes', 'vaghani', 'denes@gmail.com', '123', 'man1', NULL),
('e3', 'ravi', 'vaghani', 'ravi@vaghani.com', '12345', 'man1', NULL),
('e4', 'h', 't', 'ht@gmail.com', '12345', 'man1', NULL),
('man1', 'Project', 'Manager', 'devloper@gmail.com', '12345', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forworded_task`
--

CREATE TABLE `forworded_task` (
  `p_id` varchar(20) NOT NULL,
  `t_id` varchar(20) NOT NULL,
  `femp_id` varchar(20) NOT NULL,
  `remp_id` varchar(20) NOT NULL,
  `reason` text,
  `fdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forworded_task`
--

INSERT INTO `forworded_task` (`p_id`, `t_id`, `femp_id`, `remp_id`, `reason`, `fdate`) VALUES
('p1', 'mod1', 'e3', 'e4', 'dsfa', '2019-10-17'),
('p1', 'mod1', 'e3', 'e4', 'dsfa', '2019-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `man_id` varchar(20) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`man_id`, `emp_id`, `password`) VALUES
('arjun', 'e2', '0103'),
('man1', 'man1', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `managerleader`
--

CREATE TABLE `managerleader` (
  `man_id` varchar(20) NOT NULL,
  `lead_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` varchar(20) NOT NULL,
  `p_name` varchar(20) DEFAULT NULL,
  `man_id` varchar(20) DEFAULT NULL,
  `lead_id` varchar(20) DEFAULT NULL,
  `dsc` varchar(1000) DEFAULT NULL,
  `p_bdate` date DEFAULT NULL,
  `p_cdate` date DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `p_name`, `man_id`, `lead_id`, `dsc`, `p_bdate`, `p_cdate`, `status`) VALUES
('p1', 'Googlehome', 'man1', 'l1', 'Chat bot', '2019-10-12', '2019-10-12', '0'),
('p10', '00000', 'man1', 'l10', '00000', '2020-03-07', '2020-03-13', '0'),
('p11', 'TO do', 'man1', 'l11', 'to dooooo', '2020-04-30', '2020-03-06', '0'),
('p12', 'zcz', 'l2', 'l12', '', '2020-02-27', '2020-03-06', '0'),
('p13', 'ashlesha', 'arjun', 'l13', 'description', '2020-04-14', '2020-04-24', '0'),
('p2', 'Abc', '', 'l2', 'tht ', '2020-02-23', '2020-03-26', '0'),
('p3', 'assistance', 'man1', 'l3', 'about voice recognize', '2020-02-26', '2020-03-25', '0'),
('p4', 'assistance', 'man1', 'l4', 'VOICE', '2020-02-27', '2020-03-31', '0'),
('p5', 'jani', 'man1', 'l5', 'okiee', '2020-02-28', '2020-02-29', '0'),
('p6', 'assistance', 'man1', 'l6', 'kkkk', '2020-02-28', '2020-03-21', '0'),
('p7', 'assistance', 'man1', 'l7', 'po', '2020-03-05', '2020-03-07', '0'),
('p8', '', 'man1', 'l8', '', '0000-00-00', '0000-00-00', '0'),
('p9', 'zzzz', 'man1', 'l9', '111', '2020-02-25', '2020-11-29', '0');

-- --------------------------------------------------------

--
-- Table structure for table `projectemployees`
--

CREATE TABLE `projectemployees` (
  `p_id` varchar(20) DEFAULT NULL,
  `emp_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectemployees`
--

INSERT INTO `projectemployees` (`p_id`, `emp_id`) VALUES
('p1', 'e3'),
('p1', 'e4'),
('p1', 'e1'),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', ''),
('p2', 'e1'),
('p2', 'e2'),
('p2', 'e3'),
('p2', 'e4'),
('p2', 'e3'),
('p3', ''),
('p3', ''),
('p3', ''),
('p3', ''),
('p3', 'e2'),
('p4', 'e1'),
('p4', 'e2'),
('p4', 'e3'),
('p4', 'e4'),
('p4', 'E5'),
('p4', ''),
('p4', 'e2'),
('p5', ''),
('p5', ''),
('p5', ''),
('p5', ''),
('p5', 'e4'),
('p6', ''),
('p6', ''),
('p6', ''),
('p6', ''),
('p6', 'e4'),
('p7', ''),
('p7', ''),
('p7', ''),
('p7', ''),
('p7', 'l1'),
('p8', ''),
('p8', ''),
('p8', ''),
('p8', ''),
('p8', ''),
('p9', ''),
('p9', ''),
('p9', ''),
('p9', ''),
('p9', ''),
('p9', ''),
('p9', 'e2'),
('p10', ''),
('p10', ''),
('p10', ''),
('p10', ''),
('p10', ''),
('p10', 'e4'),
('p11', ''),
('p11', ''),
('p11', ''),
('p11', ''),
('p11', ''),
('p11', ''),
('p11', ''),
('p11', ''),
('p11', 'man1'),
('p12', '1'),
('p12', '2'),
('p12', '3'),
('p12', '4'),
('p12', 'e2'),
('p13', 'e1'),
('p13', 'e2'),
('p13', 'e3'),
('p13', 'e4'),
('p13', 'e5'),
('p13', 'e1');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_id` varchar(20) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `t_name` varchar(20) DEFAULT NULL,
  `dsc` varchar(1000) DEFAULT NULL,
  `due_date` date NOT NULL,
  `t_priority` varchar(5) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`t_id`, `p_id`, `t_name`, `dsc`, `due_date`, `t_priority`, `status`) VALUES
('mod1', 'p13', 'civil', 'civil', '0000-00-00', NULL, 0),
('mod2', 'p13', 'irrifgation', 'xyz', '0000-00-00', NULL, 0),
('mod3', 'p13', 'abc', 'abc', '0000-00-00', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teamleader`
--

CREATE TABLE `teamleader` (
  `lead_id` varchar(20) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `p_id` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamleader`
--

INSERT INTO `teamleader` (`lead_id`, `emp_id`, `p_id`, `password`) VALUES
('l1', 'e2', 'p1', '12345'),
('l10', 'e4', 'p10', '111111122222'),
('l11', 'man1', 'p11', '12345'),
('l12', 'e2', 'p12', '112'),
('l13', 'e1', 'p13', '0103'),
('l2', 'e3', 'p2', '12345'),
('l3', 'e2', 'p3', 'jani'),
('l4', 'e2', 'p4', 'jani'),
('l5', 'e4', 'p5', '101020'),
('l6', 'e4', 'p6', 'jani'),
('l7', 'l1', 'p7', 'man1'),
('l8', '', 'p8', ''),
('l9', 'e2', 'p9', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `emp_id` varchar(20) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `t_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`emp_id`, `p_id`, `t_id`) VALUES
('e4', 'p1', 'mod1'),
('e4', 'p1', 'mod2'),
('e4', 'p1', 'mod2'),
('dd', 'p1', 'as'),
('e4', 'p1', 'eed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_email` (`emp_email`),
  ADD UNIQUE KEY `emp_email_2` (`emp_email`),
  ADD KEY `employee_ibfk_1` (`man_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`man_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `managerleader`
--
ALTER TABLE `managerleader`
  ADD KEY `lead_id` (`lead_id`),
  ADD KEY `man_id` (`man_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `teamleader`
--
ALTER TABLE `teamleader`
  ADD PRIMARY KEY (`lead_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `t_id` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
