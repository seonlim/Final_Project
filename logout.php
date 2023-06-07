<?php
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/PDOServices.class.php");
require_once("inc/Entities/Course.class.php");
require_once("inc/Entities/Enrollment.class.php");
require_once("inc/Utilities/StudentsRepository.class.php");
require_once("inc/Entities/Students.class.php");
require_once("inc/Entities/Teacher.class.php");
require_once("inc/Utilities/DAO/StudentsDAO.class.php");
require_once("inc/Utilities/DAO/LogHandlerDAO.php");
require_once("inc/Utilities/DAO/TeacherDAO.class.php");
require_once("inc/Utilities/Teacher_Page.php");
require_once("inc/config.inc.php");
require_once("inc/HomeHeader.class.php");
require_once("inc/Footer.class.php");
require_once("inc/Title.class.php");

session_start();
session_destroy(); // destroy the session

header("Location: index.php"); // goes back to the home page
exit();