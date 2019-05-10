-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2019 at 08:00 PM
-- Server version: 5.7.21
-- PHP Version: 7.0.29

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(33) NOT NULL,
  `shift` varchar(33) NOT NULL,
  `batch` int(5) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `semester` int(2) NOT NULL,
  `uid` int(11) NOT NULL,
  `q_1` int(2) DEFAULT NULL,
  `q_2` int(2) DEFAULT NULL,
  `q_3` int(2) DEFAULT NULL,
  `q_4` int(2) DEFAULT NULL,
  `q_5` int(2) DEFAULT NULL,
  `q_6` int(2) DEFAULT NULL,
  `q_7` int(2) DEFAULT NULL,
  `q_8` int(2) DEFAULT NULL,
  `q_9` int(2) DEFAULT NULL,
  `q_10` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `faculty`, `department`, `shift`, `batch`, `subject`, `semester`, `uid`, `q_1`, `q_2`, `q_3`, `q_4`, `q_5`, `q_6`, `q_7`, `q_8`, `q_9`, `q_10`) VALUES
(1, 'k m mohiuddin', 'science', 'CSE', 'DAY', 39, 'Peripheral', 9, 101, 5, 5, 5, 1, 3, 1, 1, 1, 1, 1),
(2, 'k m mohiuddin', 'science', 'CSE', 'DAY', 39, 'Peripheral', 10, 101, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 'k m mohiuddin', 'science', 'CSE', 'DAY', 39, 'Peripheral', 8, 101, 5, 1, 3, 1, 1, 4, 1, 3, 1, 4),
(4, 'K M Mohiuddin', 'science', 'CSE', 'DAY', 39, 'Peripheral', 11, 101, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `la_result`
--

DROP TABLE IF EXISTS `la_result`;
CREATE TABLE IF NOT EXISTS `la_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` float NOT NULL,
  `uid` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `la_result`
--

INSERT INTO `la_result` (`id`, `total`, `uid`) VALUES
(1, 34, 101),
(2, 0, 10154),
(3, 0, 145852);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_06_180419_create_admin', 1),
(2, '2019_03_17_184028_create_teachar_table', 2),
(3, '2019_03_17_191150_create_teachar_tbl_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

DROP TABLE IF EXISTS `ques`;
CREATE TABLE IF NOT EXISTS `ques` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `ques_1` varchar(200) DEFAULT NULL,
  `ques_2` varchar(256) DEFAULT NULL,
  `ques_3` varchar(256) DEFAULT NULL,
  `ques_4` varchar(200) DEFAULT NULL,
  `ques_5` varchar(200) DEFAULT NULL,
  `ques_6` varchar(200) DEFAULT NULL,
  `ques_7` varchar(100) DEFAULT NULL,
  `ques_8` varchar(100) DEFAULT NULL,
  `ques_9` varchar(100) DEFAULT NULL,
  `ques_10` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `ques_1`, `ques_2`, `ques_3`, `ques_4`, `ques_5`, `ques_6`, `ques_7`, `ques_8`, `ques_9`, `ques_10`) VALUES
(1, 'Providing Syllabus and lesson plan to students at the beginning of the semester and following this properly .', 'Is he/she always well prepared?', 'How much prepared does he/she take for giving his/her lesson?', 'His/Her efficiency to make a subject clear', 'How much are his/her efforts for providing updated information?', 'How is his attention to individual students', 'How do u consider his/her temperament in dealing with the student', 'Is he/she always punctual in starting and ending the class?', 'Is he fair in evaluting ___ the students?', 'Is he/she available fo student\'s consultation?');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `la_uid` int(11) NOT NULL,
  `la_total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `la_uid`, `la_total`) VALUES
(1, 101, 48),
(2, 101, 20),
(3, 101, 48),
(4, 101, 20);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

DROP TABLE IF EXISTS `student_tbl`;
CREATE TABLE IF NOT EXISTS `student_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `faculty` varchar(33) NOT NULL,
  `department` varchar(33) NOT NULL,
  `roll` int(2) NOT NULL,
  `shift` varchar(11) NOT NULL,
  `batch` int(5) NOT NULL,
  `Reg_number` varchar(225) NOT NULL,
  `password` varchar(33) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `name`, `faculty`, `department`, `roll`, `shift`, `batch`, `Reg_number`, `password`, `time`) VALUES
(6, 'jalal Mollah', 'science', 'CSE', 22, 'DAY', 39, '101936', '12345', '2019-04-02 13:33:56'),
(7, 'Rakesh Roy', 'science', 'CSE', 42, 'DAY', 39, '101953', '12345', '2019-05-08 14:14:07');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachar_tbl`
--

INSERT INTO `teachar_tbl` (`id`, `name`, `faculty`, `department`, `shift`, `batch`, `course_name`, `email`, `number`, `image`, `uid`, `password`) VALUES
(22, 'Jahanara aktar', 'science', 'CSE', 'DAY', 38, 'Peripheral', 'rajibshovon@gmail.com', '01917886998', 'image/blur-blurred-background-colors-754082.jpg', 104, '12345'),
(19, 'K M Mohiuddin', 'science', 'CSE', 'DAY', 39, 'Peripheral', 'dhakatop6@gmail.com', '01917886998', 'image/laptop_PNG5908.png', 101, '12345'),
(20, 'Johir', 'science', 'CSE', 'DAY', 39, 'PHYSICS', 'rajibshovon@gmail.com', '01917886998', 'image/_MG_6791.JPG', 102, 'jghfgff'),
(21, 'Samrat Kumar Dey', 'science', 'CSE', 'DAY', 39, 'AI', 'rajibshovon@gmail.com', '545120101', 'image/photo-1516617442634-75371039cb3a.jpg', 103, '12345'),
(28, 'Rakesh Roy', 'science', 'CSE', 'DAY', 12, 'AI', 'rakeshroyshuvo@gmail.com', '22', 'image/blur-blurred-background-colors-754082.jpg', 10154, 'jkfjfv'),
(29, 'jalal', 'science', 'CSE', 'DAY', 100, 'PHYSICS', 'polashkumar3942@gmail.com', '01917886998', 'image/laptop_PNG5908.png', 145852, 'gyvvbvbcv gvgvghv');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
