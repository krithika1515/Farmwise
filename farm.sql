-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 01:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `phoneno`, `email`, `password`) VALUES
('admin@1', 'Vicky', 8888888888, 'vicky@gmail.com', 'Kcg@1234');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `query_id` int(11) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `query_id`, `answer`, `created_at`) VALUES
(2, 48, 'will call you back\r\n', '2023-09-28 09:08:04'),
(3, 52, 'i cant get you\r\n', '2023-09-28 09:41:53'),
(4, 53, 'hello', '2023-09-28 11:35:14'),
(5, 54, 'ewdfqwed', '2023-09-28 22:37:49'),
(6, 55, 'bbbb', '2023-09-28 22:55:40'),
(7, 1, 'kom', '2023-09-29 05:13:41'),
(8, 59, '3333', '2023-09-29 18:25:31'),
(9, 6, 'qqqq', '2023-09-29 18:28:36'),
(10, 2, 'qqqq', '2023-09-29 18:31:32'),
(11, 3, 'qqqqq', '2023-09-29 18:32:30'),
(12, 5, 'qqq', '2023-09-29 18:32:51'),
(13, 73, 'Tomato is better', '2023-09-30 09:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `expert_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mailid` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `specialist` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`expert_id`, `name`, `mailid`, `phone`, `specialist`, `password`) VALUES
(1, 'Niru', 'Niru@gmail.com', '1234567890', 'Pest Control', 'Expert@1234'),
(2, 'Vigneshvaran', '20it6@gmail.com', '1231231230', 'Crop Yields', 'Expert@1234'),
(3, 'Yuvaraj', 'yuvi@gmail.com', '1133557799', 'Sustainability & Environment Consultant', 'Expert@2003'),
(5, 'sooriya', 'sooriya@gmail.com', '1234567890', 'Livestock Expert', ''),
(7, 'Vignesh', '20it46@gmail.com', '1231231230', 'AgTech Innovator', ''),
(8, 'Fazil', 'fazz@gmail.com', '1234567890', 'Crop Specialist', 'Fazz@2003');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `title`, `problem`, `description`, `image_url`, `tag`) VALUES
(1, 'Pest', 'More Pests', 'I planted a tomato crop and more pests is around them how to overcome it', 'uploads/sign.jpg', NULL),
(2, 'Crop Suitable', 'suitable crop for yield', 'I have to know which crop is suitable to yield in this place etc:-', 'uploads/g1.jpg', NULL),
(3, 'Niru', 'Niru Image', 'Image same name problem', 'uploads/sign.jpg', NULL),
(5, '`````', '``````', '```````', 'uploads/Screenshot (215).png', NULL),
(59, 'Niru', 'WHY ? ?', 'why so serious you niru bro ? ?ramya will come for you', 'uploads/Screenshot 2023-08-18 141358.png', NULL),
(64, 'Which Crop', 'Now the season is summer which is best crop to yield and harvest', 'Now the season is summer which is the best crop to yield and harvest can you suggest', 'uploads/Screenshot (226).png', 'Crop Specialist'),
(65, 'Best Environment', 'which land is better to harvest and yield tomato', 'tomato best ', 'uploads/sign.jpg', 'Sustainability & Environment Consultant'),
(66, 'Crop Yield', 'which crop is best to yield now ', 'which crop is best to yield now', 'uploads/Game.png', 'Crop Specialist'),
(71, 'pests', 'More pests', 'In my land there are more pests', 'uploads/02.jpg', 'Farm Management Consultant'),
(72, 'pests', 'pests', 'pests', 'uploads/02.jpg', 'Crop Specialist'),
(73, 'Crop to yield', 'better crop', 'better crop to yield now', 'uploads/02.jpg', 'Crop Specialist'),
(74, 'edewdwf', 'eWFWEE', 'DFF', 'uploads/Screenshot (203).png', 'Sustainability & Environment Consultant');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `phoneno` bigint(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `utype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `state`, `district`, `phoneno`, `password`, `utype`) VALUES
(1, 'Yuvaraj', 'Tamil Nadu', 'Chennai', 8877996652, 'Kcg@1234', 'f'),
(2, 'kishore', 'Tamil Nadu', 'Chennai', 8885190228, 'Kishore@1234', 'f'),
(4, 'Vigneshvaran', 'Tamil Nadu', 'Chengalpet', 1234567800, 'Vicky@1234', 'f'),
(7, 'Niru', 'Tamil Nadu', 'Chennai', 9988776655, 'Admin@1234', 'f'),
(13, 'sooriya', 'Tamil Nadu', 'Chennai', 9988776644, 'Kcg@1234', 'f'),
(15, 'Vignesh', 'Kerala', 'Idukki', 9988776654, 'Kcg@1234', 'f'),
(16, 'Khadeer', 'Maharashtra', 'Mumbai City', 9988776644, 'Kcg@1234', 'f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `query_id` (`query_id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`expert_id`),
  ADD UNIQUE KEY `mailid` (`mailid`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
