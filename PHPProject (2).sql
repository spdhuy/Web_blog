-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2017 at 04:14 AM
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
-- Database: `PHPProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(50) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `id_cagetory` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `featureImage` varchar(50) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `postedDay` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cagetory`
--

CREATE TABLE `cagetory` (
  `id_category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cagetory`
--

INSERT INTO `cagetory` (`id_category`, `name`) VALUES
('123', 'history'),
('124', 'huy'),
('125', 'huy');

-- --------------------------------------------------------

--
-- Table structure for table `interact`
--

CREATE TABLE `interact` (
  `id_interact` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `id_blog` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `username` (`username`),
  ADD KEY `id_cagetory` (`id_cagetory`);

--
-- Indexes for table `cagetory`
--
ALTER TABLE `cagetory`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `interact`
--
ALTER TABLE `interact`
  ADD PRIMARY KEY (`id_interact`),
  ADD KEY `username` (`username`),
  ADD KEY `id_blog` (`id_blog`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`id_cagetory`) REFERENCES `cagetory` (`id_category`);

--
-- Constraints for table `interact`
--
ALTER TABLE `interact`
  ADD CONSTRAINT `interact_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `interact_ibfk_2` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id_blog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
