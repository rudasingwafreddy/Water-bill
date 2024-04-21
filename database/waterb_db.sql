-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 10:55 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waterb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `billid` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_adderss` varchar(100) NOT NULL,
  `cust_phone` varchar(40) NOT NULL,
  `meter_cons` varchar(20) NOT NULL,
  `unitprice` varchar(20) NOT NULL,
  `meterpen` varchar(20) NOT NULL,
  `totprrice` varchar(20) NOT NULL,
  `meternum` varchar(100) NOT NULL,
  `empid` int(10) NOT NULL,
  `empnames` varchar(100) NOT NULL,
  `dates` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT 'honorine@gmail.com'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`billid`, `cust_id`, `cust_name`, `cust_adderss`, `cust_phone`, `meter_cons`, `unitprice`, `meterpen`, `totprrice`, `meternum`, `empid`, `empnames`, `dates`, `status`, `email`) VALUES
(1, 1, 'NZEYIMANA EMMANUEL', 'huye', '0788368333', '43', '200', '400', '100', '234', 1, 'UWASE Odilla', '2023-08-26 09:52:19', 'Confirmed', 'johncthe1@gmail.com'),
(2, 3, 'theophille', 'kigali', '0788878180', '8', '350', '400', '3200', '465', 1, 'UWASE Odilla', '2023-11-10 12:09:00', 'Confirmed', 'honorine@gmail.com'),
(3, 3, 'theophille', 'kigali', '0788878180', '8', '350', '400', '3200', '465', 1, 'UWASE Odilla', '2023-11-10 12:10:00', 'Confirmed', 'honorine@gmail.com'),
(4, 3, 'theophille', 'kigali', '0788878180', '12', '100', '0', '1200', '465', 1, 'UWASE Odilla', '2023-12-17 19:52:53', 'Confirmed', 'honorine@gmail.com'),
(5, 1, 'NZEYIMANA EMMANUEL', 'huye', '0789775066', '1', '100', '0', '100', '12345', 1, 'UWASE Odilla', '2023-12-17 23:35:06', 'Confirmed', 'emmy24nzeyi@gmail.com'),
(6, 5, 'Jean Claude', 'KicukiroGatenga', '0789775066', '1', '100', '0', '100', '22332', 1, 'UWASE Odilla', '2023-12-19 18:49:52', 'Not Paid', 'johncthe1@gmail.com'),
(7, 1, 'NZEYIMANA EMMANUEL', 'huye', '0789775066', '1', '100', '0', '100', '123445', 1, 'UWASE Odilla', '2023-12-20 11:03:08', 'Not Paid', 'emmy24nzeyi@gmail.com'),
(8, 6, 'newuser@gmail.com', 'KicukiroGatenga', '0789775066', '1', '100', '0', '100', '998875', 1, 'UWASE Odilla', '2023-12-20 11:04:09', 'Confirmed', 'newuser@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cid` int(10) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `c_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'initial'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cid`, `cname`, `cpass`, `address`, `email`, `c_mobile`, `date_time`, `status`) VALUES
(1, 'NZEYIMANA EMMANUEL', '123', 'huye', 'emmy24nzeyi@gmail.com', '0789775066', '2023-08-26 09:44:15', 'registered'),
(2, 'vava', 'vava12', 'huye', 'vava@gmail.com', '0177878787', '2023-11-10 05:54:58', 'registered'),
(3, 'theophille', '123', 'kigali', 'theo@gmail.com', '0788878180', '2023-11-10 11:50:09', 'registered'),
(4, 'Eric', 'Kigali', 'Rubavu', 'vava@gmail.com', '0780828597', '2023-12-04 22:31:27', 'registered'),
(5, 'johncthe1@gmail.com', '123', 'Kicukiro\r\nGatenga', 'johncthe1@gmail.com', '0789775066', '2023-12-19 17:36:04', 'registered'),
(6, 'newuser@gmail.com', '123', 'Kicukiro\r\nGatenga', 'newuser@gmail.com', '0789775066', '2023-12-20 10:54:56', 'registered'),
(7, 'new user 1', '123', 'Kicukiro\r\nGatenga', 'newuser1@gmail.com', '0789775066', '2023-12-20 11:45:08', 'registered'),
(8, 'newuser12e@gmail.com', '123', 'newuser12e@gmail.com', 'newuser12e@gmail.com', '0789775066', '2023-12-20 13:37:08', 'registered'),
(9, 'nownow@gmail.com', '123', 'nownow@gmail.com', 'nownow@gmail.com', '0789775066', '2023-12-20 13:40:49', 'Requested'),
(10, 'kamana', '1234', 'here', 'kamana@gmail.com', '0789898765', '2023-12-21 11:26:07', 'Requested');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `eid` int(10) NOT NULL,
  `ename` varchar(40) NOT NULL,
  `epass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `e_mobile` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`eid`, `ename`, `epass`, `address`, `email`, `e_mobile`, `date_time`) VALUES
(1, 'UWASE Odilla', '123', 'hy', 'usanase203@gmail.com', '0784880359', '2023-08-26 09:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meter`
--

CREATE TABLE `tbl_meter` (
  `mid` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `meterNum` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `comp_desc` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_meter`
--

INSERT INTO `tbl_meter` (`mid`, `cust_id`, `cust_name`, `meterNum`, `create_date`, `comp_desc`, `status`) VALUES
(1, 1, 'NZEYIMANA EMMANUEL', '123445', '2023-08-26 09:49:40', 'this is johb', 'open'),
(2, 2, 'vava', '12345678', '2023-11-10 05:56:43', 'this is vava', 'open'),
(3, 1, 'NZEYIMANA EMMANUEL', '332244', '2023-11-10 05:56:57', 'this is johb', 'open'),
(4, 3, 'theophille', '465', '2023-11-10 11:56:39', 'nbnnj,ghf', 'open'),
(10, 5, 'johncthe1@gmail.com', '22332', '2023-12-19 18:47:10', 'this is john', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payid` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_adderss` varchar(100) NOT NULL,
  `cust_phone` varchar(40) NOT NULL,
  `meter_cons` varchar(20) NOT NULL,
  `unitprice` varchar(20) NOT NULL,
  `meterpen` varchar(20) NOT NULL,
  `totprrice` varchar(20) NOT NULL,
  `meternum` varchar(100) NOT NULL,
  `dates` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Process',
  `empid` int(10) NOT NULL,
  `billid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payid`, `cust_id`, `cust_name`, `cust_adderss`, `cust_phone`, `meter_cons`, `unitprice`, `meterpen`, `totprrice`, `meternum`, `dates`, `status`, `empid`, `billid`) VALUES
(1, 3, 'theophille', 'kigali', '0788878180', '8', '350', '400', '3200', '465', '2023-11-10 12:10:40', 'Confirmed', 1, 2),
(2, 1, 'NZEYIMANA EMMANUEL', 'huye', '0788368333', '43', '200', '400', '9000', '234', '2023-12-04 22:44:59', 'Confirmed', 1, 1),
(3, 1, 'NZEYIMANA EMMANUEL', 'huye', '0788368333', '43', '200', '400', '9000', '234', '2023-12-04 22:47:28', 'Confirmed', 1, 1),
(4, 1, 'NZEYIMANA EMMANUEL', 'huye', '0788368333', '43', '200', '400', '9000', '234', '2023-12-15 08:17:37', 'Confirmed', 1, 1),
(5, 1, 'NZEYIMANA EMMANUEL', 'huye', '0788368333', '43', '200', '400', '9000', '234', '2023-12-15 08:17:50', 'Confirmed', 1, 1),
(6, 1, 'NZEYIMANA EMMANUEL', 'huye', '0788368333', '43', '200', '400', '9000', '234', '2023-12-17 19:55:27', 'Confirmed', 1, 1),
(7, 1, 'NZEYIMANA EMMANUEL', 'huye', '0788368333', '43', '200', '400', '9000', '234', '2023-12-17 20:23:46', 'Confirmed', 1, 1),
(8, 1, 'NZEYIMANA EMMANUEL', 'huye', '0788368333', '43', '200', '400', '9000', '234', '2023-12-17 20:23:59', 'Confirmed', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`billid`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tbl_meter`
--
ALTER TABLE `tbl_meter`
  ADD PRIMARY KEY (`mid`),
  ADD UNIQUE KEY `meterNum` (`meterNum`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `billid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_meter`
--
ALTER TABLE `tbl_meter`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
