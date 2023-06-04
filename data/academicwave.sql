-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 03:06 AM
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
-- Database: `academicwave`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` int(11) NOT NULL,
  `courseName` float(2,1) DEFAULT NULL,
  `courseWork_1` float(2,1) DEFAULT NULL,
  `courseWork_2` float(2,1) DEFAULT NULL,
  `midTerm` float(2,1) DEFAULT NULL,
  `finalExam` float(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollmentId` int(11) NOT NULL,
  `stuId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stuId` int(11) NOT NULL,
  `stuName` char(50) DEFAULT NULL,
  `stuAge` int(11) NOT NULL,
  `stuUserName` char(50) NOT NULL,
  `stuPassword` char(50) NOT NULL,
  `stuCourse` char(50) DEFAULT NULL,
  `stuEmail` char(50) DEFAULT NULL,
  `stuCountry` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stuId`, `stuName`, `stuAge`, `stuUserName`, `stuPassword`, `stuCourse`, `stuEmail`, `stuCountry`) VALUES
(1, 'Lucas Corradini', 20, 'lu-corradini', '$2y$10$RKdKA68F4NBc2XWHYSulreEDWbcwT3nbUnpX.j70gnG', 'Data Science', 'lucas.corradini.2003@gmail.com', 'Brazil'),
(2, 'Lothario Huby', 31, 'lhuby1', '$2y$10$YfJk.W0QjHuMDEhdN91AMeeMSC21sPu3vp.CuGFhQMu', 'Digital Marketing', 'lhuby1@netlog.com', 'Russia'),
(3, 'Luella Corkel', 33, 'lcorkel2', '$2y$10$lSLh3ww064OipInpcbMfaeI3rQYJLDYjkDzZWvCrbNK', 'Cibersecurity', 'lcorkel2@moonfruit.com', 'Honduras'),
(4, 'Harmonia Ciotti', 24, 'hciotti3', '$2y$10$yCx8eA064RplT8fEvE5WZOlcs.adNywtGzW0rOMwRS2', 'Culinary Arts', 'hciotti3@usatoday.com', 'China'),
(5, 'Lyell Elphinston', 29, 'lelphinston4', '$2y$10$neSWaM6DNHpHaS..I/LDkuMEFTLJciOhMY47ji5Vltl', 'Psychology', 'lelphinston4@cdbaby.com', 'Sweden'),
(6, 'Lazaro Baglin', 24, 'lbaglin5', '$2y$10$HZuaGR/Q4sBaKT3Le17bx.lMAYv/gxy1rJrY6F15sV0', 'Public Relations', 'lbaglin5@mediafire.com', 'France'),
(7, 'Adolphe Garms', 39, 'agarms6', '$2y$10$FLsZdi7TOmM6FYCD16dB4ugANQ86Yr4ty5j.Z5QxLx7', 'Culinary Arts', 'agarms6@amazon.de', 'Denmark'),
(8, 'Elora Marczyk', 33, 'emarczyk7', '$2y$10$wlqCqtJT9jtg5pYNQ4bkLumAGeyH9subuwhCN1PgQgh', 'Digital Marketing', 'emarczyk7@lycos.com', 'Chile'),
(9, 'Derek Babon', 26, 'dbabon8', '$2y$10$oaPWMDR.eAPXc4hl4PuwEO3aTEpvI9bR1RU1fwAovqX', 'Digital Marketing', 'dbabon8@go.com', 'Indonesia'),
(10, 'Dewey Cattel', 21, 'dcattel9', '$2y$10$xyzzYJItBHZLEPAGOSMf7uzz..MGWj.6qvRdcziNtnt', 'Culinary Arts', 'dcattel9@apple.com', 'France'),
(11, 'Broderick Bellringer', 44, 'bbellringera', '$2y$10$yF9EwRQZVvFLfjoaBIfrOuJnopqtCTaNRrhg8MBw4A7', 'Digital Marketing', 'bbellringera@webmd.com', 'Indonesia'),
(12, 'Aaren Canlin', 23, 'acanlinb', '$2y$10$cZTjzAhdImsQY7gyqQucIe189W04u6F9CcDVF3CW1T4', 'Culinary Arts', 'acanlinb@jimdo.com', 'United States'),
(13, 'Gabbey Mityashev', 39, 'gmityashevc', '$2y$10$85maXoku1C.C6CkkdyjusOPGFwQV4yF1wIAacJRTutI', 'Data Science', 'gmityashevc@addtoany.com', 'Mexico'),
(14, 'Aeriel Pedwell', 34, 'apedwelld', '$2y$10$mkArXRVymlKVe4Ot05f4ue41LtGknHrKs2ckqpT2A6f', 'Cibersecurity', 'apedwelld@alibaba.com', 'Indonesia'),
(15, 'Abigael Ipsley', 35, 'aipsleye', '$2y$10$3W.SYhGzkYBdRZjR02hWvOChR1XHXz4A9jwVDTYcNJ9', 'Culinary Arts', 'aipsleye@google.pl', 'Mexico'),
(16, 'Sophie Grigorini', 21, 'sgrigorinif', '$2y$10$w3AifnKsF/rlHXgw.GAFAuQXmyWO54vZlXyomYp9o5I', 'Public Relations', 'sgrigorinif@facebook.com', 'Indonesia'),
(17, 'Lombard Austwick', 21, 'laustwickg', '$2y$10$XfvXfxUy1X66BUKmEqs7v.lObp8rx3D2IYiOjwCQhK1', 'Public Relations', 'laustwickg@opensource.org', 'China'),
(18, 'Bernardo Conville', 44, 'bconvilleh', '$2y$10$4lz/YExSfxtHSDGujZd9ouqgkX1hpfPUuq04WGIk6Ul', 'Digital Marketing', 'bconvilleh@shutterfly.com', 'Netherlands'),
(19, 'Billie Furman', 22, 'bfurmani', '$2y$10$bm1o0s.i670AsPVAGGPDXe01JyuphaY3hSJPKKmEr0z', 'Psychology', 'bfurmani@imageshack.us', 'Philippines'),
(20, 'Carr Vedntyev', 36, 'cvedntyevj', '$2y$10$XaJuR72b.CYnejH2NWLBM.Om44HT9RQKoDJgnPjtgY7', 'Data Science', 'cvedntyevj@posterous.com', 'Indonesia'),
(21, 'Leticia Guerra', 20, 'Le-Guerra', '$2y$10$wRFmUedTEHTgOpgnjL8.k.c41AiMO2sGtALwJElPXED', 'PHP', 'LeGuerra@gmail.com', 'Brazil'),
(22, 'Pedro', 20, 'pedro_ssgarcia', '$2y$10$14PCpQOm0Gl/S.1IpRo6iOX6RwG9b8x0R7Gvrhi1qLU', 'JavaScript', 'pedro@gmai.com', 'Mineiro');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherId` int(11) NOT NULL,
  `teacherName` char(50) DEFAULT NULL,
  `teacherUserName` char(50) NOT NULL,
  `teacherPassword` char(50) NOT NULL,
  `courseId` int(11) NOT NULL,
  `teacherEmail` char(50) DEFAULT NULL,
  `teacherPhoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherId`, `teacherName`, `teacherUserName`, `teacherPassword`, `courseId`, `teacherEmail`, `teacherPhoneNumber`) VALUES
(1, 'Zelda Feldstein', 'zfeldstein0', 'EXW2sD9HVPVL', 1, 'zfeldstein0@mozilla.org', 262),
(2, 'Rosalind Bletso', 'rbletso1', 'euQUsrm', 2, 'rbletso1@scientificamerican.com', 612),
(3, 'Richard Sambath', 'rsambath2', 'LPwEM52oU5', 3, 'rsambath2@redcross.org', 489),
(4, 'Goldy Borthe', 'gborthe3', 'Y7699ZKi2cT', 4, 'gborthe3@51.la', 216),
(5, 'Orran Stoaks', 'ostoaks4', '5NY5CxFYsz0T', 5, 'ostoaks4@livejournal.com', 852),
(6, 'Aldridge Wennington', 'awennington5', 'klKToQeF', 6, 'awennington5@booking.com', 729);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollmentId`),
  ADD KEY `stuId` (`stuId`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stuId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollmentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`stuId`) REFERENCES `students` (`stuId`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
