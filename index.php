<?php
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/PDOServices.class.php");
require_once("inc/Entities/Course.class.php");
require_once("inc/Entities/Enrollment.class.php");
require_once("inc/Utilities/StudentsRepository.class.php");
require_once("inc/Entities/Students.class.php");
require_once("inc/Entities/Teacher.class.php");
require_once("inc/Utilities/DAO/StudentsDAO.class.php");
require_once("inc/config.inc.php");


StudentsDAO::startDb();

$studentsList = StudentsDAO::getAllStudents();
$singleStudent = StudentsDAO::getStudentByUserName("lu-corradini");
$studentsRepository = new StudentsRepository();

$studentsRepository->setStudentsList($studentsList);

echo Page::getPageHead();
echo Page::stuTable(StudentsDAO::getAllStudents());
echo Page::newStudentForm();
// var_dump($studentsList);
echo Page::getPageFooter();
?>