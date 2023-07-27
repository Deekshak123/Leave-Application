-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.2:3307
-- Generation Time: Jul 27, 2023 at 04:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leaveapplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaveinsert`
--

CREATE TABLE `leaveinsert` (
  `id` int(11) NOT NULL,
  `leave_id` int(255) NOT NULL,
  `leavetype` varchar(255) NOT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `fromtime` time DEFAULT NULL,
  `totime` time DEFAULT NULL,
  `reason` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaveinsert`
--

INSERT INTO `leaveinsert` (`id`, `leave_id`, `leavetype`, `fromdate`, `todate`, `fromtime`, `totime`, `reason`, `status`) VALUES
(10, 1506821557, 'Home', '2023-04-05', '2023-04-13', '01:48:00', '03:48:00', 'due to some reason', 'Accepted'),
(11, 1506821557, 'Market', '2023-04-11', '2023-04-11', '02:26:00', '04:26:00', 'to buy something', 'Rejected'),
(12, 192093529, 'Home', '2023-05-01', '2023-05-11', '02:59:00', '02:59:00', 'have some work', 'Accepted'),
(13, 192093529, 'Market', '2023-05-04', '2023-05-04', '01:00:00', '03:00:00', 'to buy something', 'Pending'),
(14, 1506821557, 'Home', '2023-05-01', '2023-05-10', '01:57:00', '03:57:00', 'For some work', 'Pending'),
(15, 1506821557, 'Home', '2023-05-04', '2023-06-01', '13:48:00', '16:48:00', 'for work', 'Pending'),
(16, 1506821557, 'Market', '2023-05-27', '2023-05-28', '16:30:00', '20:35:00', 'for urgnt work', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fullname`, `username`, `email`, `phoneno`, `password`, `gender`, `city`, `department`, `type`) VALUES
(11, 740251795, 'Deeksha Kesharwani', 'deekshak12', 'deekshak1234@gmail.com', '6392725459', '1234', 'female', 'Mirzapur', 'B.Tech', 'Admin'),
(12, 1506821557, 'Pragya Kesharwani', 'pragyak12', 'pragya@gmail.com', '5642864354', 'asdf', 'female', 'Mirzapur', 'B.Tech', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaveinsert`
--
ALTER TABLE `leaveinsert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leaveinsert`
--
ALTER TABLE `leaveinsert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
