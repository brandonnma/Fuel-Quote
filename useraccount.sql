-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 06:36 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccount`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientinformation`
--

CREATE TABLE `clientinformation` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cadd1` varchar(100) NOT NULL,
  `cadd2` varchar(100) NOT NULL,
  `ccity` varchar(100) NOT NULL,
  `cstate` varchar(2) NOT NULL,
  `czip` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientinformation`
--

INSERT INTO `clientinformation` (`cid`, `cname`, `cadd1`, `cadd2`, `ccity`, `cstate`, `czip`) VALUES
(1, 'qwe', 'qwe', 'qwe', 'Houston', 'TX', 77000),
(3, 'user changed', '123 other street dr.', '123 some street dr.', 'Houston', 'TX', 77000);

-- --------------------------------------------------------

--
-- Table structure for table `fuelquote`
--

CREATE TABLE `fuelquote` (
  `ordercount` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `qreq` int(11) NOT NULL,
  `qadd` varchar(255) NOT NULL,
  `qdate` date NOT NULL,
  `qprice` int(11) NOT NULL,
  `qamt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuelquote`
--

INSERT INTO `fuelquote` (`ordercount`, `qid`, `qreq`, `qadd`, `qdate`, `qprice`, `qamt`) VALUES
(1, 1, 11, 'qwe', '2021-07-27', 11, 11),
(2, 3, 10, '123 other street dr.', '2021-07-27', 10, 10),
(3, 3, 12, '123 other street dr.', '2021-07-27', 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `usercredentials`
--

CREATE TABLE `usercredentials` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercredentials`
--

INSERT INTO `usercredentials` (`uid`, `uname`, `upass`) VALUES
(1, 'qwe', '$2y$10$n.P2nxP57yGH6PwLeWgttuuzM4VWtmZuYVJyWVKavQOmrgsA6v3Yq'),
(2, 'testuser1', '$2y$10$C0P02sw0bllLIhf8qRnttuCWFyjm2fM8SgoIm/BKEk9Q1Qoy5R5BS'),
(3, 'user', '$2y$10$eW0o/P/iG4nJCQ1SYu6Ybe4DC9PzVhTP0Th38JtJDMnscaENmMita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientinformation`
--
ALTER TABLE `clientinformation`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `fuelquote`
--
ALTER TABLE `fuelquote`
  ADD PRIMARY KEY (`ordercount`);

--
-- Indexes for table `usercredentials`
--
ALTER TABLE `usercredentials`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fuelquote`
--
ALTER TABLE `fuelquote`
  MODIFY `ordercount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usercredentials`
--
ALTER TABLE `usercredentials`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
