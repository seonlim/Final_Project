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
    if (! empty($_POST["editForm"])) {
        $upStudent = new Students();
        $upStudent->setStudentId($_POST['stuId']);
        $upStudent->setStudentName($_POST['stuName']);
        $upStudent->setStudentAge($_POST['stuAge']);
        $upStudent->setStudentUserName($_POST['stuUserName']);
        $upStudent->setStudentPassword(password_hash($_POST['stuPassword'],PASSWORD_DEFAULT));
        $upStudent->setStudentCourse($_POST['stuCourse']);
        $upStudent->setStudentEmail($_POST['stuEmail']);
        $upStudent->setStudentCountry($_POST['stuCountry']);

        StudentsDAO::updateStudentById($upStudent);
    } else {
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
    
}

$currentUser = null;

if (! empty($_GET["editForm"])) {
    $studentUsername = $_GET["stuId"];
    $currentUser = StudentsDAO::getStudentByUserName($studentUsername);
}

$studentsRepository->setStudentsList($studentsList);

echo Page::getPageHead();
echo Page::stuTable(StudentsDAO::getAllStudents());
if (isset($currentUser)) {
    echo Page::editStudentForm($currentUser);
} else {
    echo Page::newStudentForm();
}
// var_dump($studentsList);
echo Page::teacherContact(); // contact form
echo Page::getPageFooter();
?>