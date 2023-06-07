<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/Students.class.php");
require_once("inc/Utilities/PDOServices.class.php");
require_once("inc/Utilities/DAO/StudentsDAO.class.php");
require_once("inc/Student_page.class.php");

$errorMessage = '';

$warningMessage = '';


if (!empty($_POST)) {

    $StuUserName = $_POST['usernameStu'];
    $StuPassword = $_POST['passwordStu'];

    // if one of the inputs is empty
    if (empty($StuUserName) || empty($StuPassword)) {
        $warningMessage = "Username or Password incorrect";
    } else {
        // call the connection with the database
        StudentsDAO::init();

        // what is the student logged
        $alreadyUser = StudentsDAO::getStudentByUserName($StuUserName);

        // Check if the DAO returned an object of type user
        if ($alreadyUser instanceof Students && $alreadyUser->checkPassword($StuPassword)) {
            // start a session
            session_start();

            $_SESSION["Stulogged"] = true;

            // set the user typed as the now user
            $_SESSION['usernameStu'] = $alreadyUser;

            header("Location: welcome-test.php");
            exit();
        } else {
            $errorMessage = "Username or Password incorrect";
        }
    }
} 

echo Student_Page::studentHead();
if (!empty($errorMessage)) {
    echo Student_Page::errorPopUp($errorMessage);
}

if (!empty($warningMessage)) {
    echo Student_Page::warningPopUp($warningMessage);
}
echo Student_Page::studentLogin();
echo Student_Page::studentFooter();
?>
