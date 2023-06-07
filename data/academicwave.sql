-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/06/2023 às 05:11
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `academicwave`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `course`
--

CREATE TABLE `course` (
  `courseId` int(11) NOT NULL,
  `courseName` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `course`
--

INSERT INTO `course` (`courseId`, `courseName`) VALUES
(1, 'Data Science'),
(2, 'Cibersecurity'),
(3, 'Culinary Arts'),
(4, 'Psychology'),
(5, 'Public Relations'),
(6, 'Digital Marketing');

-- --------------------------------------------------------

--
-- Estrutura para tabela `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollmentId` int(11) NOT NULL,
  `stuId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `enrollment`
--

INSERT INTO `enrollment` (`enrollmentId`, `stuId`, `courseId`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2),
(4, 4, 3),
(5, 5, 4),
(6, 6, 5),
(7, 7, 3),
(8, 8, 6),
(9, 9, 6),
(10, 10, 3),
(11, 11, 6),
(12, 12, 3),
(13, 13, 1),
(14, 14, 2),
(15, 15, 3),
(16, 16, 5),
(17, 17, 5),
(18, 18, 6),
(19, 19, 4),
(20, 20, 1),
(21, 21, 1),
(22, 22, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `grades`
--

CREATE TABLE `grades` (
  `gradeId` int(11) NOT NULL,
  `stuId` int(11) DEFAULT NULL,
  `courseId` int(11) DEFAULT NULL,
  `term` int(11) NOT NULL,
  `courseWork_1` float(4,2) DEFAULT NULL,
  `courseWork_2` float(4,2) DEFAULT NULL,
  `midTerm` float(4,2) DEFAULT NULL,
  `finalExam` float(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `grades`
--

INSERT INTO `grades` (`gradeId`, `stuId`, `courseId`, `term`, `courseWork_1`, `courseWork_2`, `midTerm`, `finalExam`) VALUES
(1, 1, 1, 4, 97.00, 89.00, 85.00, 75.00),
(2, 2, 2, 4, 90.00, 97.00, 70.00, 63.00),
(3, 3, 2, 3, 89.00, 65.00, 55.00, 45.00),
(4, 4, 3, 2, 84.00, 91.00, 41.00, 54.00),
(5, 5, 4, 3, 54.00, 32.00, 54.00, 32.00),
(6, 6, 5, 4, 90.00, 76.00, 54.00, 36.00),
(7, 7, 3, 5, 54.00, 66.00, 76.00, 87.00),
(8, 8, 6, 5, 80.00, 79.00, 50.00, 66.00),
(9, 9, 6, 3, 32.00, 78.00, 56.00, 33.00),
(10, 10, 3, 2, 54.00, 24.00, 77.00, 65.00),
(11, 11, 6, 1, 87.00, 77.00, 65.00, 34.00),
(12, 12, 3, 3, 80.00, 99.00, 54.00, 33.00),
(13, 13, 1, 5, 98.00, 78.00, 44.00, 32.00),
(14, 14, 2, 7, 87.00, 61.00, 41.00, 90.00),
(15, 15, 3, 8, 40.00, 50.00, 21.00, 87.00),
(16, 16, 5, 4, 92.00, 21.00, 32.00, 77.00),
(17, 17, 5, 3, 89.00, 77.00, 32.00, 22.00),
(18, 18, 6, 4, 86.00, 63.00, 31.00, 12.00),
(19, 19, 4, 2, 32.00, 70.00, 54.00, 43.00),
(20, 20, 1, 4, 88.00, 93.00, 32.00, 67.00),
(21, 21, 1, 5, 81.00, 76.00, 67.00, 87.00),
(22, 22, 2, 5, 90.00, 95.00, 87.00, 72.00),
(33, 22, 4, 4, 94.00, 80.00, 87.00, 98.00),
(34, 2, 2, 5, 80.00, 88.00, 43.00, 65.00),
(35, 2, 2, 3, 90.00, 92.00, 83.00, 67.40),
(36, 1, 1, 5, 80.00, 88.00, 43.00, 65.00),
(37, 1, 1, 3, 90.64, 92.70, 81.98, 90.64),
(38, 1, 1, 4, 90.40, 98.20, 70.12, 73.71);

-- --------------------------------------------------------

--
-- Estrutura para tabela `students`
--

CREATE TABLE `students` (
  `stuId` int(11) NOT NULL,
  `stuName` char(50) DEFAULT NULL,
  `stuAge` int(11) NOT NULL,
  `stuUserName` char(50) NOT NULL,
  `stuPassword` varchar(550) NOT NULL,
  `stuCourse` char(50) DEFAULT NULL,
  `stuEmail` char(50) DEFAULT NULL,
  `stuCountry` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `students`
--

INSERT INTO `students` (`stuId`, `stuName`, `stuAge`, `stuUserName`, `stuPassword`, `stuCourse`, `stuEmail`, `stuCountry`) VALUES
(1, 'Lucas Corradini', 20, 'lu-corradini', '$2y$10$8erJVRVY2FG6WeU3egmhT.omQJRTNyGJShSsEOfs5xXM7EmKiHTNC', 'Data Science', 'lucas.corradini.2003@gmail.com', 'Brazil'),
(2, 'Leticia Guerra', 19, 'lele', '$2y$10$bPUoBTsWHV0iGeyuDarPPuKh2Sc12/JMGDCqtdjjPhykY9nffDAEa', 'Cibersecurity', 'lele@test.com', 'Brazil'),
(3, 'Luella Corkel', 33, 'lcorkel2', '$2y$10$1BX4xfNPIgcb08dsPYLKKu28eflvypzR7CFtoJps7ax9SSDctuFZq', 'Cibersecurity', 'lcorkel2@moonfruit.com', 'Honduras'),
(4, 'Harmonia Ciotti', 24, 'hciotti3', '$2y$10$UZMwvDd1u9MaaMh7Q.wkLeZsMkCtazCXw1Ork1poRz1GPy8BHTc2W', 'Culinary Arts', 'hciotti3@usatoday.com', 'China'),
(5, 'Lyell Elphinston', 29, 'lelphinston4', '$2y$10$oeVMhYh/yqj9e5M5ctz.xuD4rvqYjMtKw/acALJ79khffElZ1Ia/a', 'Psychology', 'lelphinston4@cdbaby.com', 'Sweden'),
(6, 'Lazaro Baglin', 24, 'lbaglin5', '$2y$10$R8oV2LEPlddUI3OGuvSR1eLqOTN0Sz8nxUVcaxWtM.jLN2NncIqmm', 'Public Relations', 'lbaglin5@mediafire.com', 'France'),
(7, 'Adolphe Garms', 39, 'agarms6', '$2y$10$n2h/4GGwSRUuJ2zTtZ.7IO1aTSFokIf9TzZaY0zzsvpVKrZMHj.mK', 'Culinary Arts', 'agarms6@amazon.de', 'Denmark'),
(8, 'Elora Marczyk', 33, 'emarczyk7', '$2y$10$9.RwKzRt0vN0lkHYP4WanObROsiK9K03Cxqk3Njb0t3rEgVMBUiVm', 'Digital Marketing', 'emarczyk7@lycos.com', 'Chile'),
(9, 'Derek Babon', 26, 'dbabon8', '$2y$10$.mxB2sat59uEaKwy.km1/u6vOqQfKSj6JU0GwLcOQCsSreaO34U0.', 'Digital Marketing', 'dbabon8@go.com', 'Indonesia'),
(10, 'Dewey Cattel', 21, 'dcattel9', '$2y$10$aJxpIb/aKfk39Ifzkoe/Wu/oro2PWlhHN5ON6EOpr0BaSDlK5CWAy', 'Culinary Arts', 'dcattel9@apple.com', 'France'),
(11, 'Broderick Bellringer', 44, 'bbellringera', '$2y$10$x1x1iN5cVjfaUJbP4mR54.7PkSOXCXCTUnrqiSTqtQWCuWnwWzDrK', 'Digital Marketing', 'bbellringera@webmd.com', 'Indonesia'),
(12, 'Aaren Canlin', 23, 'acanlinb', '$2y$10$bjnX.Pw9mPxgU.YIGf5Dy.W8x7TWLq4F1w5JwATUPwk2g7xBkKTre', 'Culinary Arts', 'acanlinb@jimdo.com', 'United States'),
(13, 'Gabbey Mityashev', 39, 'gmityashevc', '$2y$10$P5QPLFRGCvY5/nYfX9vQyezxQDGAUhCD1ULrLq81HO2PKVd5ldOtu', 'Data Science', 'gmityashevc@addtoany.com', 'Mexico'),
(14, 'Aeriel Pedwell', 34, 'apedwelld', '$2y$10$wnTaOo2IljEsThShfDPpLe1nptRgGN6oWSxgADp5Rya/5V6pG3.We', 'Cibersecurity', 'apedwelld@alibaba.com', 'Indonesia'),
(15, 'Abigael Ipsley', 35, 'aipsleye', '$2y$10$oaPUjcxHSua5aPMj4eeky.RFSvB4H/WOwo.e6LHHASu1yn2YXHf3K', 'Culinary Arts', 'aipsleye@google.pl', 'Mexico'),
(16, 'Sophie Grigorini', 21, 'sgrigorinif', '$2y$10$HDk2jJOX81XrKQeBiD5ndOBqdmi7tYhRdBt8TIozMoilqf9iA8LSa', 'Public Relations', 'sgrigorinif@facebook.com', 'Indonesia'),
(17, 'Lombard Austwick', 21, 'laustwickg', '$2y$10$6U6B96LOrqRqSNv0CM.1ne1EOqxv3VRestfGg98k0L9fujlwgyRMu', 'Public Relations', 'laustwickg@opensource.org', 'China'),
(18, 'Bernardo Conville', 44, 'bconvilleh', '$2y$10$cTPl4benFtPVWI5UK4gGDui3xmBq7968OmEU/ijXETDFSPQxuSCHy', 'Digital Marketing', 'bconvilleh@shutterfly.com', 'Netherlands'),
(19, 'Billie Furman', 22, 'bfurmani', '$2y$10$IAV0rNJraa8sivwJA7juFOnp6kL0n2JwXkSCKJJLMoLaby/1pV1KS', 'Psychology', 'bfurmani@imageshack.us', 'Philippines'),
(20, 'Carr Vedntyev', 36, 'cvedntyevj', '$2y$10$2MWt0PCQkJ.G6ZnSajrRruEpxJ1OqQV85CAhLI6RaPEzqPZtP2B.O', 'Data Science', 'cvedntyevj@posterous.com', 'Indonesia'),
(21, 'Leticia Guerra', 20, 'Le-Guerra', '$2y$10$UsojFWosdJwReiGEzQbwp.GeJ.Uc6QimUkq.vsoLYhaXXFFRzD2fa', 'Data Science', 'LeGuerra@gmail.com', 'Brazil'),
(22, 'Pedro', 20, 'pedro_ssgarcia', '$2y$10$MNTivWUGWoo8thpYnu/RzefJcSCZg6Zt9gTfa9LN0JEtdKnfwYA72', 'Cibersecurity', 'pedro@gmai.com', 'Mineiro');

-- --------------------------------------------------------

--
-- Estrutura para tabela `teacher`
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
-- Despejando dados para a tabela `teacher`
--

INSERT INTO `teacher` (`teacherId`, `teacherName`, `teacherUserName`, `teacherPassword`, `courseId`, `teacherEmail`, `teacherPhoneNumber`) VALUES
(1, 'Zelda Feldstein', 'zfeldstein0', 'EXW2sD9HVPVL', 1, 'zfeldstein0@mozilla.org', 262),
(2, 'Rosalind Bletso', 'rbletso1', 'euQUsrm', 2, 'rbletso1@scientificamerican.com', 612),
(3, 'Richard Sambath', 'rsambath2', 'LPwEM52oU5', 3, 'rsambath2@redcross.org', 489),
(4, 'Goldy Borthe', 'gborthe3', 'Y7699ZKi2cT', 4, 'gborthe3@51.la', 216),
(5, 'Orran Stoaks', 'ostoaks4', '5NY5CxFYsz0T', 5, 'ostoaks4@livejournal.com', 852),
(6, 'Aldridge Wennington', 'awennington5', 'klKToQeF', 6, 'awennington5@booking.com', 729);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);

--
-- Índices de tabela `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollmentId`),
  ADD KEY `stuId` (`stuId`),
  ADD KEY `courseId` (`courseId`);

--
-- Índices de tabela `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`gradeId`),
  ADD KEY `stuId` (`stuId`),
  ADD KEY `courseId` (`courseId`);

--
-- Índices de tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stuId`);

--
-- Índices de tabela `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `grades`
--
ALTER TABLE `grades`
  MODIFY `gradeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`stuId`) REFERENCES `students` (`stuId`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`courseId`) REFERENCES `course` (`courseId`);

--
-- Restrições para tabelas `grades`
--
ALTER TABLE `grades`
