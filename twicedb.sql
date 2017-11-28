-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 03:21 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twicedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `rate` int(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `name`, `email`, `date`, `rate`, `message`) VALUES
(42, 'Tim', 'gg@om.com', '2017-11-25 00:44:01', 5, 'I love this website!!!\r\n\r\nI want to see Twice more!!!!'),
(43, 'Tomy', 'cc@gg.com', '2017-11-25 00:51:43', 6, 'This website is awesome!!\r\nPlease add more photos!! <3'),
(44, 'Karl', 'oo@gg.com', '2017-11-25 00:53:00', 10, 'This website is the best!!\r\nTwice is the best korean girl group!!! \r\n\r\nSaranghae!!!'),
(45, 'Jing Dong', 'lol@gg.com', '2017-11-25 00:58:05', 9, 'I love Twice as much as this website!'),
(46, 'Tan', 'gt@gg.com', '2017-11-25 16:25:04', 8, 'Hi! I love this very much!!\r\nPlease make take photo!!'),
(47, 'Dante', 'co@gg.com', '2017-11-26 18:59:32', 7, 'Nice website!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  `cpwd` varchar(1000) NOT NULL,
  `eml` varchar(128) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `pwd`, `cpwd`, `eml`, `tel`) VALUES
(15, 'Tomy', 'ddd', 'ddd', 'gg@om.com', '0124789632'),
(16, 'Tim', '123', '123', 'cc@gg.com', '01245678932');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
