-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 02:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(180, 100, 1656803495, 'hi'),
(181, 100, 376747721, 'hello'),
(182, 100, 1656803495, 'besm allah'),
(183, 100, 832992166, 'el7amd allah'),
(184, 100, 832992166, 'wff'),
(185, 100, 1642846169, 'Smo 3leko'),
(186, 100, 915892734, 'hi'),
(187, 100, 1642846169, 'hi'),
(188, 100, 1642846169, ':D'),
(189, 100, 915892734, 'اطلع بره يا هشام'),
(190, 100, 1642846169, 'No :D'),
(191, 100, 1642846169, 'kick me if you can '),
(192, 100, 915892734, '😎😎'),
(193, 100, 1642846169, ':D'),
(194, 100, 1642846169, '💔'),
(195, 100, 832992166, 'haha'),
(196, 100, 832992166, '😎😎😎😎😎'),
(197, 100, 1642846169, '???'),
(198, 100, 832992166, 'يلا علشان نمشي يا هشام '),
(199, 100, 832992166, 'let\'s go '),
(200, 100, 832992166, 'now');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 578134384, 'seif', 'ahmed', 'seif@s.com', '123456789', '1695207382person.jpg', 'Offline now'),
(11, 832992166, 'seif', 'ahmed', 'sam@123.com', '1234', '1695709788351e70fc-77d0-4657-8e55-42e1375f0818.jpg', 'Active now'),
(12, 376747721, 'hi', 'dfvb', 'fbfdbnf@svdv.com', 'sadacf', '1695714790Group 3.png', 'Active now'),
(13, 1656803495, 'sesdv', 'fdb', 'fbfdbnf@svddv.com', 'fzdfddb', '1695811218Group 625.png', 'Active now'),
(14, 915892734, 'Ramadan', 'Ewais', 'devramdanewis@gmail.com', '12345678', '1695811949349145398_1261447787831977_6717963539745895285_n.jpg', 'Active now'),
(15, 68906332, 'ahmed ', 'hamed', 'ahmed@hamed.com', 'password', '1695811953Untitled.jpg', 'Active now'),
(16, 1642846169, 'Zo7le2a', 'marage7', 'admin@admin.com', '115530', '1695811986user-default-image.jpeg', 'Active now'),
(100, 100, 'General', 'group', '', '', '', 'write now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
