-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 06:43 PM
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
-- Database: `jpvitan1_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` varchar(2048) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `author` varchar(1024) NOT NULL,
  `twitter` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `url`, `title`, `description`, `image`, `author`, `twitter`) VALUES
(1, 'jpvitan.com', 'Justine Paul Vitan', 'Software developer who writes top-quality code to build mobile and web applications.', 'https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1676731158/jpvitan-website/banners/banner_luawo6.png', 'Justine Paul Vitan', '@jpvitan_dev'),
(2, 'jpvitan.com', 'Apps | Justine Paul Vitan', 'Discover apps that follow modern standards and best practices to ensure a smooth and comfortable mobile and web experience for everyone.', 'https://res.cloudinary.com/dhv9gcew6/image/upload/q_auto/v1676731158/jpvitan-website/banners/banner_luawo6.png', 'Justine Paul Vitan', '@jpvitan_dev');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
