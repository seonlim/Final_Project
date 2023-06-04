<?php
require_once("./inc/config.inc.php");
require_once("./inc/Entities/Students.class.php");
require_once("./inc/Utilities/PDOServices.class.php");
require_once("./inc/Utilities/DAO/StudentsDAO.class.php");
require_once("./inc/Student_page.class.php");

// // check if the inputs are empty dispay an error
// if (!empty($_POST) && (empty($_POST['usernameStu']) || empty($_POST['passwordStu']))) {
//     echo "<p>Please fill in both username and password fields.</p>";
// }

if(!empty($_POST)){

    // call the connection with the database
    StudentsDAO::init();
     
    $StuUserName = $_POST['usernameStu'];
    $StuPassword = $_POST['passwordStu'];


    // what is the student logged
    $alreadyUser = StudentsDAO::getStudentByUserName($StuUserName);
    //Check the DAO returned an object of type user
    if( (gettype($alreadyUser) === "object") && (get_class($alreadyUser) === "Students") ){
        // var_dump("lucas");
        // header("Location: welcome-test.php");
        var_dump($alreadyUser->checkPassword($StuPassword));
        // the password needs to be hashed for checkPassword() to work
        if ($alreadyUser->checkPassword($_POST['passwordStu']))  {
            // start a session 
            session_start();

            
            $_SESSION["Stulogged"] = true;
            // set the user typed as the now user
            $_SESSION['usernameStu'] = $alreadyUser;

            header("Location: welcome-test.php");
            exit();
        }
    }
} 


echo Student_Page::studentHead();
echo Student_Page::studentLogin();
echo Student_Page::studentFooter();


?>