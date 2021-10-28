-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 02:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical_20211028`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_blogs`
--

CREATE TABLE `all_blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `tags` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_blogs`
--

INSERT INTO `all_blogs` (`id`, `title`, `description`, `image`, `tags`) VALUES
(1, 'blog 1 ', 'blog 1 uihdbuidbu nidncioehfeqo nioahdnouqefeqo nihqsdousncuqd nishdoqishdqd buosbdunjfkdf nuoncdousbuosdbn', NULL, NULL),
(2, 'blog 1 ', 'blog 1 uihdbuidbu nidncioehfeqo nioahdnouqefeqo nihqsdousncuqd nishdoqishdqd buosbdunjfkdf nuoncdousbuosdbn', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs_users`
--

CREATE TABLE `blogs_users` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs_users`
--

INSERT INTO `blogs_users` (`id`, `name`, `email`, `password`, `last_login`) VALUES
(1, 'kunjal', 'kunjal@mail.com', '123456', '0000-00-00 00:00:00'),
(2, 'kunjal', 'kc@123gmail.com', '123456', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_blogs`
--
ALTER TABLE `all_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_users`
--
ALTER TABLE `blogs_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_blogs`
--
ALTER TABLE `all_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs_users`
--
ALTER TABLE `blogs_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
