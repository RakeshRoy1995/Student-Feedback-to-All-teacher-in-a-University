-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2019 at 06:46 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `faculty`, `department`, `shift`, `batch`, `subject`, `semester`, `uid`, `q_1`, `q_2`, `q_3`, `q_4`, `q_5`, `q_6`, `q_7`, `q_8`, `q_9`, `q_10`) VALUES
(1, 'Ms. Nazis Sultana', 'science', 'CSE', 'DAY', 38, 'Computer Graphics & Multimedia', 4, 101, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'Ms. Nazis Sultana', 'science', 'CSE', 'DAY', 38, 'Computer Graphics & Multimedia', 10, 101, 5, 1, 1, 5, 1, 5, 1, 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `la_result`
--

DROP TABLE IF EXISTS `la_result`;
CREATE TABLE IF NOT EXISTS `la_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `la_result`
--

INSERT INTO `la_result` (`id`, `total`, `uid`) VALUES
(1, 36, 101);

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `la_uid` int(11) NOT NULL,
  `la_total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `la_uid`, `la_total`) VALUES
(1, 101, 20),
(2, 101, 52);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

DROP TABLE IF EXISTS `student_tbl`;
CREATE TABLE IF NOT EXISTS `student_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `Id` varchar(111) NOT NULL,
  `name` varchar(256) NOT NULL,
  `roll` varchar(111) NOT NULL,
  `Reg_number` varchar(40) NOT NULL,
  `faculty` varchar(211) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `Phone no` varchar(40) NOT NULL,
  `shift` varchar(44) DEFAULT NULL,
  `batch` varchar(44) DEFAULT NULL,
  `password1` varchar(100) DEFAULT NULL,
  `password` varchar(91) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`s_id`, `Id`, `name`, `roll`, `Reg_number`, `faculty`, `department`, `Phone no`, `shift`, `batch`, `password1`, `password`) VALUES
(1, 'Id', 'name', 'roll', 'Reg_number', 'faculty', 'department', 'Phone no', 'shift', 'batch', 'password1', 'password'),
(2, '1085', 'TUMPA RANI SARKER', '1', 'CS-D-15-39-101086', 'science', 'CSE', '01788172250', 'DAY', '39', '-', '1085'),
(3, '1087', 'PEAL HASAN', '3', 'CS-D-15-39-101088', 'science', 'CSE', '01535708105', 'DAY', '39', '-', '1087'),
(4, '1088', 'AL SAFUAN MAUGDHA', '4', 'CS-D-15-39-101089', 'science', 'CSE', '01967245001', 'DAY', '39', '-', '1088'),
(5, '1089', 'SHADAKUR RAHMAN KHAN', '5', 'CS-D-15-39-101090', 'science', 'CSE', '01833988190', 'DAY', '39', '-', '1089'),
(6, '1090', 'MD ABDULLAH AL MAMUN', '6', 'CS-D-15-39-101091', 'science', 'CSE', '01786822710', 'DAY', '39', '-', '1090'),
(7, '1092', 'ABU SAYED', '8', 'CS-D-15-39-101093', 'science', 'CSE', '01832343822', 'DAY', '39', '-', '1092'),
(8, '1093', 'TOWAHA MD MODASSIR', '9', 'CS-D-15-39-101094', 'science', 'CSE', '01861222904', 'DAY', '39', '-', '1093'),
(9, '1254', 'MD NURUZZAMAN', '10', 'CS-D-15-39-101255', 'science', 'CSE', '01860824050', '-DAY', '39', '-', '1254'),
(10, '1255', 'MD SHIBLY NOMANY', '11', 'CS-D-15-39-101256', 'science', 'CSE', '01774434055', 'DAY', '39', '-', '1255'),
(11, '1256', 'MD FARID AHSAN', '12', 'CS-D-15-39-101257', 'science', 'CSE', '01792753836', 'DAY', '39', '-', '1256'),
(12, '1258', 'MD AMIR HAMJA', '14', 'CS-D-15-39-101259', 'science', 'CSE', '01926702465', 'DAY', '39', '-', '1258'),
(13, '1259', 'SADIA JANNAT', '15', 'CS-D-15-39-101260', 'science', 'CSE', '01776900107', 'DAY', '39', '-', '1259'),
(14, '1260', 'MD ZAHIDUL ISLAM', '16', 'CS-D-15-39-101261', 'science', 'CSE', '01773025991', 'DAY', '39', '-', '1260'),
(15, '1328', 'PALASH KUMAR', '17', 'CS-D-15-39-101329', 'science', 'CSE', '01773037691', 'DAY', '39', '-', '1328'),
(16, '1329', 'MD ANISUR RAHMAN', '18', 'CS-D-15-39-101330', 'science', 'CSE', '01676652089', 'DAY', '39', '-', '1329'),
(17, '1330', 'SHAMOL KUMER DAS', '19', 'CS-D-15-39-101331', 'science', 'CSE', '01962447476', 'DAY', '39', '-', '1330'),
(18, '1331', 'HENA BANU', '20', 'CS-D-15-39-101332', 'science', 'CSE', '01777960655', 'DAY', '39', '-', '1331'),
(19, '1332', 'MAZHARUL ISLAM', '21', 'CS-D-15-39-101333', 'science', 'CSE', '01737275181', 'DAY', '39', '-', '1332'),
(20, '1446', 'MD JALAL MULLAH', '22', 'CS-D-15-39-101447', 'science', 'CSE', '01758586035', 'DAY', '39', '-', '1446'),
(21, '1447', 'MD AL ASAD', '23', 'CS-D-15-39-101448', 'science', 'CSE', '01831627560', 'DAY', '39', '-', '1447'),
(22, '1448', 'MD FAZLAY RABBY', '24', 'CS-D-15-39-101449', 'science', 'CSE', '01773416629', 'DAY', '39', '-', '1448'),
(23, '1449', 'JEMES TIMOTHIO MOLLICK', '25', 'CS-D-15-39-101450', 'science', 'CSE', '01735336898', 'DAY', '39', '-', '1449'),
(24, '1450', 'SAMRIN JAHAN', '26', 'CS-D-15-39-101451', 'science', 'CSE', '01778496213', 'DAY', '39', '-', '1450'),
(25, '1536', 'MD MAHADI HASAN TUSHAER', '27', 'CS-D-15-39-101537', 'science', '-CSE', '01798924292', 'DAY', '39', '-', '1536'),
(26, '1537', 'MURSALINA', '28', 'CS-D-15-39-101538', 'science', 'CSE', '01798947347', 'DAY', '39', '-', '1537'),
(27, '1538', 'SHAHADA HOSSAIN SHAMIM', '29', 'CS-D-15-39-101539', 'science', 'CSE', '01521430183', 'DAY', '39', '-', '1538'),
(28, '1539', 'ABDUL MOTTALIB', '30', 'CS-D-15-39-101540', 'science', 'CSE', '01712136986', 'DAY', '39', '-', '1539'),
(29, '1540', 'SHEKHER BARAI', '31', 'CS-D-15-39-101541', 'science', 'CSE', '01747776722', 'DAY', '39', '-', '1540'),
(30, '1541', 'MD NAHDUL ISLAM', '32', 'CS-D-15-39-101542', 'science', 'CSE', '01980383934', 'DAY', '39', '-', '1541'),
(31, '1615', 'MD ABDULLA AL NOMAN', '33', 'CS-D-15-39-101616', 'science', 'CSE', '01952855084', 'DAY', '39', '-', '1615'),
(32, '1663', 'MD MOSTOFA KAMAL', '34', 'CS-D-15-39-101664', 'science', 'CSE', '01766311101', 'DAY', '39', '-', '1663'),
(33, '1664', 'ATM JOHIRUL HAQUE', '35', 'CS-D-15-39-101665', 'science', 'CSE', '01672624772', 'DAY', '39', '-', '1664'),
(34, '1665', 'AIUB MIA', '36', 'CS-D-15-39-101666', 'science', 'CSE', '01985646217', 'DAY', '39', '-', '1665'),
(35, '1666', 'ABU BAKKAR SIDDIK', '37', 'CS-D-15-39-101667', 'science', 'CSE', '01740124863', 'DAY', '39', '-', '1666'),
(36, '1667', 'SAKARIYE YASIN MOHAMED', '38', 'CS-D-15-39-101668', 'science', 'CSE', '01630334205', 'DAY', '39', '-', '1667'),
(37, '1668', 'MD MOKTADIR REZA AMIT', '39', 'CS-D-15-39-101669', 'science', 'CSE', '01871922876', 'DAY', '39', '-', '1668'),
(38, '1733', 'MD RIMON MIAH', '40', 'CS-D-15-39-101734', 'science', 'CSE', '01770400610', 'DAY', '39', '-', '1733'),
(39, '1734', 'MD RASIDUL ISLAM', '41', 'CS-D-15-39-101735', 'science', 'CSE', '01620800189', 'DAY', '39', '-', '1734'),
(40, '1952', 'RAKESH ROY', '42', 'CS-D-15-39-101953', 'science', '-CSE', '01916887998', 'DAY', '39', '-', '1952'),
(41, '11528', 'MOHAMED SHUKRI GULED', '43', 'CS-D-39-17-107024-CT', 'science', '-CSE', '01629079850', 'DAY', '39', '', '11528'),
(42, '5031', 'MD. SHOAIB HOSSAIN', '44', '275928', 'science', '-CSE', '01942095394', '-DAY', '-39', '-', '5031'),
(43, '366', 'KAAL HARER ABDULLE', '1', 'CS-D-15-38-100366', 'science', 'CSE', '01754476554', 'DAY', '38', '-', '366'),
(44, '525', 'YESMIN AKTER', '2', 'CS-D-15-38-100525', 'science', 'CSE', '01625274449', 'DAY', '38', '-', '525'),
(45, '704', 'MD NADIM AHMED', '4', 'CS-D-15-38-100704', 'science', 'CSE', '01725556392', 'DAY', '38', '-', '704'),
(46, '705', 'MD ASHADUZ JAMAN PRANTO', '5', 'CS-D-15-38-100705', 'science', 'CSE', '0194555377', 'DAY', '38', '-', '705'),
(47, '737', 'MEHEDI HASSAN', '6', 'CS-D-15-38-100737', 'science', 'CSE', '01718653292', 'DAY', '38', '-', '737'),
(48, '810', 'DIP NARAYAN ROY', '7', 'CS-D-15-38-100810', 'science', 'CSE', '01964784244', 'DAY', '38', '-', '810'),
(49, '777', 'MD NASAR UDDIN', '8', 'CS-D-15-38-100777', 'science', 'CSE', '01930067384', 'DAY', '38', '-', '777'),
(50, '794', 'TASPRIA AFRIN', '9', 'CS-D-15-38-100794', 'science', 'CSE', '01837665581', 'DAY', '38', '-', '794'),
(51, '811', 'SUMON PATRA', '10', 'CS-D-15-38-100811', 'science', 'CSE', '01677139177', 'DAY', '38', '-', '811'),
(52, '818', 'MD FERDAOUS ALAM', '11', 'CS-D-15-38-100818', 'science', 'CSE', '01793783035', 'DAY', '38', '-', '818'),
(53, '825', 'MD TONMOY ISLAM', '12', 'CS-D-15-38-100825', 'science', 'CSE', '01703637495', 'DAY', '38', '-', '825'),
(54, '853', 'MD MASUM PATW RI', '13', 'CS-D-15-38-100853', 'science', 'CSE', '01721004547', 'DAY', '38', '-', '853'),
(55, '854', 'HUMAYOUN KOBIR', '14', 'CS-D-15-38-100854', 'science', 'CSE', '01737532859', 'DAY', '38', '-', '854'),
(56, '855', 'MD JASIMUDDIN', '15', 'CS-D-15-38-100855', 'science', 'CSE', '01827591420', 'DAY', '38', '-', '855'),
(57, '863', 'MD TANBIR RAHAMAN', '16', 'CS-D-15-38-100863', 'science', 'CSE', '01684969650', 'DAY', '38', '-', '863'),
(58, '864', 'MARIA SULTANA', '17', 'CS-D-15-38-100864', 'science', 'CSE', '01989368994', 'DAY', '38', '-', '864'),
(59, '883', 'MOHAMMAD NAYEM HOSSAIN', '18', 'CS-D-15-38-100883', 'science', 'CSE', '01931676136', 'DAY', '38', '-', '883'),
(60, '884', 'ASRAF HOSSAIN PATOARY', '19', 'CS-D-15-38-100884', 'science', 'CSE', '01816032138', 'DAY', '38', '-', '884'),
(61, '903', 'MD MEHEDI HASAN', '20', 'CS-D-15-38-100903', 'science', 'CSE', '01779084056', 'DAY', '38', '-', '903'),
(62, '935', 'ABDULLAH AL-NAHIAN', '21', 'CS-D-15-38-100936', 'science', 'CSE', '01712001033', 'DAY', '38', '-', '935'),
(63, '937', 'MUNTAQIN AHMED RAJU', '22', 'CS-D-15-38-100938', 'science', 'CSE', '01620471145', 'DAY', '38', '-', '937'),
(64, '938', 'MD AMIT HASAN', '23', 'CS-D-15-38-100939', 'science', 'CSE', '01738554269', 'DAY', '38', '-', '938'),
(65, '975', 'MD MOSTAFIZUR RAHMAN', '24', 'CS-D-15-38-100976', 'science', 'CSE', '01719800752', 'DAY', '38', '-', '975'),
(66, '1039', 'MD OMAR FARUK ASKAR', '25', 'CS-D-15-38-101040', 'science', 'CSE', '01744333022', 'DAY', '38', '-', '1039'),
(67, '1040', 'MORSHEDUR RAHMAN RANA', '26', 'CS-D-15-38-101041', 'science', 'CSE', '01521254475', 'DAY', '38', '-', '1040'),
(68, '1041', 'AFROJA AKTER', '27', 'CS-D-15-38-101042', 'science', 'CSE', '01795887477', 'DAY', '38', '-', '1041'),
(69, '1042', 'MD MASHIUR RAHAMAN', '28', 'CS-D-15-38-101043', 'science', 'CSE', '01910210454', 'DAY', '38', '-', '1042'),
(70, '1043', 'MST SUMA AKTER', '29', 'CS-D-15-38-101044', 'science', 'CSE', '01910809112', 'DAY', '38', '-', '1043'),
(71, '787', 'MAHBUBUR RAHMAN', '30', 'CS-D-15-38-100787', 'science', 'CSE', '01626010228', 'DAY', '38', '-', '787'),
(72, '1044', 'SADEKUR RAHMAN SHIKDER', '31', 'CS-D-15-38-101045', 'science', 'CSE', '01558911268', 'DAY', '38', '-', '1044'),
(73, '1045', 'SABRINA SAYLA', '32', 'CS-D-15-38-101046', 'science', 'CSE', '01720035852', 'DAY', '38', '-', '1045'),
(74, '1046', 'MD ABDUL KAIUM', '33', 'CS-D-15-38-101047', 'science', 'CSE', '01685559569', 'DAY', '38', '-', '1046'),
(75, '1047', 'PRONAY MANDAL', '34', 'CS-D-15-38-101048', 'science', 'CSE', '01714968288', 'DAY', '38', '-', '1047'),
(76, '1048', 'MD BORHAN UDDIN KHAN', '35', 'CS-D-15-38-101049', 'science', 'CSE', '01757513990', 'DAY', '38', '-', '1048'),
(77, '1051', 'MD MEHEDI HASAN', '38', 'CS-D-15-38-101052', 'science', 'CSE', '01709419704', 'DAY', '38', '-', '1051'),
(78, '1052', 'SUHEL MIA', '39', 'CS-D-15-38-101053', 'science', 'CSE', '01925101163', 'DAY', '38', '-', '1052'),
(79, '1053', 'ALIF MUSTAKIN', '40', 'CS-D-15-38-101054', 'science', 'CSE', '01685460079', 'DAY', '38', '-', '1053'),
(80, '1064', 'MD SHIFAT AHMED SHISHIR', '41', 'CS-D-15-38-101065', 'science', 'CSE', '01853625825', 'DAY', '38', '-', '1064'),
(81, '1065', 'MST ASHIFA ANJUMAN', '42', 'CS-D-15-38-101066', 'science', 'CSE', '01793493541', 'DAY', '38', '-', '1065'),
(82, '1066', 'MD MONIRUL ISLAM', '43', 'CS-D-15-38-101067', 'science', 'CSE', '01761580582', 'DAY', '38', '-', '1066'),
(83, '1068', 'MD NASRULLHA HAQUE', '45', 'CS-D-15-38-101069', 'science', 'CSE', '01728383333', 'DAY', '38', '-', '1068'),
(84, '651', 'FAHAD SHAKIR HASSAN', '46', 'CS-D-15-38-100651', 'science', 'CSE', '01706681317', 'DAY', '38', '-', '651'),
(85, '1103', 'MD RAKIB ISTIAK', '47', 'CS-D-15-38-101104', 'science', 'CSE', '01986510268', 'DAY', '38', '-', '1103'),
(86, '1708', 'IBRAHIM OMER ALI', '48', 'CS-D-15-38-101709', 'science', 'CSE', '01843220071', 'DAY', '38', '-', '1708'),
(87, '5019', 'MD. SAJOL HOSSAIN', '49', 'CS-D-15-38-275916', 'science', 'CSE', '01685792847', 'DAY', '38', '-', '5019science\n');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachar_tbl`
--

INSERT INTO `teachar_tbl` (`id`, `name`, `faculty`, `department`, `shift`, `batch`, `course_name`, `email`, `number`, `image`, `uid`, `password`) VALUES
(1, 'Ms. Nazis Sultana', 'science', 'CSE', 'DAY', 38, 'Computer Graphics & Multimedia', 'dhakatop6@gmail.com', '22', 'image/blur-blurred-background-colors-754082.jpg', 101, '123456'),
(2, 'Ms. Nazis Sultana', 'science', 'CSE', 'DAY', 38, 'Computer Graphics & Multimedia Lab', 'dhakatop6@gmail.com', '22', 'image/blur-blurred-background-colors-754082.jpg', 101, '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
