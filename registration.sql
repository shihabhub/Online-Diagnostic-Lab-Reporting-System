-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 10:00 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_test`
--

CREATE TABLE `booked_test` (
  `book_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `b_date` date NOT NULL,
  `slot` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_test`
--

INSERT INTO `booked_test` (`book_id`, `name`, `email`, `phone`, `lab_id`, `b_date`, `slot`, `gender`) VALUES
(3, 'Rafi', 'rafiswe@gmail.com', '01729346959', 1, '2018-04-11', '', ''),
(4, 'News', 'rafiswe@gmail.com', '01729346959', 1, '2018-04-21', '12 : 41 PM', ''),
(5, 'Rafi', 'rafiswe@gmail.com', '01729346959', 1, '2018-04-01', '3 : 45 PM', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `lab_test`
--

CREATE TABLE `lab_test` (
  `lab_id` int(11) NOT NULL,
  `test_name` varchar(191) NOT NULL,
  `test_cost` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_test`
--

INSERT INTO `lab_test` (`lab_id`, `test_name`, `test_cost`) VALUES
(1, 'UCG', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `p_email` text NOT NULL,
  `p_phone` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'shihab_nayem', 'nayem_shihab@yahoo.com', '123'),
(2, 'yazdani', 'yazdani@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'shi_nay', 'shi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'shb', 'shb@gmail.com', '123'),
(5, 'foy.kab', 'mdjoy.hossain@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(6, 'shihab_naym', 's@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'rafikul', 'rafiswe@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_test`
--
ALTER TABLE `booked_test`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `lab_id` (`lab_id`);

--
-- Indexes for table `lab_test`
--
ALTER TABLE `lab_test`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_test`
--
ALTER TABLE `booked_test`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lab_test`
--
ALTER TABLE `lab_test`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_test`
--
ALTER TABLE `booked_test`
  ADD CONSTRAINT `booked_test_ibfk_1` FOREIGN KEY (`lab_id`) REFERENCES `lab_test` (`lab_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
