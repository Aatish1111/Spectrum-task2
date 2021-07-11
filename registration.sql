-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 05:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Username`, `email`, `phone_number`, `branch`, `year`, `domain`, `Password`, `CPassword`) VALUES
(1, 'Aatish', 'cetcsedevelopers@gmail.com', '9876543210', 'Architecture', '1st Year', 'App Development', '$2y$10$6FwZiZVWg395qJvBrecpTOIG4HKPDn9sojzXEDTOBzfVCz.tGPa1e', '$2y$10$i77RzJ0oqrkAPCJzjzhfpO6wG3WEsW6jZYjvK5qRd9iOuSB0J86w6'),
(2, 'Thor', 'thor@gmail.com', '9876543210', 'Computer Science & Engineering', '1st Year', 'IOT/Embedded Systems', '$2y$10$vdRqOVjikKatLv8NMoaymuT9MXw0PjrfbqQ5Hv9BKgXYcwBFDJici', '$2y$10$tz0gWcOk9YiRbHaXOtn5/OB3xRsBffl4dGC6d4MQy2g2sgfGvDOFa'),
(3, 'Singham', 'singham@gmail.com', '9876543210', 'Information Technology', '2nd Year', 'IOT/Embedded Systems', '$2y$10$Sz5WOHFX9ZYMyCo0/cnrHemNmNOjHPhy3XAL07D9H.LWTmg/0QfJa', '$2y$10$G7XANnvp/qbEbB4EGeXW7e2FV3HM6NOuNnCHW3n1OArPH6EqoRSXG'),
(4, 'IRON MAN', 'xyz@gmail.com', '9876543210', 'Architecture', '1st Year', 'DS/ML', '$2y$10$Unjl2ieG6maJrLdXGLvguOvUtMe3SNGRzCE6SlbX6KqUnuORhUNNC', '$2y$10$Q1ZwkXO42Emk7aHQnZ/9fOifTdFEjDqsgsLlTJAQAyiKb3fy2zY3K'),
(5, 'Thanos', 'thanos@gmail.com', '9876543210', 'Instrumentation & Electronics Engineering', '3rd Year', 'MATLAB/Simulink', '$2y$10$pRrHrGECG.iQYyPYcm52MuUWxO8UBU1G8kJylG0SoyCT5HOYrASA6', '$2y$10$TS8y57qQOKGcpk0zEc8wmOXIbGFFEOgkxGIO/Ao1sr1Py2aO20qAe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
