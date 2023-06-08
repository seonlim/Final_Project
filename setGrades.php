<?php
require_once("inc/Utilities/Page.class.php");
require_once("inc/Entities/Grades.class.php");
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
require_once("inc/Utilities/GradesRepository.class.php");
require_once("inc/Utilities/DAO/GradesDAO.class.php");



session_start();
GradesDAO::init();
LogHandlerDAO::checkteaLogin();
TeacherDAO::init();

$nowUser = $_SESSION['teacherUsername'];


$allGrades = GradesDAO::getAllStudentsGrades();
// var_dump($allGrades);

$gradesRepository = new GradesRepository();
echo Page::getPageHead();

// header 
echo HomeHeader::homeBanner("<h5>"."<a href='index1.php'>HOME</a>". "</h5>","<h5>"."<a href='teacher_notice.php'> NOTICE </a>". "</h5>","<h5>"."<a href='logout.php'> LOGOUT</a>". "</h5>");


if( ! empty($_POST['gradesBTN'])){
    $newGrades = new Grades();
    $newGrades->setStudentId($_POST['stuId']);
    $newGrades->setCourseId($_POST['courseId']);
    $newGrades->setTerm($_POST['term']);
    $newGrades->setCourseWork_1($_POST['CourseWork_01']);
    $newGrades->setCourseWork_2($_POST['CourseWork_02']);
    $newGrades->setMidTerm($_POST['MidTerm']);
    $newGrades->setFinalExam($_POST['Final_Exam']);

    GradesDAO::insertGrades($newGrades);
    
}else{
    echo Page::newGrades();
}


echo Page::getPageFooter();
echo Footer::pageFooter();



?>