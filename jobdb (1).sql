-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 08:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `applied_id` int(11) NOT NULL,
  `jobid` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Salary` int(255) NOT NULL,
  `Exprnce` int(255) NOT NULL,
  `Eligibility` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `EmpID` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`applied_id`, `jobid`, `Title`, `Salary`, `Exprnce`, `Eligibility`, `City`, `Description`, `EmpID`, `cname`, `fname`, `lname`, `gender`, `dob`, `phone`, `email`) VALUES
(1, 25, 'Watchman ', 0, 0, '', '', '', 39, '', '', 'Nayak', 'Female', '2022-02-06', 56923, 'pinky@gmail.com'),
(10, 30, 'system engineer ', 20000, 1, 'MTECH ', 'Mangalore  ', 'nnnn', 39, 'test_company  ', '', 'Nayak', 'Female', '2022-02-06', 56923, 'pinky@gmail.com'),
(11, 31, 'software engineer ', 30000, 8, 'engineering ', 'bangalore  ', 'aaaa', 39, 'test_company  ', '', 'Nayak', 'Female', '2022-02-06', 56923, 'pinky@gmail.com'),
(12, 28, 'assistant ', 10000, 2, 'engineering ', 'Mangalore  ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 43, 'test_company_2  ', '', 'Shetty', 'Female', '2022-01-11', 9999999, 'prathijna123@gmail.com'),
(13, 29, 'tester ', 9000, 4, 'engineering ', 'Mangalore  ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 43, 'test_company_2  ', '', 'Shetty', 'Female', '2022-01-11', 9999999, 'prathijna123@gmail.com'),
(14, 30, 'system engineer ', 20000, 1, 'MTECH ', 'Mangalore  ', 'nnnn', 43, 'test_company  ', '', 'Shetty', 'Female', '2022-01-11', 9999999, 'prathijna123@gmail.com'),
(15, 31, 'software engineer ', 30000, 8, 'engineering ', 'bangalore  ', 'aaaa', 43, 'test_company  ', '', 'Shetty', 'Female', '2022-01-11', 9999999, 'prathijna123@gmail.com'),
(16, 27, 'wwww ', 7896, 5, 'engineering ', 'Mangalore  ', 'bcnnn', 39, 'test_company_2  ', '', 'Nayak', 'Female', '2022-02-06', 56923, 'pinky@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `website` varchar(500) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `name`, `address`, `location`, `sector`, `website`, `phone`, `email`, `passwd`) VALUES
(10, 'test_company', 'test_address', 'test_location', 'Software', 'www.test_company.com', '2541654', 'test_company@gmail.com', '1234'),
(11, 'test_company_2', 'test_address_2', 'test_location_2', 'Hardware', 'www.test_company_2.com', '9876543297', 'test_company_2@gmail.com', '3333'),
(12, 'test_company_3', 'test_company_3address', 'location_test3', 'Advertising', 'www.test_company3.com', '2541654', 'test_company3@gmail.com', '34567'),
(13, 'Wipro', 'Bangalore', 'India', 'Software', 'www.wipro.com', '99876543297', 'wipro@gmai.com', 'wipro'),
(14, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `TenthMarks` int(100) NOT NULL,
  `TwelthhMarks` int(100) NOT NULL,
  `Highest_qualification` varchar(50) NOT NULL,
  `Marks` float NOT NULL,
  `passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `fname`, `lname`, `dob`, `gender`, `age`, `address`, `phone`, `email`, `TenthMarks`, `TwelthhMarks`, `Highest_qualification`, `Marks`, `passwd`) VALUES
(38, '', 'Shetty', '2022-01-30', 'Female', 23, 'brahmavara', '99876543298', 'prathijnads@gmail.com', 93, 96, 'BE', 94, '1234'),
(39, '', 'Nayak', '2022-02-06', 'Female', 24, 'udupi', '56923', 'pinky@gmail.com', 90, 98, 'engineering', 98, '9876'),
(40, '', '', '0000-00-00', 'Female', 0, '', '', '', 0, 0, '', 0, ''),
(43, 'prathijna', 'Shetty', '2022-01-11', 'Female', 23, 'onnala', '9999999', 'prathijna123@gmail.com', 98, 98, 'engineering', 98, 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobid` int(100) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Hour` int(100) NOT NULL,
  `Salary` int(200) NOT NULL,
  `Exprnce` varchar(100) NOT NULL,
  `Eligibility` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `cid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobid`, `Title`, `Hour`, `Salary`, `Exprnce`, `Eligibility`, `City`, `Description`, `cid`, `name`) VALUES
(14, 'testing1', 10, 123, '6', 'MTECH', 'bangalore', 'bcnnn', 10, ''),
(18, 'testing1', 10, 123, '6', 'MTECH', 'bangalore', 'bcnnn', 10, ''),
(23, 'zzzz ', 4, 4, '4 ', 'engineering ', 'bangalore ', 'mmmm ', 11, ''),
(25, 'Watchman', 10, 5695, '3 ', 'we', 'bangalore', 'wwwww', 13, ''),
(27, 'wwww', 5, 7896, '5', 'engineering', 'Mangalore ', 'bcnnn', 11, 'test_company_2'),
(28, 'assistant', 4, 10000, '2', 'engineering', 'Mangalore ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 11, 'test_company_2'),
(29, 'tester', 5, 9000, '4', 'engineering', 'Mangalore ', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 11, 'test_company_2'),
(30, 'system engineer', 3, 20000, '1', 'MTECH', 'Mangalore ', 'nnnn', 10, 'test_company'),
(31, 'software engineer', 7, 30000, '8', 'engineering', 'bangalore ', 'aaaa', 10, 'test_company');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `EmpID` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`EmpID`, `name`, `status`, `message`) VALUES
(43, '', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(43, 'test_company_2', '', ''),
(0, 'test_company_2', 'Accepted', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(0, 'test_company_2', 'Accepted', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(0, 'test_company_2', 'Rejected', 'hhhhhhhhhhh'),
(0, 'test_company_2', 'Accepted', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(0, 'test_company_2', 'Accepted', 'bbbbbbb'),
(43, 'test_company_2', 'Accepted', 'bbbbbbbbbbbbbbbbbbbbbbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`applied_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`),
  ADD UNIQUE KEY `EmailID` (`email`);
ALTER TABLE `employee` ADD FULLTEXT KEY `password` (`passwd`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `applied_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
