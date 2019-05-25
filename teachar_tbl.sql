-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2019 at 08:33 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachar_tbl`
--

DROP TABLE IF EXISTS `teachar_tbl`;
CREATE TABLE IF NOT EXISTS `teachar_tbl` (
  `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  `course_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` int(6) NOT NULL,
  `password` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachar_tbl`
--

INSERT INTO `teachar_tbl` (`id`, `name`, `faculty`, `department`, `shift`, `batch`, `course_name`, `email`, `number`, `image`, `uid`, `password`) VALUES
(1, 'Ms. Nazis Sultana', 'science', 'CSE', 'DAY', 38, 'Computer Graphics & Multimedia', 'dhakatop6@gmail.com', '22', 'image/blur-blurred-background-colors-754082.jpg', 101, '123456'),
(2, 'Ms. Nazis Sultana', 'science', 'CSE', 'DAY', 38, 'Computer Graphics & Multimedia Lab', 'dhakatop6@gmail.com', '22', 'image/blur-blurred-background-colors-754082.jpg', 101, '123456'),
(3, 'Md. Al Bashir', 'science', 'CSE', 'DAY', 38, 'Artificial Intelligence & Neural Networks', 'polashkumar3942@gmail.com', '3333', 'image/s-l300.jpg', 102, '123456'),
(4, 'Md. Al Bashir', 'science', 'CSE', 'DAY', 38, 'Artificial Intelligence & Neural Networks Lab', 'polashkumar3942@gmail.com', '3333', 'image/s-l300.jpg', 102, '123456'),
(5, 'Asst. Prof. Md.Habibullah Belali', 'science', 'CSE', 'DAY', 38, 'Parallel and Distributed Processing', 'dhakatop6@gmail.com', '78888888', 'image/item_XL_23504731_92360703.jpg', 103, '123456'),
(6, 'Assoc. Prof. Ms. Jahanara Akhtar', 'science', 'CSE', 'DAY', 39, 'Computer Graphics & Multimedia', 'rajibshovon@gmail.com', '3333', 'image/item_XL_23504731_92360703.jpg', 104, '123456'),
(7, 'Assoc. Prof. Ms. Jahanara Akhtar', 'science', 'CSE', 'DAY', 39, 'Computer Graphics & Multimedia Lab', 'rajibshovon@gmail.com', '3333', 'image/item_XL_23504731_92360703.jpg', 104, '123456'),
(8, 'Mr. Samrat Kumar Dey', 'science', 'CSE', 'DAY', 39, 'Artificial Intelligence & Neural Networks', 'dhakatop6@gmail.com', '78888888', 'image/s-l300.jpg', 105, '123456'),
(9, 'Mr. Samrat Kumar Dey', 'science', 'CSE', 'DAY', 39, 'Artificial Intelligence & Neural Networks Lab', 'dhakatop6@gmail.com', '78888888', 'image/s-l300.jpg', 105, '123456'),
(10, 'Md. Abu Sayed', 'science', 'CSE', 'DAY', 39, 'Parallel and Distributed Processing', 'dhakatop6@gmail.com', '78888888', 'image/s-l300.jpg', 106, '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
