<?php
require_once("./inc/config.inc.php");
require_once("./inc/Entities/Students.class.php");
require_once("./inc/Entities/Grades.class.php");
require_once("./inc/Utilities/PDOServices.class.php");
require_once("./inc/Utilities/DAO/StudentsDAO.class.php");
require_once("./inc/Utilities/DAO/GradesDAO.class.php");
require_once("./inc/Utilities/LoginHandler.class.php");
require_once("./inc/Student_page.class.php");


session_start();
LoginHandler::checkLogin();
StudentsDAO::init();
GradesDAO::init();

$nowUser = $_SESSION['usernameStu'];


echo '<h1>Hello '.$nowUser->getStudentName().' !'.'</h1>';

Student_Page::studentHead();
echo Student_Page::studentInfo($nowUser);
$studentGrades = GradesDAO::getStudentGrades($nowUser->getStudentId());
echo Student_Page::studentGrades($studentGrades);

// var_dump(Student_Page::studentInfo($nowUser));
Student_Page::studentFooter();
