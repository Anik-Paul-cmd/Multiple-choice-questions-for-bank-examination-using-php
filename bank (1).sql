-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 08:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin001@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(9, 'UCB Bank'),
(11, 'Sonali Bank'),
(12, 'Sample Question 01'),
(13, 'Sample Question 02'),
(14, 'Sonali Bank2');

-- --------------------------------------------------------

--
-- Table structure for table `commenttable`
--

CREATE TABLE `commenttable` (
  `userName` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commenttable`
--

INSERT INTO `commenttable` (`userName`, `message`) VALUES
('moderator001@gmail.c', 'sas'),
('moderator001@gmail.c', 'sas'),
('moderator001@gmail.com', 'sas'),
('anik', 'xxxxx'),
('sss', 'fff'),
('anik', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `commenttable2`
--

CREATE TABLE `commenttable2` (
  `userName` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commenttable2`
--

INSERT INTO `commenttable2` (`userName`, `message`) VALUES
('moderator001@gmail.com', 'aa'),
('admin001@gmail.com', 'xdd'),
('moderator001@gmail.com', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`, `email`, `password`) VALUES
(1, 'moderator001@gmail.com', '1234'),
(4, 'moderator002@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans5` varchar(80) NOT NULL,
  `ans6` varchar(80) NOT NULL,
  `ans7` varchar(80) NOT NULL,
  `ans8` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans`, `cat_id`) VALUES
(2, 'What year did Bangladesh finally become independent and gain the name it has today?', '1947', '1971', '1952', 'null', 'null', 'null', 'null', 'null', 1, 9),
(3, 'What is the national flower of Bangladesh?', 'Water lily', 'Rose', 'Tulip', 'Sunflower', 'null', 'null', 'null', 'null', 0, 9),
(4, 'What did Bangladesh become known as after its first session of Independence in 1947?', 'East Pakistan', 'West Pakistan', 'East India', 'South India', 'null', 'null', 'null', 'null', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `cat_id` varchar(20) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `r_ques` varchar(20) NOT NULL,
  `w_ques` varchar(20) NOT NULL,
  `average` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `email`, `username`, `cat_id`, `b_name`, `r_ques`, `w_ques`, `average`) VALUES
(9, 'admin@gmail.com', 'admin', '12', 'Sample Question', '5', '6', '60'),
(10, 'paulanik76@gmail.com', 'anik', '9', 'UCB Bank', '0', '1', '0'),
(11, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '1', '0', '33.333333333333'),
(12, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667'),
(13, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667'),
(14, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667'),
(15, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667'),
(16, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667'),
(17, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667'),
(18, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667'),
(19, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667'),
(20, 'anik@gmail.com', 'anik', '9', 'UCB Bank', '2', '1', '66.666666666667');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'anik', 'anik@gmail.com', '1234'),
(2, 'sss', 'p@gmail.com', '1234'),
(3, 'anik', 'paulanik76@gmail.com', '1234'),
(4, 'anik', 'pauik76@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
