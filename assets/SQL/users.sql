-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 02:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplessons`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date`) VALUES
(1, 'ido', '123123', '2021-04-04 22:31:47'),
(2, 'test', 'testing', '2021-04-04 23:45:18'),
(3, 'idoido', '123123', '2021-04-04 23:54:13'),
(72, 'asdfarhgqeh', 'srethertheh', '2021-04-04 23:55:42'),
(73, 'aaaaa', 'aaaaa', '2021-04-05 01:01:58'),
(77, 'dfhdfth', 'drtyhjrtej', '2021-04-05 12:27:34'),
(86, 'idokraicerr', '123123', '2021-04-05 18:03:38'),
(87, 'test', 'test', '2021-04-05 18:04:08'),
(88, 'shaked', '123123', '2021-04-05 23:11:29'),
(89, 'dfhfhh', 'tyukjryukrtuk', '2021-04-08 16:48:32'),
(90, 'fgjgjtyuk', 'tghyjrrjr67j', '2021-04-08 16:54:17'),
(91, 'testt', 'testt', '2021-04-08 16:55:19'),
(92, 'testt', 'testt', '2021-04-08 16:55:26'),
(93, 'testt', 'testt', '2021-04-08 16:55:39'),
(94, 'testt', 'testt', '2021-04-08 16:56:02'),
(95, 'tdfhrj6', 'jtyj4768j', '2021-04-08 16:56:58'),
(96, 'mike', 'mike', '2021-04-08 16:58:06'),
(97, 'boaz', 'boaz', '2021-04-08 20:44:09'),
(98, 'test1', 'test1', '2021-04-11 17:32:59'),
(99, 'test23525', 'test3535', '2021-04-11 17:53:51'),
(100, 'tal', 'tal', '2021-04-12 15:11:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
