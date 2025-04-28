-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2025 at 05:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `password` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `middlename` varchar(55) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `course` varchar(150) NOT NULL,
  `section_year` varchar(55) NOT NULL,
  `student_status` varchar(55) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_number` varchar(22) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_type` char(1) NOT NULL DEFAULT 'S' COMMENT 'U=User S=Student A=Admin',
  `user_status` char(1) NOT NULL DEFAULT 'A',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `password`, `email`, `firstname`, `middlename`, `lastname`, `course`, `section_year`, `student_status`, `birthdate`, `gender`, `contact_number`, `address`, `city`, `province`, `zip_code`, `date_added`, `user_type`, `user_status`, `user_id`) VALUES
(1, 'heks', 'janherickaorbase@gmail.com', 'Jan Hericka', 'Abunda', 'Orbase', 'BSIT', '3B', 'Shifter', '2003-07-01', 'Female', '09171522474', 'P1, Ocfemia St. Calzada, Guinobatan, Albay', 'Guinobatan', 'Albay', '4503', '2024-12-05 04:14:49', 'S', 'A', 1),
(2, 'cess', 'princessaira@gmail.com', 'Princess Aira', 'Brondial', 'Layosa', 'BSIT', '3B', 'Shifter', '2003-06-21', 'Female', '09777345637', 'Calzada, Guinobatan, Albay', 'Guinobatan', 'Albay', '4503', '2024-12-05 14:03:46', 'S', 'A', 1),
(3, 'aso', 'pines@gmail.com', 'Leander', 'Osila', 'Pines', 'BSIT', '3B', 'Shifter', '2003-12-20', 'Male', '09686258456', 'Libon, Albay', 'Libon', 'Albay', '4507', '2024-12-07 16:39:22', 'S', 'A', 1),
(4, 'bidab', 'janae12@gmail.com', 'Janae Henreese', 'Abunda', 'Orbase', 'BSN', '1B', 'Regular', '2006-01-10', 'Female', '09777345637', 'Calzada, Guinobatan, Albay', 'Guinobatan', 'Albay', '4503', '2024-12-09 19:10:23', 'S', 'A', 1),
(5, 'bao', 'baoskie@gmail.com', 'Joshua', 'Arabe', 'Gumbao', 'BSIT', '3B', 'Regular', '2003-06-21', 'Male', '09777345637', 'Tabaco City, Albay', 'Tabaco', 'Albay', '4511', '2024-12-09 19:27:14', 'S', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(22) NOT NULL,
  `password` varchar(55) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_type` char(1) NOT NULL DEFAULT 'U' COMMENT 'U=User \r\nS=Student \r\nA=Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `fullname`, `username`, `email`, `contact_number`, `password`, `date_added`, `user_type`) VALUES
(0, 'admin', 'admin', '', '', 'admin', '2024-12-14 18:00:26', 'A'),
(1, 'Jan Hericka A. Orbase', 'heks', 'gagagagga', '09171522474', 'heks', '2024-12-14 15:31:27', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
