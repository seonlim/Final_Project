<?php

class Student_Page{


    public static function studentHead($css){
        $studentHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Student Login Page</title>
            <link rel="stylesheet" href="./css/'.$css.'">
        </head>
        <body>
        ';
        return $studentHead;
    }

    public static function warningPopUp() {
        $warningPopUp = '
        <div class="warning">  
            Please, fill all the inputs.
        </div>
        ';
        return $warningPopUp;
    }

    public static function errorPopUp() {
        $errorPopUp = '
        <div class="error">  
            Username or Password incorrect
        </div>
        ';
        return $errorPopUp;
    }

    public static function studentLogin(){
        $studentLogin = '
        <main>
            <section class="background">
                <section class="login-button">
                    <section class="login-form">
                        <div class="buttons">
                            <p class="student">Student</p>
                            <a class="teacher" href="teacherLogin.php">Teacher</a>
                        </div>
                        <section class="student-login">
                            <article>
                                <h1>Student Login</h1>
                            </article>
                            <form method="POST" action="'.$_SERVER["PHP_SELF"].'">
                                <article>
                                    <label for="name">Your Username</label>
                                    <input type="text" name="usernameStu" id="usernameStu" placeholder="Username">
                                </article>
                                <article>
                                    <label for="password">Your Password</label>
                                    <input type="password" name="passwordStu" id="passwordStu" placeholder="Password">
                                </article>
                                <div class="submiBtn">
                                    <input class="btn" type="submit" value="Login">
                                </div>
                            </form>
                        </section>
                    </section>
                </section>
            </section>
        </main>
        ';
        return $studentLogin;
    }


    public static function studentInfo(Students $nowUser){
        $studentInfo = '
            <main>
            <section id="studentInfo">
                <table class="studentInfo-Table">
                    <tbody>
                        <tr class="row">
                            <th scope="row"> Student ID: </th>
                            <td>'.$nowUser->getStudentId().'</td>
                        </tr>
                        <tr class="row">
                            <th scope="row"> Name: </th>
                            <td>'.$nowUser->getStudentName().'</td>
                        </tr>
                        <tr class="row">
                        <th scope="row">Age: </th>
                            <td>'.$nowUser->getStudentAge().'</td>
                        </tr>
                        <tr class="row">
                            <th scope="row">Country: </th>
                            <td>'.$nowUser->getStudentCountry().'</td>
                        </tr>
                        <tr class="row">
                            <th scope="row">Username: </th>
                            <td>'.$nowUser->getStudentUserName().'</td>
                        </tr>
                        <tr class="row">
                            <th scope="row">Email: </th>
                            <td>'.$nowUser->getStudentEmail().'</td>
                        </tr>
                        <tr class="row">
                            <th scope="row">Course: </th>
                            <td>'.$nowUser->getStudentCourse().'</td>
                        </tr>
                        </tbody>
                        </table>
                        <p>
                            <span> * </span> you are not allowed to change data. If necessary, contact your teacher for more information
                        </p>
        
            </section>
        
        ';
        return $studentInfo;
            
    }

    public static function studentGrades($studentGrades){
        $gradesTable = ' 
            <main>
            <table class="studentGrades-Table">
            <thead>
                <tr>
                    <th>Term</th>
                    <th>CourseWork 01</th>
                    <th>CourseWork 02</th>
                    <th>MidTerm</th>
                    <th>Final Exam</th>
                    <th> Total % </th>
                </tr>
            </thead>
            <tbody>';

            $gradesRows = ''; // variable to store the rows

            foreach($studentGrades as $grade) {
                $gradesRows .= self::gradesRow($grade);
            }
        
            $gradesTable .= $gradesRows;
        
            $gradesTable .= '
            </tbody>
        </table>
        ';

        return $gradesTable;
    
    }
    
    public static function gradesRow($grade) { 
        // average of grades per term
        $average = ($grade->getCourseWork_1() + $grade->getCourseWork_2() + $grade->getMidTerm() + $grade->getFinalExam()) / 4;

        // avarage but in %
        $averagePercentage = ($average / 100) * 100;
        // variable : asks if ($averagePercentage < 70) ? if yes $color =  'crimson' if not default
        $color = ($averagePercentage < 70) ? 'crimson' : '';


        $gradesRow = '
            <tr>
            <td>'.$grade->getTerm().'</td>
                <td>'.$grade->getCourseWork_1().'</td>
                <td>'.$grade->getCourseWork_2().'</td>
                <td>'.$grade->getMidTerm().'</td>
                <td>'.$grade->getFinalExam().'</td> 
                <td style="color:'.$color.'">'.$averagePercentage.'%</td>           
            </tr>
        ';
        return $gradesRow;
    }

    public static function contactTeacher (){
        $contactTeacher = '
                <section class="form-contact">
                    <article class="title">
                        <h2>Talk to a Teacher</h2>
                    </article>
                    <form>
                        <aside>
                            <label for="fname">Teacher Name</label>
                            <input type="text" id="tname" name="teachername" placeholder="Name of the teacher">
                        </aside>
                        <aside>
                            <label for="stuUserName">Your Username</label>
                            <input type="text" id="stuUser" name="stuUser" placeholder="Username">
                        </aside>
                        <aside>
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Message" required></textarea>
                        </aside>
                        <aside class="toTeacherBtn">
                            <input type="submit" value="Submit" class="btnContact">
                        </aside>
                    </form>
                </section>
            </section>';

        return $contactTeacher;
    }
    

    public static function studentFooter(){
        $studentFooter = '
            </main>
            </body>
        </html>
        ';
        return $studentFooter;
    }
}
?>