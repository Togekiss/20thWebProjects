-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 03:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exercici1`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES
(5, 1, 'Get mad!', 'I don\'t want your damn lemons, what am I supposed to do with these!?\nDemand to see life\'s manager! Make life rue the day it thought it could give Cave Johnson lemons! Do you know who I am?\nI\'m the man who\'s gonna burn your house down! With the lemons! I\'m gonna get my engineers to invent a combustible lemon that burns your house down!', '2017-03-13 01:56:32'),
(6, 3, 'When life gives you lemons, don\'t make lemonade', 'Make life take the lemons <i>back</i>!', '2017-03-13 01:59:44'),
(7, 3, 'test1', 'test1', '2017-03-13 02:02:39'),
(8, 3, 'test2', 'test2', '2017-03-13 02:02:49'),
(9, 3, 'test3', 'test3', '2017-03-13 02:02:56'),
(10, 3, 'test4', 'test4', '2017-03-13 02:03:04'),
(11, 3, 'test5', 'test5', '2017-03-13 02:03:11'),
(12, 3, 'test6', 'test6', '2017-03-13 02:03:18'),
(13, 3, 'test7', 'test7', '2017-03-13 02:03:25'),
(14, 3, 'test8', 'test8', '2017-03-13 02:03:32'),
(15, 3, 'test9', 'test9', '2017-03-13 02:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `birthdate`, `password`) VALUES
(1, 'marta', 'martazapateroweb@gmail.com', '1996-03-01', 'asdf'),
(3, 'dummy', 'dummy@gmail.com', '0003-02-01', 'Dummy1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `entry`
--
ALTER TABLE `entry`
  ADD CONSTRAINT `entry_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
