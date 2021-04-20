-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 12:02 PM
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

INSERT INTO `posts` (`username`, `title`, `content`, `date`) VALUES
('test', 'sfgsdfgs', '<div><font size=\"4\"><span style=\"font-family: arial narrow, sans-serif;\">sdfgsdfg</span></font></div><div><font size=\"6\">hgjkghjk</font></div><div>fghjfghjgh<br></div>', '2021-04-13 20:54:32'),
('ido', 'This is the subject', 'Some content', '2021-04-13 20:54:36'),
('test', 'Some Content Title', 'Some Content', '2021-04-13 20:54:36'),
('test', 'mdghmfhj,ghj,', 'Some Content Title', '2021-04-13 20:54:36'),
('test', 'Some Content Title', 'Some Content Title', '2021-04-13 20:54:36'),
('test', 'Some Content Title', 'Some Content Title', '2021-04-13 20:54:36'),
('test', 'Some Content Title', 'Some Content Title', '2021-04-13 20:54:36'),
('test', 'Some Content Title', 'Some Content Title', '2021-04-13 20:54:36'),
('test', 'Some Content Title', 'Some Content Title', '2021-04-13 20:54:36'),
('test', 'Some Content Title', 'Some Content Title', '2021-04-13 20:54:36'),
(5'test', 'Some Content Title', 'Some Content Title', '2021-04-13 20:54:36'),
('test', 'asdfasdf', 'asdfasdf', '2021-04-13 20:54:36'),
('test', 'Title', '<p><span style=\"font-size: 36pt;\"><strong>Testing new editor </strong></span></p><div id=\"lipsum\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis mi vitae risus cursus fermentum. Aliquam ut accumsan diam. Nunc condimentum dolor massa, ut ullamcorper purus pretium quis. Vestibulum est urna, dictum eget iaculis non, malesuada in lectus. In iaculis varius lorem, ac consectetur nunc fringilla ac. Pellentesque cursus arcu sit amet felis sodales, vitae gravida dolor aliquet. Vestibulum augue ipsum, efficitur et tempor eget, tincidunt et massa. Integer eget elit commodo, consectetur diam cursus, porta ligula.</p><p>Etiam convallis orci at maximus tincidunt. Praesent purus justo, commodo eget dolor ac, porttitor fermentum massa. Nunc nec eleifend arcu, quis blandit urna. Curabitur eget tellus urna. Maecenas id sollicitudin sem. Nam laoreet efficitur massa, at interdum neque lobortis a. Maecenas mauris sem, bibendum sed consectetur et, aliquet ac nisi. Donec elementum eros vel nulla lobortis pretium. Aenean interdum tempor egestas. In sollicitudin semper nisl id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nibh metus, vestibulum id aliquam et, dictum in ex. Nam ut justo vitae neque faucibus viverra. Sed porttitor est at libero gravida tempus. Vestibulum iaculis eget tortor quis auctor. Aenean id scelerisque sem, id venenatis sapien.', '2021-04-13 20:54:36'),
('test', 'Some Content Title', '<p><span style=\"font-size: 36pt;\"><strong>Testing new editor </strong></span></p><div id=\"lipsum\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis mi vitae risus cursus fermentum. Aliquam ut accumsan diam. Nunc condimentum dolor massa, ut ullamcorper purus pretium quis. Vestibulum est urna, dictum eget iaculis non, malesuada in lectus. In iaculis varius lorem, ac consectetur nunc fringilla ac. Pellentesque cursus arcu sit amet felis sodales, vitae gravida dolor aliquet. Vestibulum augue ipsum, efficitur et tempor eget, tincidunt et massa. Integer eget elit commodo, consectetur diam cursus, porta ligula.</p><p>Etiam convallis orci at maximus tincidunt. Praesent purus justo, commodo eget dolor ac, porttitor fermentum massa. Nunc nec eleifend arcu, quis blandit urna. Curabitur eget tellus urna. Maecenas id sollicitudin sem. Nam laoreet efficitur massa, at interdum neque lobortis a. Maecenas mauris sem, bibendum sed consectetur et, aliquet ac nisi. Donec elementum eros vel nulla lobortis pretium. Aenean interdum tempor egestas. In sollicitudin semper nisl id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nibh metus, vestibulum id aliquam et, dictum in ex. Nam ut justo vitae neque faucibus viverra. Sed porttitor est at libero gravida tempus. Vestibulum iaculis eget tortor quis auctor. Aenean id scelerisque sem, id venenatis sapien.', '2021-04-13 20:54:36'),
('test', 'sdfgsdf', '<p><span style=\"font-size: 36pt;\"><strong>Testing new editor </strong></span></p><div id=\"lipsum\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis mi vitae risus cursus fermentum. Aliquam ut accumsan diam. Nunc condimentum dolor massa, ut ullamcorper purus pretium quis. Vestibulum est urna, dictum eget iaculis non, malesuada in lectus. In iaculis varius lorem, ac consectetur nunc fringilla ac. Pellentesque cursus arcu sit amet felis sodales, vitae gravida dolor aliquet. Vestibulum augue ipsum, efficitur et tempor eget, tincidunt et massa. Integer eget elit commodo, consectetur diam cursus, porta ligula.</p><p>Etiam convallis orci at maximus tincidunt. Praesent purus justo, commodo eget dolor ac, porttitor fermentum massa. Nunc nec eleifend arcu, quis blandit urna. Curabitur eget tellus urna. Maecenas id sollicitudin sem. Nam laoreet efficitur massa, at interdum neque lobortis a. Maecenas mauris sem, bibendum sed consectetur et, aliquet ac nisi. Donec elementum eros vel nulla lobortis pretium. Aenean interdum tempor egestas. In sollicitudin semper nisl id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nibh metus, vestibulum id aliquam et, dictum in ex. Nam ut justo vitae neque faucibus viverra. Sed porttitor est at libero gravida tempus. Vestibulum iaculis eget tortor quis auctor. Aenean id scelerisque sem, id venenatis sapien.', '2021-04-13 20:54:36'),
('test', 'Test Article', '<p><span style=\"font-size: 36pt;\"><strong>Testing new editor </strong></span></p><div id=\"lipsum\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis mi vitae risus cursus fermentum. Aliquam ut accumsan diam. Nunc condimentum dolor massa, ut ullamcorper purus pretium quis. Vestibulum est urna, dictum eget iaculis non, malesuada in lectus. In iaculis varius lorem, ac consectetur nunc fringilla ac. Pellentesque cursus arcu sit amet felis sodales, vitae gravida dolor aliquet. Vestibulum augue ipsum, efficitur et tempor eget, tincidunt et massa. Integer eget elit commodo, consectetur diam cursus, porta ligula.</p><p>Etiam convallis orci at maximus tincidunt. Praesent purus justo, commodo eget dolor ac, porttitor fermentum massa. Nunc nec eleifend arcu, quis blandit urna. Curabitur eget tellus urna. Maecenas id sollicitudin sem. Nam laoreet efficitur massa, at interdum neque lobortis a. Maecenas mauris sem, bibendum sed consectetur et, aliquet ac nisi. Donec elementum eros vel nulla lobortis pretium. Aenean interdum tempor egestas. In sollicitudin semper nisl id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nibh metus, vestibulum id aliquam et, dictum in ex. Nam ut justo vitae neque faucibus viverra. Sed porttitor est at libero gravida tempus. Vestibulum iaculis eget tortor quis auctor. Aenean id scelerisque sem, id venenatis sapien.', '2021-04-13 20:54:36'),
('test', 'sfgsdfgs', '<p><span style=\"font-size: 36pt;\"><strong>Testing new editor </strong></span></p><div id=\"lipsum\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis mi vitae risus cursus fermentum. Aliquam ut accumsan diam. Nunc condimentum dolor massa, ut ullamcorper purus pretium quis. Vestibulum est urna, dictum eget iaculis non, malesuada in lectus. In iaculis varius lorem, ac consectetur nunc fringilla ac. Pellentesque cursus arcu sit amet felis sodales, vitae gravida dolor aliquet. Vestibulum augue ipsum, efficitur et tempor eget, tincidunt et massa. Integer eget elit commodo, consectetur diam cursus, porta ligula.</p><p>Etiam convallis orci at maximus tincidunt. Praesent purus justo, commodo eget dolor ac, porttitor fermentum massa. Nunc nec eleifend arcu, quis blandit urna. Curabitur eget tellus urna. Maecenas id sollicitudin sem. Nam laoreet efficitur massa, at interdum neque lobortis a. Maecenas mauris sem, bibendum sed consectetur et, aliquet ac nisi. Donec elementum eros vel nulla lobortis pretium. Aenean interdum tempor egestas. In sollicitudin semper nisl id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nibh metus, vestibulum id aliquam et, dictum in ex. Nam ut justo vitae neque faucibus viverra. Sed porttitor est at libero gravida tempus. Vestibulum iaculis eget tortor quis auctor. Aenean id scelerisque sem, id venenatis sapien.', '2021-04-13 20:54:36'),
('test', 'New Editor Test', '<p><span style=\"font-size: 36pt;\"><strong>Testing new editor </strong></span></p><div id=\"lipsum\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis mi vitae risus cursus fermentum. Aliquam ut accumsan diam. Nunc condimentum dolor massa, ut ullamcorper purus pretium quis. Vestibulum est urna, dictum eget iaculis non, malesuada in lectus. In iaculis varius lorem, ac consectetur nunc fringilla ac. Pellentesque cursus arcu sit amet felis sodales, vitae gravida dolor aliquet. Vestibulum augue ipsum, efficitur et tempor eget, tincidunt et massa. Integer eget elit commodo, consectetur diam cursus, porta ligula.</p><p>Etiam convallis orci at maximus tincidunt. Praesent purus justo, commodo eget dolor ac, porttitor fermentum massa. Nunc nec eleifend arcu, quis blandit urna. Curabitur eget tellus urna. Maecenas id sollicitudin sem. Nam laoreet efficitur massa, at interdum neque lobortis a. Maecenas mauris sem, bibendum sed consectetur et, aliquet ac nisi. Donec elementum eros vel nulla lobortis pretium. Aenean interdum tempor egestas. In sollicitudin semper nisl id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nibh metus, vestibulum id aliquam et, dictum in ex. Nam ut justo vitae neque faucibus viverra. Sed porttitor est at libero gravida tempus. Vestibulum iaculis eget tortor quis auctor. Aenean id scelerisque sem, id venenatis sapien.', '2021-04-19 17:05:54'),
('test', 'Test Article', '<p><span style=\"font-size: 36pt;\"><strong>Testing new editor </strong></span></p><div id=\"lipsum\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis mi vitae risus cursus fermentum. Aliquam ut accumsan diam. Nunc condimentum dolor massa, ut ullamcorper purus pretium quis. Vestibulum est urna, dictum eget iaculis non, malesuada in lectus. In iaculis varius lorem, ac consectetur nunc fringilla ac. Pellentesque cursus arcu sit amet felis sodales, vitae gravida dolor aliquet. Vestibulum augue ipsum, efficitur et tempor eget, tincidunt et massa. Integer eget elit commodo, consectetur diam cursus, porta ligula.</p><p>Etiam convallis orci at maximus tincidunt. Praesent purus justo, commodo eget dolor ac, porttitor fermentum massa. Nunc nec eleifend arcu, quis blandit urna. Curabitur eget tellus urna. Maecenas id sollicitudin sem. Nam laoreet efficitur massa, at interdum neque lobortis a. Maecenas mauris sem, bibendum sed consectetur et, aliquet ac nisi. Donec elementum eros vel nulla lobortis pretium. Aenean interdum tempor egestas. In sollicitudin semper nisl id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nibh metus, vestibulum id aliquam et, dictum in ex. Nam ut justo vitae neque faucibus viverra. Sed porttitor est at libero gravida tempus. Vestibulum iaculis eget tortor quis auctor. Aenean id scelerisque sem, id venenatis sapien.', '2021-04-19 18:03:41'),
('test', 'Some Content Title', '<p><span style=\"font-size: 36pt;\"><strong>Testing new editor </strong></span></p><div id=\"lipsum\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis mi vitae risus cursus fermentum. Aliquam ut accumsan diam. Nunc condimentum dolor massa, ut ullamcorper purus pretium quis. Vestibulum est urna, dictum eget iaculis non, malesuada in lectus. In iaculis varius lorem, ac consectetur nunc fringilla ac. Pellentesque cursus arcu sit amet felis sodales, vitae gravida dolor aliquet. Vestibulum augue ipsum, efficitur et tempor eget, tincidunt et massa. Integer eget elit commodo, consectetur diam cursus, porta ligula.</p><p>Etiam convallis orci at maximus tincidunt. Praesent purus justo, commodo eget dolor ac, porttitor fermentum massa. Nunc nec eleifend arcu, quis blandit urna. Curabitur eget tellus urna. Maecenas id sollicitudin sem. Nam laoreet efficitur massa, at interdum neque lobortis a. Maecenas mauris sem, bibendum sed consectetur et, aliquet ac nisi. Donec elementum eros vel nulla lobortis pretium. Aenean interdum tempor egestas. In sollicitudin semper nisl id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nibh metus, vestibulum id aliquam et, dictum in ex. Nam ut justo vitae neque faucibus viverra. Sed porttitor est at libero gravida tempus. Vestibulum iaculis eget tortor quis auctor. Aenean id scelerisque sem, id venenatis sapien.', '2021-04-20 11:21:48');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
