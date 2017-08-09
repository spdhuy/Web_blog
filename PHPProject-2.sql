-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2017 at 12:11 PM
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

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `fullname`, `phone`, `address`, `email`, `age`, `gender`, `description`, `avatar`) VALUES
('ACC001', '12345', 'Shane Greenup', '0968666564', 'abc sdads', 'spdhuy@gmail.com', '27', 'Nam', 'Founder of rbutr and dedicated to solving the prob', 'ACC001.jpg'),
('admin', 'admin', '', '', '', '', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `id_category` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `feature_image` varchar(50) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `posted_day` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `username`, `id_category`, `title`, `feature_image`, `content`, `posted_day`) VALUES
('BL001', 'ACC001', 'CAT001', 'How to End Google\'s Monopoly', 'BL001.jpg', 'Over a year ago I said Google would never implement a fact based assessment in their algorithm because I thought they would understand that making such a change would be the first step to losing their search monopoly.\r\nI was wrong.', 'BL001.jpg'),
('BL002', 'ACC001', 'CAT001', 'Critical Thinking By Osmosis', 'BL002.png', 'One of the core premises which drives my belief in the idea of The Socratic Web (a web where every webpage or piece of content is directly connected to the best critique of that webpage/content) is that repeated exposure to critical analyses will naturally teach critical thinking skills to the people who read them.', '');

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
('CAT001', 'develop');

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

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_08_01_064528_Task', 1),
(2, '2017_08_07_023346_users', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'huy1234', '2017-08-02 03:39:22', '2017-08-06 21:19:21');

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
  ADD KEY `id_cagetory` (`id_category`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `cagetory` (`id_category`);

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
