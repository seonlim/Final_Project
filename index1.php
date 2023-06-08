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
// Header and footer from home page
require_once("inc/HomeHeader.class.php");
require_once("inc/Footer.class.php");
require_once("inc/Title.class.php");

// starting the database connection.
session_start();
StudentsDAO::init();
LogHandlerDAO::checkteaLogin();
TeacherDAO::init();

$nowUser = $_SESSION['teacherUsername'];

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

// header 
echo HomeHeader::homeBanner("<a href='setGrades.php'> SET GRADES</a>". "</h5>","<a href='logout.php'> LOGOUT</a>". "</h5>","<h5>" .$nowUser->getTeacherUserName() ."</a>". "</h5>");

echo Page::stuTable(StudentsDAO::getAllStudents());
if (isset($currentUser)) {
    echo Page::editStudentForm($currentUser);
} else {
    echo Page::newStudentForm();
}
// var_dump($studentsList);
// echo Page::teacherContact(); // contact form
echo Page::getPageFooter();
echo Footer::pageFooter();

?>