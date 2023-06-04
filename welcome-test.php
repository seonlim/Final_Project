<?php
require_once("./inc/config.inc.php");
require_once("./inc/Entities/Students.class.php");
require_once("./inc/Utilities/PDOServices.class.php");
require_once("./inc/Utilities/DAO/StudentsDAO.class.php");
require_once("./inc/Student_page.class.php");


session_start();
LoginHandler::checkLogin();
StudentsDAO::init();

$nowUser = $_SESSION["usernameStu"];

echo "Hello" . $nowUser->getStudentName();

Student_Page::studentHead();
Student_Page::studentInfo($nowUser);
Student_Page::studentFooter();
