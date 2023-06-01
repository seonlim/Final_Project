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


if ( ! empty($_POST)) {
    $newStudent = new Students();
    $newStudent->setStudentName($_POST['stuName']);
    $newStudent->setStudentAge($_POST['stuAge']);
    $newStudent->setStudentUserName($_POST['stuUserName']);
    $newStudent->setStudentPassword($_POST['stuPassword']);
    $newStudent->setStudentCourse($_POST['stuCourse']);
    $newStudent->setStudentEmail($_POST['stuEmail']);
    $newStudent->setStudentCountry($_POST['stuCountry']);

    // $newStudent = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $newStudent->setPassword($newStudent);

    $studentExist = StudentsDAO::getStudentByUserName($_POST['stuUserName']);
    
    if (!$studentExist) {
        StudentsDAO::insertStudents($newStudent);  
        echo Page::successMessage();
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