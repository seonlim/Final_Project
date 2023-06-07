<?php
require_once("./inc/config.inc.php");
require_once("./inc/Entities/Students.class.php");
require_once("./inc/Entities/Grades.class.php");
require_once("./inc/Utilities/PDOServices.class.php");
require_once("./inc/Utilities/DAO/StudentsDAO.class.php");
require_once("./inc/Utilities/DAO/GradesDAO.class.php");
require_once("./inc/Utilities/LoginHandler.class.php");
require_once("./inc/Student_page.class.php");
require_once("inc/HomeHeader.class.php");
require_once("inc/Footer.class.php");
require_once("inc/Title.class.php");


session_start();
LoginHandler::checkLogin();
StudentsDAO::init();
// GradesDAO::init();

$nowUser = $_SESSION['usernameStu'];



echo Student_Page::studentHead("studentPage.css");

echo Title::htmlTitle("Student Information");
echo HomeHeader::homeBanner("<h5>"."<a href='studentGrades.php'> GRADES</a>". "</h5>","<h5>"."<a href='#'> NOTICE </a>". "</h5>","<h5>"."<a href='logout.php'> LOGOUT</a>". "</h5>");

echo '<h1>Welcome '.$nowUser->getStudentName().' !'.'</h1>';
echo Student_Page::studentInfo($nowUser);
echo Student_Page::contactTeacher();
// $studentGrades = GradesDAO::getStudentGrades($nowUser->getStudentId());
// echo Student_Page::studentGrades($studentGrades);

// echo '<a href="logout.php">Log out</a>';

// var_dump(Student_Page::studentInfo($nowUser));
echo Student_Page::studentFooter();
echo Footer::pageFooter();

