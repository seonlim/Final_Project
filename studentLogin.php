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
    StudentsDAO::startDb();
     
    $StuUserName = $_POST['usernameStu'];
    $StuPassword = $_POST['passwordStu'];


    // what is the student logged
    $nowUser = StudentsDAO::getStudentByUserName($StuUserName);
    //Check the DAO returned an object of type user
    if( (gettype($nowUser) == "object") && (get_class($nowUser) == "Students") ){
        
        
        if ($nowUser->checkPassword($StuPassword))  {
            // start a session 
            session_start();

            
            $_SESSION["Stulogged"] = true;
            // set the user typed as the now user
            $_SESSION['usernameStu'] = $nowUser;

            header("Location: welcome-test.php");
            exit();
        }
    }
} else {
    echo "<p>Please fill in both username and password fields.</p>";
}


echo Student_Page::studentHead();
echo Student_Page::studentLogin();
echo Student_Page::studentFooter();


?>