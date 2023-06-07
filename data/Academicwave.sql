-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 23-06-07 20:14
-- 서버 버전: 10.4.28-MariaDB
-- PHP 버전: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `Academicwave`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `course`
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
-- 테이블 구조 `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollmentId` int(11) NOT NULL,
  `stuId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `notice`
--

CREATE TABLE `notice` (
  `noticeId` int(11) NOT NULL,
  `noticeTitle` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `writeDate` date NOT NULL DEFAULT current_timestamp(),
  `writer` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 테이블의 덤프 데이터 `notice`
--

INSERT INTO `notice` (`noticeId`, `noticeTitle`, `description`, `writeDate`, `writer`) VALUES
(2, 'Hello everyone', 'I wish you a great welcome.', '2023-06-07', 'Zelda Feldstein');

-- --------------------------------------------------------

--
-- 테이블 구조 `students`
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
-- 테이블의 덤프 데이터 `students`
--

INSERT INTO `students` (`stuId`, `stuName`, `stuAge`, `stuUserName`, `stuPassword`, `stuCourse`, `stuEmail`, `stuCountry`) VALUES
(1, 'Lucas Corradini', 20, 'lu-corradini', '1013', 'Data Science', 'lucas.corradini.2003@gmail.com', 'Brazil'),
(2, 'Lothario Huby', 31, 'lhuby1', 'tdlk3SEL0ofo', 'Digital Marketing', 'lhuby1@netlog.com', 'Russia'),
(3, 'Luella Corkel', 33, 'lcorkel2', 'LrZdR3L', 'Cibersecurity', 'lcorkel2@moonfruit.com', 'Honduras'),
(4, 'Harmonia Ciotti', 24, 'hciotti3', '2X19e5RD', 'Culinary Arts', 'hciotti3@usatoday.com', 'China'),
(5, 'Lyell Elphinston', 29, 'lelphinston4', 'dil30tKt', 'Psychology', 'lelphinston4@cdbaby.com', 'Sweden'),
(6, 'Lazaro Baglin', 24, 'lbaglin5', 'iy7NgfZSU', 'Public Relations', 'lbaglin5@mediafire.com', 'France'),
(7, 'Adolphe Garms', 39, 'agarms6', '0ZgEPjT', 'Culinary Arts', 'agarms6@amazon.de', 'Denmark'),
(8, 'Elora Marczyk', 33, 'emarczyk7', 'gKz5rTtSjCZ', 'Digital Marketing', 'emarczyk7@lycos.com', 'Chile'),
(9, 'Derek Babon', 26, 'dbabon8', 'GB7tP2Em4', 'Digital Marketing', 'dbabon8@go.com', 'Indonesia'),
(10, 'Dewey Cattel', 21, 'dcattel9', '5fb0aB71', 'Culinary Arts', 'dcattel9@apple.com', 'France'),
(11, 'Broderick Bellringer', 44, 'bbellringera', 'sLdbvQ', 'Digital Marketing', 'bbellringera@webmd.com', 'Indonesia'),
(12, 'Aaren Canlin', 23, 'acanlinb', '8VdYwmyd', 'Culinary Arts', 'acanlinb@jimdo.com', 'United States'),
(13, 'Gabbey Mityashev', 39, 'gmityashevc', '8XOnYH0', 'Data Science', 'gmityashevc@addtoany.com', 'Mexico'),
(14, 'Aeriel Pedwell', 34, 'apedwelld', 'MRJNWk38T6BV', 'Cibersecurity', 'apedwelld@alibaba.com', 'Indonesia'),
(15, 'Abigael Ipsley', 35, 'aipsleye', 'nmJCxZ5c', 'Culinary Arts', 'aipsleye@google.pl', 'Mexico'),
(16, 'Sophie Grigorini', 21, 'sgrigorinif', 'cRe8a6g1', 'Public Relations', 'sgrigorinif@facebook.com', 'Indonesia'),
(17, 'Lombard Austwick', 21, 'laustwickg', '4IuynKSnBAl', 'Public Relations', 'laustwickg@opensource.org', 'China'),
(18, 'Bernardo Conville', 44, 'bconvilleh', 'Dso6H1b2', 'Digital Marketing', 'bconvilleh@shutterfly.com', 'Netherlands'),
(19, 'Billie Furman', 22, 'bfurmani', 'UTpxr82qDh', 'Psychology', 'bfurmani@imageshack.us', 'Philippines'),
(20, 'Carr Vedntyev', 36, 'cvedntyevj', 'WJc5e3jN1l', 'Data Science', 'cvedntyevj@posterous.com', 'Indonesia'),
(21, 'Leonanie Lubbock', 44, 'llubbockk', '0DbyPiv', 'Public Relations', 'llubbockk@ihg.com', 'Brazil'),
(22, 'Hali Towson', 32, 'htowsonl', 'XYARXr', 'Psychology', 'Cibersecurity', 'Sweden'),
(23, 'Tulley Zavittieri', 40, 'tzavittierim', 'Ii6RmKAF', 'Culinary Arts', 'tzavittierim@yahoo.co.jp', 'Ireland'),
(24, 'Norma Cavanagh', 37, 'ncavanaghn', 'pnvyY2zI', 'Digital Marketing', 'ncavanaghn@va.gov', 'Estonia'),
(25, 'Bradly Ponte', 31, 'bponteo', 'inX20xs4q', 'Cibersecurity', 'bponteo@bbb.org', 'Indonesia');

-- --------------------------------------------------------

--
-- 테이블 구조 `teacher`
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
-- 테이블의 덤프 데이터 `teacher`
--

INSERT INTO `teacher` (`teacherId`, `teacherName`, `teacherUserName`, `teacherPassword`, `courseId`, `teacherEmail`, `teacherPhoneNumber`) VALUES
(1, 'Zelda Feldstein', 'zfeldstein0', 'EXW2sD9HVPVL', 1, 'zfeldstein0@mozilla.org', 262),
(2, 'Rosalind Bletso', 'rbletso1', 'euQUsrm', 2, 'rbletso1@scientificamerican.com', 612),
(3, 'Richard Sambath', 'rsambath2', 'LPwEM52oU5', 3, 'rsambath2@redcross.org', 489),
(4, 'Goldy Borthe', 'gborthe3', 'Y7699ZKi2cT', 4, 'gborthe3@51.la', 216),
(5, 'Orran Stoaks', 'ostoaks4', '5NY5CxFYsz0T', 5, 'ostoaks4@livejournal.com', 852),
(6, 'Aldridge Wennington', 'awennington5', 'klKToQeF', 6, 'awennington5@booking.com', 729);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);

--
-- 테이블의 인덱스 `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollmentId`),
  ADD KEY `stuId` (`stuId`),
  ADD KEY `courseId` (`courseId`);

--
-- 테이블의 인덱스 `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeId`),
  ADD KEY `writer` (`writer`);

--
-- 테이블의 인덱스 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stuId`);

--
-- 테이블의 인덱스 `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherId`),
  ADD UNIQUE KEY `teacherName` (`teacherName`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollmentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 테이블의 AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `stuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`stuId`) REFERENCES `students` (`stuId`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`);

--
-- 테이블의 제약사항 `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`writer`) REFERENCES `teacher` (`teacherName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
