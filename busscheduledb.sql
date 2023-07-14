-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busscheduledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `user`, `password`, `confirmpassword`, `status`) VALUES
(6, 'Aditya', 'Pandya', 'aditya@gmail.com', '057829fa5a65fc1ace408f490be486ac', '057829fa5a65fc1ace408f490be486ac', 'ADMIN'),
(15, 'Jeet', 'Pandya', 'jeet@gmail.com', 'b04cf2980ef8c15fe3cec096c8ffb0ae', 'b04cf2980ef8c15fe3cec096c8ffb0ae', 'CLIENT'),
(16, 'krupali', 'rana', 'kr@gmail.com', '15221f1b8b7cb45bdeda09a175175b45', '15221f1b8b7cb45bdeda09a175175b45', 'CLIENT'),
(36, 'Aditya', 'Pandya', 'pandyaaditya901@gmail.com', '040b7cf4a55014e185813e0644502ea9', '040b7cf4a55014e185813e0644502ea9', 'CLIENT');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `BUS_ID` int(30) NOT NULL,
  `BUS_NAME` varchar(40) NOT NULL,
  `BUS_TYPE` varchar(40) NOT NULL,
  `DRIVER_ID` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BUS_ID`, `BUS_NAME`, `BUS_TYPE`, `DRIVER_ID`) VALUES
(2, 'MEFGI', 'Student', 2);

--
-- Triggers `bus`
--
DELIMITER $$
CREATE TRIGGER `before_delete_bus` BEFORE DELETE ON `bus` FOR EACH ROW BEGIN  
	DELETE FROM GPS_Device WHERE BUS_ID=BUS_ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DRIVER_ID` int(30) NOT NULL,
  `DRIVER_NAME` varchar(50) NOT NULL,
  `EMPLOY_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DRIVER_ID`, `DRIVER_NAME`, `EMPLOY_DATE`) VALUES
(5, 'Aditya Pandya', '2018-06-16'),
(7, 'Aditya Pandya', '2018-06-16'),
(8, 'Aditya Pandya', '2018-06-16'),
(9, 'Aditya Pandya', '2018-06-16'),
(10, 'Aditya Pandya', '2018-06-16'),
(11, 'Aditya Pandya', '2018-06-16'),
(12, 'Aditya Pandya', '2018-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `GPS_Device`
--

CREATE TABLE `GPS_Device` (
  `DEVICE_ID` int(50) NOT NULL,
  `IMEI` varchar(150) NOT NULL,
  `BUS_ID` int(10) NOT NULL,
  `LAT` varchar(20) NOT NULL,
  `LNG` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `ROUTE_ID` int(50) NOT NULL,
  `FAIR` float NOT NULL,
  `START` varchar(50) NOT NULL,
  `FINISH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`ROUTE_ID`, `FAIR`, `START`, `FINISH`) VALUES
(1, 3, 'MU', 'MU');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `SCHEDULE_ID` int(11) NOT NULL,
  `ARRIVAL` time NOT NULL,
  `DEPARTURE` time NOT NULL,
  `SHIFT` int(5) NOT NULL,
  `BUS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`SCHEDULE_ID`, `ARRIVAL`, `DEPARTURE`, `SHIFT`, `BUS_ID`) VALUES
(5, '09:00:00', '04:00:00', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stop`
--

CREATE TABLE `stop` (
  `LOCATION_ID` int(50) NOT NULL,
  `LOCATION_NAME` varchar(40) NOT NULL,
  `ROUTE_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stop`
--

INSERT INTO `stop` (`LOCATION_ID`, `LOCATION_NAME`, `ROUTE_ID`) VALUES
(0, 'Marwadi', 1),
(2, 'Marwadi', 23),
(3, 'Marwadi', 3),
(4, 'Marwadi', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`BUS_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DRIVER_ID`);

--
-- Indexes for table `GPS_Device`
--
ALTER TABLE `GPS_Device`
  ADD PRIMARY KEY (`DEVICE_ID`),
  ADD KEY `BUS_ID` (`BUS_ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ROUTE_ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`SCHEDULE_ID`);

--
-- Indexes for table `stop`
--
ALTER TABLE `stop`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `BUS_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `GPS_Device`
--
ALTER TABLE `GPS_Device`
  MODIFY `DEVICE_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `SCHEDULE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4449;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `GPS_Device`
--
ALTER TABLE `GPS_Device`
  ADD CONSTRAINT `gps_device_ibfk_1` FOREIGN KEY (`BUS_ID`) REFERENCES `bus` (`BUS_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
