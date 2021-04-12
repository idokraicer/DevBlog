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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `username`, `title`, `content`, `date`) VALUES
(1, 'ido', 'This is the subject', 'Some content', '2015-11-14 16:38:01'),
(2, 'test', 'Some Content Title', 'Some Content', '2021-04-05 19:39:03'),
(3, 'test', 'mdghmfhj,ghj,', 'Some Content Title', '2021-04-05 19:39:54'),
(4, 'test', 'Some Content Title', 'Some Content Title', '2021-04-05 19:40:00'),
(5, 'test', 'Some Content Title', 'Some Content Title', '2021-04-05 19:40:06'),
(6, 'test', 'Some Content Title', 'Some Content Title', '2021-04-05 19:40:12'),
(7, 'test', 'Some Content Title', 'Some Content Title', '2021-04-05 19:40:18'),
(8, 'test', 'Some Content Title', 'Some Content Title', '2021-04-05 19:40:26'),
(9, 'test', 'Some Content Title', 'Some Content Title', '2021-04-05 19:40:44'),
(10, 'test', 'Some Content Title', 'Some Content Title', '2021-04-05 19:40:52'),
(11, 'test', 'asdfasdf', 'asdfasdf', '2021-04-12 03:34:10'),
(12, 'test', 'Title', 'Content', '2021-04-12 03:34:49'),
(13, 'test', 'Some Content Title', 'Content', '2021-04-12 03:38:50'),
(14, 'test', 'sdfgsdf', 'gsdfgsdfg', '2021-04-12 03:42:02'),
(15, 'test', 'Test Article', '<div><font size=\\\"6\\\">Hello!</font></div><div><font size=\\\"6\\\"><font size=\\\"4\\\">my name</font></font></div><div><font size=\\\"6\\\"><font size=\\\"4\\\"><font size=\\\"2\\\">is ido</font></font><br></font></div>', '2021-04-12 05:04:28'),
(16, 'test', 'sfgsdfgs', '<div><font size=\"4\"><span style=\"font-family: arial narrow, sans-serif;\">sdfgsdfg</span></font></div><div><font size=\"6\">hgjkghjk</font></div><div>fghjfghjgh<br></div>', '2021-04-12 05:36:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
