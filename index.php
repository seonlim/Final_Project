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

// starting the database connection.
StudentsDAO::startDb();

// creating the variables to get all students and a single students if necessary.
$studentsList = StudentsDAO::getAllStudents();
$singleStudent = StudentsDAO::getStudentByUserName("lu-corradini");
$studentsRepository = new StudentsRepository();

// creating the funtion to add new students to the database and the table.
if ( ! empty($_POST)) {
    $newStudent = new Students();
    $newStudent->setStudentId($_POST['stuId']);
    $newStudent->setStudentName($_POST['stuName']);
    $newStudent->setStudentAge($_POST['stuAge']);
    $newStudent->setStudentUserName($_POST['stuUserName']);
    $newStudent->setStudentPassword($_POST['stuPassword']);
    $newStudent->setStudentCourse($_POST['stuCourse']);
    $newStudent->setStudentEmail($_POST['stuEmail']);
    $newStudent->setStudentCountry($_POST['stuCountry']);

    $studentExist = StudentsDAO::getStudentByUserName($_POST['stuUserName']);
    
    if (!$studentExist) {
        StudentsDAO::insertStudents($newStudent);  
        // echo Page::successMessage();
        unset($_POST);
    }
}

$studentsRepository->setStudentsList($studentsList);

echo Page::getPageHead();
echo Page::stuTable(StudentsDAO::getAllStudents());
echo Page::newStudentForm();
// var_dump($studentsList);
echo Page::getPageFooter();
?>