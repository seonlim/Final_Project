<?php
require_once("inc/config.inc.php");
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/PDOServices.class.php");
require_once("inc/Entities/Course.class.php");
require_once("inc/Entities/Enrollment.class.php");
require_once("inc/Utilities/StudentsRepository.class.php");
require_once("inc/Entities/Students.class.php");
require_once("inc/Entities/Teacher.class.php");
require_once("inc/Utilities/DAO/StudentsDAO.class.php");
require_once("inc/Utilities/DAO/LogHandlerDAO.php");
require_once("./inc/Utilities/LoginHandler.class.php");
require_once("inc/Utilities/DAO/TeacherDAO.class.php");
require_once("inc/Utilities/Teacher_Page.php");
require_once("./inc/Student_page.class.php");

// Header and footer from home page
require_once("inc/HomeHeader.class.php");
require_once("inc/Footer.class.php");
require_once("inc/Title.class.php");
// notice import
require_once("inc/Utilities/PDOServices.class.php");
require_once("inc/Utilities/DAO/NoticeDAO.class.php");
require_once("inc/Utilities/NoticeRepository.class.php");
require_once("inc/Entities/Notice.class.php");
require_once("inc/Utilities/Notice_Page.class.php");

NoticeDAO::startDb();
LoginHandler::checkLogin();
StudentsDAO::init();

$nowUser = $_SESSION['usernameStu'];

echo Page::getPageHead();

echo HomeHeader::homeBanner("<h5>"."<a href='studentGrades.php'> GRADES</a>". "</h5>","<h5>"."<a href='logout.php'> LOGOUT</a>". "</h5>", "<h5>"."<a href='studentInfo.php'>" .$nowUser->getStudentUserName() ."</a>". "</h5>");

echo Notice_Page::getPageHead();
echo Notice_Page::noticeTable(NoticeDAO::getAllNotices());
echo Page::getPageFooter();
echo Footer::pageFooter();
// echo Notice_Page::getPageFooter();
?>
