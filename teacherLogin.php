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
require_once("inc/HomeHeader.class.php");
require_once("inc/Footer.class.php");
require_once("inc/Title.class.php");


$errorMessage = '';

$warningMessage = '';


if (!empty($_POST)) {

    $teacherUserName = $_POST['teacherUsername'];
    $teacherPassword = $_POST['teacherPassword'];

    // if one of the inputs is empty
    if (empty($teacherUserName) || empty($teacherPassword)) {
        $warningMessage = "Username or Password incorrect";
    } else {
        // call the connection with the database
        TeacherDAO::init();

        // what is the student logged
        $alreadyUser = TeacherDAO::getTeacherByUserName($teacherUserName);

        // Check if the DAO returned an object of type user
        if ($alreadyUser instanceof Teacher && $alreadyUser->checkteaLogin($teacherPassword)) {
            // start a session
            session_start();

            $_SESSION["Teacherlogged"] = true;

            // set the user typed as the now user
            $_SESSION['teacherUsername'] = $alreadyUser;

            header("Location: index1.php");
            exit();
        } else {
            $errorMessage = "Username or Password incorrect";
        }
    }
} 

echo Teacher_Page::teacherHead();
echo Title::htmlTitle("Teacher Login");
echo HomeHeader::homeBanner("","","");

if (!empty($errorMessage)) {
    echo Teacher_Page::errorPopUp($errorMessage);
}

if (!empty($warningMessage)) {
    echo Teacher_Page::warningPopUp($warningMessage);
}

echo Teacher_Page::teacherLogin();
// echo Teacher_Page::teacherFooter();
echo Footer::pageFooter();
?>